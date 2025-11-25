<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Contact Me</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white">

    @include('partials.nav')

    <div class="max-w-xl mx-auto py-20 px-6">

        <h1 class="text-4xl font-bold mb-6 text-indigo-400">Contact Me</h1>

        {{-- SCENARIO 1: USER IS NOT LOGGED IN --}}
        @guest
            <div class="space-y-6">
                <div>
                    <label class="block mb-1 text-gray-300">
                        You must be logged in to send a message.
                    </label>
                </div>

                <a href="{{ route('register') }}" class="block w-full text-center bg-indigo-600 hover:bg-indigo-500 py-2 rounded-lg font-semibold transition">
                    Register
                </a>
                
                <div class="text-center text-sm text-gray-400">
                    Already have an account? 
                    <a href="{{ route('login') }}" class="text-indigo-400 hover:underline">Login here</a>
                </div>
            </div>
        @endguest


        {{-- SCENARIO 2: USER IS LOGGED IN --}}
        @auth
            <form action="#" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label class="block mb-1 text-gray-300">Your Name</label>
                    <input type="text" name="name" value="{{ Auth::user()->name }}" class="w-full bg-gray-800 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 border border-gray-700 text-white" required>
                </div>

                <div>
                    <label class="block mb-1 text-gray-300">Email</label>
                    <input type="email" name="email" value="{{ Auth::user()->email }}" class="w-full bg-gray-800 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 border border-gray-700 text-white" required>
                </div>

                <div>
                    <label class="block mb-1 text-gray-300">Message</label>
                    <textarea name="message" rows="5" class="w-full bg-gray-800 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 border border-gray-700 text-white" required></textarea>
                </div>

                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-500 py-2 rounded-lg font-semibold transition">
                    Send Message
                </button>
            </form>
        @endauth

    </div>

</body>
</html>