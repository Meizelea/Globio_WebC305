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

    <section class="relative h-screen flex items-center justify-center">

        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('https://images3.alphacoders.com/130/1304193.jpeg');">
        </div>

        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 max-w-6xl w-full mx-auto px-6 -mt-32">

            <h1 class="text-4xl font-bold mb-12 text-indigo-400 text-center drop-shadow-lg">
                My Projects
            </h1>

            <div class="grid md:grid-cols-3 gap-8">

                <div class="bg-gray-800/90 rounded-xl p-6 shadow-lg border border-gray-700 hover:transform hover:-translate-y-1 transition duration-300">
                    <h2 class="text-2xl font-semibold text-indigo-300">ComPets</h2>
                    <p class="text-gray-300 mt-3 text-sm leading-relaxed">
                        Compets here
                    </p>
                </div>

                <div class="bg-gray-800/90 rounded-xl p-6 shadow-lg border border-gray-700 hover:transform hover:-translate-y-1 transition duration-300">
                    <h2 class="text-2xl font-semibold text-indigo-300">AppDev something</h2>
                    <p class="text-gray-300 mt-3 text-sm leading-relaxed">
                        The Mobile app thingy proj in AppDev
                    </p>
                </div>

                <div class="bg-gray-800/90 rounded-xl p-6 shadow-lg border border-gray-700 hover:transform hover:-translate-y-1 transition duration-300">
                    <h2 class="text-2xl font-semibold text-indigo-300">Hehe</h2>
                    <p class="text-gray-300 mt-3 text-sm leading-relaxed">
                        Uhhh something??? I forgor all shi I made
                    </p>
                </div>

            </div>

        </div>
    </section>

</body>
</html>