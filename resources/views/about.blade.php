<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | About Me</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white">

    @include('partials.nav')

    <section class="relative h-screen flex items-center justify-center">

        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('https://images3.alphacoders.com/130/1304193.jpeg');">
        </div>

        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 max-w-3xl mx-auto px-6 text-center -mt-36">
            
            <h2 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6 text-white drop-shadow-xl">
                <span class="text-blue-300">About</span> <span class="text-red-500">Me</span>
            </h2>

            <p class="text-lg md:text-xl text-gray-200 leading-relaxed mb-6 drop-shadow-md">
                Welcome to my portfolio! I am a passionate developer focused on building
                clean, functional, and modern applications. I enjoy turning ideas into real,
                working projects.
            </p>

            <p class="text-gray-300 text-md md:text-lg drop-shadow-md">
                This site showcases my projects, skills, and the technologies I use.
                Feel free to explore and send me a message on the contact page!
            </p>
            
        </div>
    </section>

    <footer class="py-6 bg-gray-800 text-white text-center">
        <p>© 2025 John Edward Globio. All rights reserved.</p>
    </footer>

</body>
</html>