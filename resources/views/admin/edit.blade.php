<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-lg bg-gray-800 p-8 rounded-xl border border-gray-700">
        <h2 class="text-2xl font-bold mb-6 text-indigo-400">Edit Project</h2>
        
        <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm text-gray-400 mb-1">Project Title</label>
                <input type="text" name="title" value="{{ $project->title }}" class="w-full bg-gray-700 border border-gray-600 rounded p-2 focus:outline-none focus:border-indigo-500 text-white" required>
            </div>

            <div>
                <label class="block text-sm text-gray-400 mb-1">Update Image</label>
                
                @if($project->image)
                    <div class="mb-2">
                        <p class="text-xs text-gray-500 mb-1">Current Image:</p>
                        <img src="{{ asset('storage/' . $project->image) }}" class="w-full h-32 object-cover rounded border border-gray-600">
                    </div>
                @endif

                <input type="file" name="image" class="w-full text-gray-300 text-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-600 file:text-white hover:file:bg-indigo-700 cursor-pointer bg-gray-700 rounded">
            </div>

            <div>
                <label class="block text-sm text-gray-400 mb-1">Description</label>
                <textarea name="description" rows="5" class="w-full bg-gray-700 border border-gray-600 rounded p-2 focus:outline-none focus:border-indigo-500 text-white" required>{{ $project->description }}</textarea>
            </div>

            <div class="flex space-x-3 pt-4">
                <button type="submit" class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded transition">
                    Update
                </button>
                <a href="{{ route('admin.dashboard') }}" class="flex-1 bg-gray-700 hover:bg-gray-600 text-white text-center font-bold py-2 px-4 rounded transition">
                    Cancel
                </a>
            </div>
        </form>
    </div>

</body>
</html>