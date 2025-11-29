<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage; // 👈 Import Storage for image handling

class AdminProjectController extends Controller
{
    // ==========================
    // AUTHENTICATION METHODS
    // ==========================

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->is_admin) {
                return redirect()->intended(route('admin.dashboard'));
            }

            Auth::logout();
            return back()->withErrors(['email' => 'You are not authorized to access the admin area.']);
        }

        return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    // ==========================
    // PUBLIC & DASHBOARD METHODS
    // ==========================

    public function index() {
        $projects = Project::all();
        return view('projects', compact('projects'));
    }

    public function dashboard() {
        $projects = Project::all();
        return view('admin.dashboard', compact('projects'));
    }

    // ==========================
    // CRUD METHODS (With Images)
    // ==========================

    public function store(Request $request) {
        // 1. Validate inputs (including image)
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB
        ]);

        // 2. Handle Image Upload
        if ($request->hasFile('image')) {
            // Save to 'storage/app/public/projects'
            $path = $request->file('image')->store('projects', 'public'); 
            $validated['image'] = $path;
        }

        // 3. Create Project
        Project::create($validated);

        return redirect()->back()->with('success', 'Project created successfully!');
    }

    public function edit($id) {
        $project = Project::findOrFail($id);
        return view('admin.edit', compact('project'));
    }

    public function update(Request $request, $id) {
        $project = Project::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            // Store new image
            $path = $request->file('image')->store('projects', 'public');
            $validated['image'] = $path;
        }

        $project->update($validated);
        return redirect()->route('admin.dashboard')->with('success', 'Project updated!');
    }

    public function destroy($id) {
        $project = Project::findOrFail($id);
        
        // Delete image file from folder
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }
        
        $project->delete();
        return redirect()->back()->with('success', 'Project deleted!');
    }
}