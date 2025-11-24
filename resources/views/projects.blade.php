<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white">

    @include('partials.nav')

    <div class="max-w-6xl mx-auto py-20 px-6">

        <h1 class="text-4xl font-bold mb-10 text-indigo-400">My Projects</h1>

        <div class="grid md:grid-cols-3 gap-8">

            <!-- Example Project Card -->
            <div class="bg-gray-800 rounded-xl p-6 shadow-lg border border-gray-700">
                <h2 class="text-2xl font-semibold text-indigo-300">Project One</h2>
                <p class="text-gray-400 mt-2">
                    A short description about your project. You can write what tech stack you used.
                </p>
            </div>

            <div class="bg-gray-800 rounded-xl p-6 shadow-lg border border-gray-700">
                <h2 class="text-2xl font-semibold text-indigo-300">Project Two</h2>
                <p class="text-gray-400 mt-2">
                    Another sample project description. Replace with your real work.
                </p>
            </div>

            <div class="bg-gray-800 rounded-xl p-6 shadow-lg border border-gray-700">
                <h2 class="text-2xl font-semibold text-indigo-300">Project Three</h2>
                <p class="text-gray-400 mt-2">
                    You can add images, links, GitHub buttons, etc.
                </p>
            </div>

        </div>

    </div>

</body>
</html>
