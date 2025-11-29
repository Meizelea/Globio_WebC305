<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | My Projects</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white">

    @include('partials.nav')

    <section class="relative min-h-screen flex items-center justify-center py-20">

        <div class="absolute inset-0 bg-cover bg-center fixed"
            style="background-image: url('https://images3.alphacoders.com/130/1304193.jpeg');">
        </div>

        <div class="absolute inset-0 bg-black/60 fixed"></div>

        <div class="relative z-10 max-w-6xl w-full mx-auto px-6 mt-10">

            <h1 class="text-4xl font-bold mb-12 text-indigo-400 text-center drop-shadow-lg">
                My Projects
            </h1>

            <div class="grid md:grid-cols-3 gap-8">

                @forelse($projects as $project)
                    <div class="bg-gray-800/90 rounded-xl overflow-hidden shadow-lg border border-gray-700 hover:transform hover:-translate-y-1 transition duration-300 flex flex-col">
                        
                        <div class="h-48 w-full bg-gray-900 overflow-hidden relative group">
                            @if($project->image)
                                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-gray-500">
                                    <span>No Image Available</span>
                                </div>
                            @endif
                        </div>

                        <div class="p-6 flex-1 flex flex-col">
                            <h2 class="text-2xl font-semibold text-indigo-300">{{ $project->title }}</h2>
                            <p class="text-gray-300 mt-3 text-sm leading-relaxed flex-1">
                                {{ $project->description }}
                            </p>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center text-gray-400 py-10">
                        <p class="text-xl">No projects uploaded yet.</p>
                    </div>
                @endforelse

            </div>
        </div>
    </section>

    <footer class="py-6 bg-gray-800 text-white text-center">
        <p>© 2025 John Edward Globio. All rights reserved.</p>
    </footer>

</body>
</html>