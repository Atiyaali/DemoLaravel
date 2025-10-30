<form method="POST" action="{{ route('register') }}" class="max-w-md mx-auto mt-10">
    @csrf
    <h2 class="text-2xl font-bold mb-4">Register</h2>

    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required class="block w-full p-2 mb-3 border rounded">
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required class="block w-full p-2 mb-3 border rounded">
    <input type="password" name="password" placeholder="Password" required class="block w-full p-2 mb-3 border rounded">
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required class="block w-full p-2 mb-3 border rounded">

    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">Register</button>

    <p class="mt-4">
        Already have an account? <a href="{{ route('login') }}" class="text-blue-500">Login</a>
    </p>
</form>
