<div class="w-full max-w-md mx-auto bg-gray-800 p-8 rounded-xl shadow-2xl border border-gray-700">
    <div class="mb-6 text-center">
        <h2 class="text-2xl font-bold text-white">Admin Login</h2>
        <p class="text-gray-400 text-sm mt-1">Please sign in to continue</p>
    </div>

    <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-6">
        @csrf

        {{-- Error Handling with Icon --}}
        @if ($errors->any() || session('error'))
            <div class="bg-red-500/10 border border-red-500/50 rounded-lg p-4 flex items-start space-x-3">
                <svg class="w-5 h-5 text-red-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                <div class="text-sm text-red-400">
                    @if($errors->any())
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    @if(session('error'))
                        <p>{{ session('error') }}</p>
                    @endif
                </div>
            </div>
        @endif

        {{-- Email Field --}}
        <div>
            <label class="block text-sm font-medium text-gray-300 mb-2">Email Address</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                </div>
                <input type="email" name="email" 
                    class="w-full pl-10 pr-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition duration-200" 
                    placeholder="admin@example.com" 
                    required>
            </div>
        </div>

        {{-- Password Field --}}
        <div>
            <label class="block text-sm font-medium text-gray-300 mb-2">Password</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <input type="password" name="password" 
                    class="w-full pl-10 pr-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition duration-200" 
                    placeholder="••••••••" 
                    required>
            </div>
        </div>

        {{-- Submit Button --}}
        <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-bold text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-indigo-500 transition-all transform hover:-translate-y-0.5">
            Sign In
        </button>
    </form>
</div>