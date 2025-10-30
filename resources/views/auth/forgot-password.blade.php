<form method="POST" action="{{ route('password.email') }}" class="max-w-md mx-auto mt-10">
    @csrf
    <h2 class="text-2xl font-bold mb-4">Forgot Password</h2>

    <input type="email" name="email" placeholder="Enter your email" required class="block w-full p-2 mb-3 border rounded">

    <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">
        Send Password Reset Link
    </button>

    <p class="mt-4">
        Remember your password? <a href="{{ route('login') }}" class="text-blue-500">Login</a>
    </p>
</form>
