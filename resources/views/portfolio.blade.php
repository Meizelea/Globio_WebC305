<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John Edward Globio | Portfolio</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-900">

    <!-- NAVBAR -->
    <nav class="w-full py-5 bg-white shadow">
        <div class="max-w-6xl mx-auto flex justify-between items-center px-4">
            <h1 class="text-2xl font-bold">JEG Portfolio</h1>
            <div class="space-x-6">
                <a href="#about" class="hover:text-blue-600">About</a>
                <a href="#projects" class="hover:text-blue-600">Projects</a>
                <a href="#contact" class="hover:text-blue-600">Contact</a>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="max-w-6xl mx-auto px-4 py-20 flex flex-col md:flex-row items-center">
        <div class="flex-1">
            <h2 class="text-4xl md:text-5xl font-bold leading-tight">
                Hi, I'm <span class="text-blue-600">John Edward Globio</span><br>
                Full-Stack Web Developer
            </h2>

            <p class="mt-4 text-lg text-gray-600">
                Passionate about building modern, responsive, and user-friendly web applications.
                I enjoy transforming ideas into functional digital experiences.
            </p>

            <a href="#projects"
            class="mt-6 inline-block px-6 py-3 bg-blue-600 text-white rounded shadow hover:bg-blue-700">
                View My Work
            </a>
        </div>

        <div class="flex-1 mt-10 md:mt-0 flex justify-center">
            <img src="https://via.placeholder.com/350x350"
                alt="Profile"
                class="rounded-full shadow-lg border-4 border-blue-600">
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-6">About Me</h3>
            <p class="text-center text-gray-700 max-w-3xl mx-auto leading-relaxed">
                My name is <strong>John Edward Globio</strong>, a passionate full-stack developer
                with experience in PHP, Laravel, JavaScript, and modern web technologies.  
                I specialize in responsive UI/UX, database-driven applications, and clean, maintainable code.
            </p>
        </div>
    </section>

    <!-- PROJECTS -->
    <section id="projects" class="py-20 bg-gray-100">
        <div class="max-w-6xl mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-12">Projects</h3>

            <div class="grid md:grid-cols-3 gap-8">

                <!-- PROJECT CARD -->
                <div class="bg-white shadow rounded-lg overflow-hidden hover:shadow-xl transition">
                    <img src="https://via.placeholder.com/600x400" class="w-full">
                    <div class="p-5">
                        <h4 class="font-bold text-xl mb-2">ComPets Adoption System</h4>
                        <p class="text-gray-600">Pet adoption platform with user accounts, posts,
                            comments, likes, admin tools, and real-time updates.</p>
                    </div>
                </div>

                <div class="bg-white shadow rounded-lg overflow-hidden hover:shadow-xl transition">
                    <img src="https://via.placeholder.com/600x400" class="w-full">
                    <div class="p-5">
                        <h4 class="font-bold text-xl mb-2">Portfolio Website</h4>
                        <p class="text-gray-600">Personal responsive landing page highlighting my skills,
                            projects, and contact information.</p>
                    </div>
                </div>

                <div class="bg-white shadow rounded-lg overflow-hidden hover:shadow-xl transition">
                    <img src="https://via.placeholder.com/600x400" class="w-full">
                    <div class="p-5">
                        <h4 class="font-bold text-xl mb-2">Real-Time Chat App</h4>
                        <p class="text-gray-600">A simple yet powerful chat application built using PHP,
                            JS, and Firebase for real-time messaging.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold mb-6">Contact Me</h3>
            <p class="mb-8 text-gray-700">
                Interested in working together? Let's connect!
            </p>

            <a href="mailto:johnedwardglobio@example.com"
            class="px-6 py-3 bg-blue-600 text-white rounded shadow hover:bg-blue-700">
                Email Me
            </a>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="py-6 text-center bg-gray-900 text-white">
        © {{ date('Y') }} John Edward Globio. All rights reserved.
    </footer>

</body>
</html>
