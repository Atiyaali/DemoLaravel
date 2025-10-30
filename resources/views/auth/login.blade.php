<form method="POST" action="{{ route('login') }}" class="max-w-md mx-auto mt-10">
    @csrf
    <h2 class="text-2xl font-bold mb-4">Login</h2>

    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required class="block w-full p-2 mb-3 border rounded">
    <input type="password" name="password" placeholder="Password" required class="block w-full p-2 mb-3 border rounded">

    <label class="block mb-3">
        <input type="checkbox" name="remember"> Remember Me
    </label>

    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Login</button>

    <p class="mt-4">
        <a href="{{ route('password.request') }}" class="text-blue-500">Forgot your password?</a>
    </p>

    <p class="mt-2">
        Don't have an account? <a href="{{ route('register') }}" class="text-blue-500">Register</a>
    </p>
</form>
