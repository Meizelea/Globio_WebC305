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

        <h2 class="text-3xl font-bold mb-6">Create your account</h2>

        @if($errors->any())
            <div class="bg-red-500/20 text-red-400 p-3 rounded mb-4">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Name -->
            <div>
                <label class="block mb-1 text-gray-300">Name</label>
                <input type="text" name="name"
                    class="w-full bg-gray-800 rounded-lg px-4 py-2 focus:ring-indigo-500 focus:ring-2">
            </div>

            <!-- Email -->
            <div>
                <label class="block mb-1 text-gray-300">Email</label>
                <input type="email" name="email"
                    class="w-full bg-gray-800 rounded-lg px-4 py-2 focus:ring-indigo-500 focus:ring-2">
            </div>

            <!-- Password -->
            <div>
                <label class="block mb-1 text-gray-300">Password</label>
                
                <div class="relative">
                    <input id="password" type="password" name="password"
                        class="w-full bg-gray-800 rounded-lg px-4 py-2 pr-12 focus:ring-indigo-500 focus:ring-2">
                    
                    <span id="togglePassword" 
                        class="absolute inset-y-0 right-3 flex items-center cursor-pointer select-none text-gray-400">
                        👁️
                    </span>
                </div>
            </div>

            <!-- Confirm Password -->
            <div>
                <label class="block mb-1 text-gray-300">Confirm Password</label>

                <div class="relative">
                    <input id="passwordConfirm" type="password" name="password_confirmation"
                        class="w-full bg-gray-800 rounded-lg px-4 py-2 pr-12 focus:ring-indigo-500 focus:ring-2">

                    <span id="togglePasswordConfirm" 
                        class="absolute inset-y-0 right-3 flex items-center cursor-pointer select-none text-gray-400">
                        👁️
                    </span>
                </div>
            </div>

            <button class="w-full bg-indigo-600 hover:bg-indigo-500 py-2 rounded-lg font-semibold">
                Create account
            </button>
        </form>
    </div>

    <!-- Right section image -->
    <div class="w-1/2">
        <img src="https://images.alphacoders.com/123/1230061.jpg" class="w-full h-full object-cover">
    </div>


    <!-- Password toggle JS -->
    <script>
        const password = document.getElementById("password");
        const togglePassword = document.getElementById("togglePassword");

        togglePassword.addEventListener("click", () => {
            const type = password.type === "password" ? "text" : "password";
            password.type = type;
            togglePassword.textContent = type === "password" ? "👁️" : "🙈";
        });

        const passwordConfirm = document.getElementById("passwordConfirm");
        const togglePasswordConfirm = document.getElementById("togglePasswordConfirm");

        togglePasswordConfirm.addEventListener("click", () => {
            const type = passwordConfirm.type === "password" ? "text" : "password";
            passwordConfirm.type = type;
            togglePasswordConfirm.textContent = type === "password" ? "👁️" : "🙈";
        });
    </script>

</body>
</html>
