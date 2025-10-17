<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Result Page</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-userNavbar></x-userNavbar>
    <div class="bg-gray-100 flex flex-col items-center min-h-screen">
       <h1 class="text-4xl font-bold text-green-900 p-5">Quiz Result</h1>
       <div class="w-200">
            <h1 class="text-2xl text-green-900 my-4 text-center">
                {{ $correctAnswers }} out of {{ count($resultData) }} Correct
            </h1>
            <ul class="border border-gray-300">
                <li class="p-2 font-bold">
                    <ul class="flex justify-between">
                        <li class="w-30">S.No</li>
                        <li class="w-70">Name</li>
                        <li class="w-70">result</li>
                        
                    </ul>
                </li>
                @foreach ($resultData as $key=>$item)
                    <li class="even:bg-gray-200 p-2">
                        <ul class="flex justify-between">
                            <li class="w-30">{{ $key+1 }}</li>
                            <li class="w-70">{{ $item->question }}</li>
                            @if ($item->is_correct)
                            <li class="w-70 text-green-500">Correct</li>
                            @else
                            <li class="w-70 text-red-500">Incorrect</li>
                            @endif
                            
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <x-footerUser></x-footerUser>
</body>
</html>