<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>User Login</title>
</head>

<body>
    <x-userNavbar></x-userNavbar>
    <div class=" bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
            <h2 class="text-2xl text-center text-gray-800 mb-6">User Login</h2>
            <form action="/user-login" method="post" class="space-y-4">
                @csrf
                @if (session('error'))
                   <div class="text-red-500">{{session('error') }}</div>
                @endif
                <div>
                    <label for="" class="text-gray-600">User Email</label>
                    <input type="email" placeholder="Enter Email Name" name="email"
                        class="w-full px-4 py-2 border border-gray-300 rounded-2xl focus:outline-none">
                    @error('email')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="" class="text-gray-600">Password</label>
                    <input type="password" placeholder="Enter User Password" name="password"
                        class="w-full px-4 py-2 border border-gray-300 rounded-2xl focus:outline-none">
                    @error('password')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
               
                <button type="submit"
                    class="bg-blue-500 w-full px-4 py-2 text-white rounded-2xl hover:bg-blue-700 transition">
                    Login
                </button>
                <a href="/user-forgot-password" class="text-green-900">Forgot Password?</a>
            </form>
        </div>
    </div>
</body>

</html>