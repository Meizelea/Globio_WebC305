<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Home</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800"> @include('partials.nav')

    <section class="relative h-screen">

        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('https://images3.alphacoders.com/130/1304193.jpeg');">
        </div>

        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative max-w-6xl mx-auto px-6 h-full flex flex-col md:flex-row items-center justify-center gap-12">

            <div class="text-center md:text-left">
                <h2 class="text-4xl md:text-5xl font-extrabold leading-tight mb-4 text-white">
                    Hi, I'm <span class="text-blue-300">John Edward G. Globio</span>
                </h2>

                <p class="text-lg text-gray-200 mb-6">
                    A passionate web developer who loves building clean, modern, and user-focused websites.
                </p>

                <a href="/projects" 
                class="inline-block px-6 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
                    View My Projects
                </a>
            </div>

            <div class="flex justify-center w-full md:w-1/2">
                <img src="https://i.pinimg.com/736x/08/8c/a7/088ca7d250055c9615687e61b3d00248.jpg"
                    class="w-3/4 md:w-full rounded-xl shadow-lg border border-white/20 object-cover"
                    alt="Portfolio Illustration">
            </div>

        </div>
    </section>

    <section class="py-16 bg-white text-gray-800"> <div class="max-w-6xl mx-auto px-6 text-center">

            <h3 class="text-3xl font-bold mb-10">Skills Overview</h3>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="p-6 bg-gray-100 rounded-xl shadow hover:shadow-md transition">
                    <h4 class="font-semibold text-lg">HTML</h4>
                </div>

                <div class="p-6 bg-gray-100 rounded-xl shadow hover:shadow-md transition">
                    <h4 class="font-semibold text-lg">CSS</h4>
                </div>

                <div class="p-6 bg-gray-100 rounded-xl shadow hover:shadow-md transition">
                    <h4 class="font-semibold text-lg">JavaScript</h4>
                </div>

                <div class="p-6 bg-gray-100 rounded-xl shadow hover:shadow-md transition">
                    <h4 class="font-semibold text-lg">Laravel</h4>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-6 bg-gray-800 text-white text-center">
        <p>© 2025 John Edward Globio. All rights reserved.</p>
    </footer>

</body>
</html>