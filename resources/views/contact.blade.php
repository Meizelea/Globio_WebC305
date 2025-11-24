<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white">

    @include('partials.nav')

    <div class="max-w-xl mx-auto py-20 px-6">

        <h1 class="text-4xl font-bold mb-6 text-indigo-400">Contact Me</h1>

        <form action="#" method="POST" class="space-y-6">
            @csrf

            <div>
                <label class="block mb-1 text-gray-300">Your Name</label>
                <input type="text" class="w-full bg-gray-800 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block mb-1 text-gray-300">Email</label>
                <input type="email" class="w-full bg-gray-800 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block mb-1 text-gray-300">Message</label>
                <textarea rows="5" class="w-full bg-gray-800 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500"></textarea>
            </div>

            <button class="w-full bg-indigo-600 hover:bg-indigo-500 py-2 rounded-lg font-semibold">
                Send Message
            </button>
        </form>

    </div>

</body>
</html>
