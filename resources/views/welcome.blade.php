<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Home Page</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-userNavbar></x-userNavbar>
    <div class="bg-gray-100 flex flex-col items-center min-h-screen">
       <h1 class="text-4xl font-bold text-green-900 p-5">Check Your Skills</h1>
       <div class="w-full max-w-md">
        <div class="relative">
           <form action="/search-quiz" method="get">
             <input class="w-full text-gray-700 border border-gray-300
            rounded-2xl shadow px-4 py-3" type="text" name="search" id="" placeholder="Search Quiz....">
            <button class="absolute right-2 top-3">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg> 
             </button>
           </form>
        </div>
       </div>
       <div class="w-200">
            <h1 class="text-2xl text-green-900 my-4 text-center">Category List</h1>
            <ul class="border border-gray-300">
                <li class="p-2 font-bold">
                    <ul class="flex justify-between">
                        <li class="w-30">S.No</li>
                        <li class="w-70">Name</li>
                        <li class="w-70">Total Quiz</li>
                        <li class="w-30">Action</li>
                    </ul>
                </li>
                @foreach ($categories as $key=>$category)
                    <li class="even:bg-gray-200 p-2">
                        <ul class="flex justify-between">
                            <li class="w-30">{{ $key+1 }}</li>
                            <li class="w-70">{{ $category->name }}</li>
                            <li class="w-70">{{ $category->quizzes_count }}</li>
                            <li class="w-30 flex">
                                <a href="user-quiz-list/{{ $category->id }}/{{ $category->name }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                        width="20px" fill="#1f1f1f">
                                        <path
                                            d="M480-312q70 0 119-49t49-119q0-70-49-119t-119-49q-70 0-119 49t-49 119q0 70 49 119t119 49Zm0-72q-40 0-68-28t-28-68q0-40 28-68t68-28q40 0 68 28t28 68q0 40-28 68t-68 28Zm0 192q-142.6 0-259.8-78.5Q103-349 48-480q55-131 172.2-209.5Q337.4-768 480-768q142.6 0 259.8 78.5Q857-611 912-480q-55 131-172.2 209.5Q622.6-192 480-192Zm0-288Zm0 216q112 0 207-58t146-158q-51-100-146-158t-207-58q-112 0-207 58T127-480q51 100 146 158t207 58Z" />
                                    </svg> </a>
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