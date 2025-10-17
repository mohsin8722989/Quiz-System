<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Quiz</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-userNavbar></x-userNavbar>

    <div class=" bg-gray-100 flex flex-col items-center min-h-screen  pt-7">

        <h1 class="text-4xl text-center text-green-900 font-bold mb-6"> {{ $quizName }}

        </h1>
        <h2 class="text-lg text-center text-green-900 font-bold mb-6">
            This Quiz Contains {{ $quizCount }} Questions and no limt to attempt this Quiz</h2>
        <h1 class="text-4xl text-center text-green-900 font-bold mb-6">
            Good Luck
        </h1>
        @if (session('user'))
        <a type="submit" href="/mcq/{{ session('firstMCQ')->id.'/'.$quizName }}"
            class="bg-blue-500  px-4 py-2 my-5 text-white rounded-md hover:bg-blue-700 transition">
            Start Quiz
        </a>
        @else
        <a type="submit" href="/user-signup-quiz"
            class="bg-blue-500  px-4 py-2 my-5 text-white rounded-md hover:bg-blue-700 transition">
            SignUp for Start Quiz
        </a>
        <a type="submit" href="/user-login-quiz"
            class="bg-blue-500  px-4 py-2 my-5 text-white rounded-md hover:bg-blue-700 transition">
            Login for Start Quiz
        </a>
        @endif

    </div>

</body>

</html>