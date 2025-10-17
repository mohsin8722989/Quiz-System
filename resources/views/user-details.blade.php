<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-userNavbar></x-userNavbar>
    <div class="bg-gray-100 flex flex-col items-center min-h-screen">
       <h1 class="text-4xl font-bold text-green-900 p-5">Attempted Quiz</h1>
       
       <div class="w-200">
            
            <ul class="border border-gray-300">
                <li class="p-2 font-bold">
                    <ul class="flex justify-between">
                        <li class="w-50">S.No</li>
                        <li class="w-100">Name</li>
                        <li class="w-50">Status</li>
                    </ul>
                </li>
                @foreach ($quizRecord as $key=>$record)
                    <li class="even:bg-gray-200 p-2">
                        <ul class="flex justify-between">
                            <li class="w-50">{{ $key+1 }}</li>
                            <li class="w-100">{{ $record->name }}</li>
                            <li class="w-50">
                                @if ($record->status==2)
                                <span class="text-green-500">Completed</span>
                                @else
                                <span class="text-orange-500">Not Completed</span>
                                @endif
                            </li>
                           
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <x-footerUser></x-footerUser>
</body>
</html>