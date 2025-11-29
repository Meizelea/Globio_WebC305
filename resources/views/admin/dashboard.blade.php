<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white min-h-screen p-8">

    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-10 border-b border-gray-700 pb-4">
            <h1 class="text-3xl font-bold text-indigo-400">Project Manager</h1>
            <div class="flex items-center space-x-4">
                <a href="{{ route('projects.index') }}" target="_blank" class="text-gray-400 hover:text-white">View Live Site →</a>
                
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-red-400 hover:text-red-300 text-sm border border-red-900 bg-red-900/20 px-3 py-1 rounded">Logout</button>
                </form>
            </div>
        </div>

        @if(session('success'))
            <div class="bg-green-600/20 text-green-400 p-4 rounded-lg mb-6 border border-green-600/50">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid md:grid-cols-3 gap-8">
            <div class="md:col-span-1">
                <div class="bg-gray-800 p-6 rounded-xl border border-gray-700 sticky top-8">
                    <h2 class="text-xl font-semibold mb-4 text-indigo-300">Add New Project</h2>
                    
                    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        <div>
                            <label class="block text-sm text-gray-400 mb-1">Project Title</label>
                            <input type="text" name="title" class="w-full bg-gray-700 border border-gray-600 rounded p-2 focus:outline-none focus:border-indigo-500 text-white" required>
                        </div>
                        
                        <div>
                            <label class="block text-sm text-gray-400 mb-1">Project Image</label>
                            <input type="file" name="image" class="w-full text-gray-300 text-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-600 file:text-white hover:file:bg-indigo-700 cursor-pointer bg-gray-700 rounded">
                        </div>

                        <div>
                            <label class="block text-sm text-gray-400 mb-1">Description</label>
                            <textarea name="description" rows="4" class="w-full bg-gray-700 border border-gray-600 rounded p-2 focus:outline-none focus:border-indigo-500 text-white" required></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded transition">
                            Create Project
                        </button>
                    </form>
                </div>
            </div>

            <div class="md:col-span-2">
                <h2 class="text-xl font-semibold mb-4 text-indigo-300">Existing Projects</h2>
                <div class="space-y-4">
                    @foreach($projects as $project)
                    <div class="bg-gray-800 p-5 rounded-lg border border-gray-700 flex justify-between items-start">
                        <div class="flex gap-4">
                            @if($project->image)
                                <img src="{{ asset('storage/' . $project->image) }}" class="w-16 h-16 object-cover rounded bg-gray-900">
                            @else
                                <div class="w-16 h-16 bg-gray-700 rounded flex items-center justify-center text-xs text-gray-500">No Img</div>
                            @endif

                            <div>
                                <h3 class="text-lg font-bold text-white">{{ $project->title }}</h3>
                                <p class="text-gray-400 text-sm mt-1">{{ Str::limit($project->description, 100) }}</p>
                            </div>
                        </div>

                        <div class="flex space-x-2 ml-4">
                            <a href="{{ route('admin.projects.edit', $project->id) }}" class="px-3 py-1 bg-blue-600/20 text-blue-400 rounded hover:bg-blue-600 hover:text-white transition text-sm">
                                Edit
                            </a>
                            
                            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Delete this project?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1 bg-red-600/20 text-red-400 rounded hover:bg-red-600 hover:text-white transition text-sm">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                    @endforeach

                    @if($projects->isEmpty())
                        <p class="text-gray-500 text-center py-10">No projects found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>