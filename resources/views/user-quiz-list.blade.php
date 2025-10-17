<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Quiz List</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-userNavbar></x-userNavbar>
   
    <div class=" bg-gray-100 flex flex-col items-center min-h-screen  pt-7">
       
            <h2 class="text-2xl text-center text-green-900 font-bold mb-6">Category Name: {{ $category }}
                
            </h2>

        <div class="w-200">
            <ul class="border border-gray-300">
                <li class="p-2 font-bold">
                    <ul class="flex justify-between">
                        <li class="w-30">Quiz Id</li>
                        <li class="w-70">Name</li>
                        <li class="w-70">Total Mcqs</li>
                        <li class="w-30">Action</li>
                       
                    </ul>
                </li>
                @foreach ($quizData as $item)
                    <li class="even:bg-gray-200 p-2">
                        <ul class="flex justify-between">
                            <li class="w-30">{{ $item->id }}</li>
                            <li class="w-70">{{ $item->name }}</li>
                            <li class="w-70">{{ $item->mcq_count }}</li>
                            <li class="w-30">
                                 <a href="/start-quiz/{{$item->id}}/{{ $item->name }}" class="text-green-500 font-bold">
                                    Attempt Quiz
                                     </a>
                            </li>
                            
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

</body>

</html>