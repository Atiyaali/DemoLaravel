<form method="POST" action="{{ route('password.update') }}" class="max-w-md mx-auto mt-10">
    @csrf
    <input type="hidden" name="token" value="{{ $request->route('token') }}">

    <h2 class="text-2xl font-bold mb-4">Reset Password</h2>

    <input type="email" name="email" placeholder="Email" value="{{ old('email', $request->email) }}" required class="block w-full p-2 mb-3 border rounded">
    <input type="password" name="password" placeholder="New Password" required class="block w-full p-2 mb-3 border rounded">
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required class="block w-full p-2 mb-3 border rounded">

    <button type="submit" class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded">Reset Password</button>

    <p class="mt-4">
        Remember your password? <a href="{{ route('login') }}" class="text-blue-500">Login</a>
    </p>
</form>
