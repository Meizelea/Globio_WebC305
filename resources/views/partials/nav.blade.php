<header class="bg-gray-800 shadow-sm fixed top-0 left-0 w-full z-50">
    <nav class="max-w-6xl mx-auto px-6 py-6 flex justify-between items-center">
        
        <!-- Logo -->
        <h1 class="text-2xl font-bold tracking-tight text-gray-200">Portfolio</h1>

        <!-- Desktop Menu -->
        <ul class="hidden md:flex space-x-8 font-medium text-gray-200">
            <li><a href="/" class="{{ request()->is('/') ? 'text-blue-600' : 'hover:text-blue-600' }}">Home</a></li>
            <li><a href="/about" class="{{ request()->is('about') ? 'text-blue-600' : 'hover:text-blue-600' }}">About</a></li>
            <li><a href="/projects" class="{{ request()->is('projects') ? 'text-blue-600' : 'hover:text-blue-600' }}">Projects</a></li>
            <li><a href="/contact" class="{{ request()->is('contact') ? 'text-blue-600' : 'hover:text-blue-600' }}">Contact</a></li>
        </ul>

        <!-- Mobile Button -->
        <button id="menuBtn" class="md:hidden text-gray-800 text-3xl">
            ☰
        </button>
    </nav>

    <!-- Mobile Dropdown Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-white shadow-lg border-t border-gray-200">
        <ul class="flex flex-col space-y-4 py-4 px-6 text-gray-800 font-medium">
            <li><a href="/" class="{{ request()->is('/') ? 'text-blue-600' : 'hover:text-blue-600' }}">Home</a></li>
            <li><a href="/about" class="{{ request()->is('about') ? 'text-blue-600' : 'hover:text-blue-600' }}">About</a></li>
            <li><a href="/projects" class="{{ request()->is('projects') ? 'text-blue-600' : 'hover:text-blue-600' }}">Projects</a></li>
            <li><a href="/contact" class="{{ request()->is('contact') ? 'text-blue-600' : 'hover:text-blue-600' }}">Contact</a></li>
        </ul>
    </div>
</header>

<!-- Prevent content from hiding behind fixed header -->
<div class="h-20"></div>

<script>
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
