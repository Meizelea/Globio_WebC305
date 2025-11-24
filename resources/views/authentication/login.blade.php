<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white flex h-screen">

    <!-- Left section -->
    <div class="w-1/2 bg-[#0f172a] flex flex-col justify-center px-20">

        <h2 class="text-3xl font-bold mb-2">Sign in to your account</h2>

        <!-- Error messages -->
        @if($errors->any())
            <div class="bg-red-500/20 text-red-400 p-3 rounded mb-4">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Email -->
            <div>
                <label class="block mb-1 text-gray-300">Email address</label>
                <input type="email" name="email"
                    class="w-full bg-gray-800 text-white rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- Password with toggle -->
            <div>
                <label class="block mb-1 text-gray-300">Password</label>

                <div class="relative">
                    <input id="loginPassword" type="password" name="password"
                        class="w-full bg-gray-800 text-white rounded-lg px-4 py-2 pr-12 focus:outline-none focus:ring-2 focus:ring-indigo-500">

                    <span id="toggleLoginPassword"
                        class="absolute inset-y-0 right-3 flex items-center cursor-pointer select-none text-gray-400">
                        👁️
                    </span>
                </div>
            </div>

            <div class="flex justify-between items-center">
                <label class="flex items-center space-x-2 text-gray-300">
                    <input type="checkbox" class="form-checkbox">
                    <span>Remember me</span>
                </label>

                <a href="#" class="text-indigo-400 hover:underline">Forgot password?</a>
            </div>

            <button class="w-full bg-indigo-600 hover:bg-indigo-500 py-2 rounded-lg font-semibold">
                Sign in
            </button>

        </form>

    </div>

    <!-- Right image -->
    <div class="w-1/2">
        <img src="https://images.alphacoders.com/123/1230061.jpg" class="w-full h-full object-cover">
    </div>

    <!-- Password Toggle Script -->
    <script>
        const loginPassword = document.getElementById("loginPassword");
        const toggleLoginPassword = document.getElementById("toggleLoginPassword");

        toggleLoginPassword.addEventListener("click", () => {
            const type = loginPassword.type === "password" ? "text" : "password";
            loginPassword.type = type;
            toggleLoginPassword.textContent = type === "password" ? "👁️" : "🙈";
        });
    </script>

</body>
</html>
