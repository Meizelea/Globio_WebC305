<form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-6">
    @csrf
    
    @if ($errors->any())
        <div class="bg-red-500/20 text-red-400 p-3 rounded border border-red-500/50 text-sm">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    @if(session('error'))
        <div class="bg-red-500/20 text-red-400 p-3 rounded border border-red-500/50 text-sm">
            {{ session('error') }}
        </div>
    @endif

    <div>
        <label class="block text-sm font-medium text-gray-300">Email</label>
        <input type="email" name="email" class="w-full mt-1 p-3 bg-gray-700 border border-gray-600 rounded-lg text-white" required>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-300">Password</label>
        <input type="password" name="password" class="w-full mt-1 p-3 bg-gray-700 border border-gray-600 rounded-lg text-white" required>
    </div>

    <button type="submit" class="w-full py-3 bg-indigo-600 hover:bg-indigo-700 rounded-lg font-bold transition duration-300">
        Login
    </button>
</form>