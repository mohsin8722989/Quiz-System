<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Admin Login</title>
</head>

<body class=" bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
        <h2 class="text-2xl text-center text-gray-800 mb-6">Admin Login</h2>
        <form action="" method="post" class="space-y-4">
            @csrf
            @error('user')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
            <div>
                <label for="" class="text-gray-600">Admin Name</label>
                <input type="text" placeholder="Enter Admin Name" name="name"
                    class="w-full px-4 py-2 border border-gray-300 rounded-2xl focus:outline-none">
                @error('name')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="" class="text-gray-600">Admin Password</label>
                <input type="password" placeholder="Enter Admin Password" name="password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-2xl focus:outline-none">
                @error('password')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit"
                class="bg-blue-500 w-full px-4 py-2 text-white rounded-2xl hover:bg-blue-700 transition">
                Login
            </button>

        </form>
    </div>
</body>

</html>