<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCQ Page</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-userNavbar></x-userNavbar>
    <div class=" bg-gray-100 flex flex-col items-center min-h-screen  pt-7">

        <h1 class="text-2xl text-center text-green-900 font-bold mb-6"> 
             {{$quizName}}
        </h1>
       <h2 class="text-2xl text-center text-green-900 font-bold mb-6"> 
            Total Questions {{session('currentQuiz')['totalMcq']}}
        </h2>
        <h3 class="text-xl text-center text-green-900 font-bold mb-6"> 
           {{session('currentQuiz')['currentMcq']}}  of {{session('currentQuiz')['totalMcq']}}
        </h3>
        <div class="mt-2 p-4 bg-white shadow-2xl rounded-xl w-140">
            <h3 class="text-green-900 font-bold text-xl mb-1">{{ $mcqData->question }}</h3>
            <form action="/submit-next/{{ $mcqData->id }}" class="space-y-4" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$mcqData->id }}">
              <label for="option_1" class="flex border rounded-2xl shadow-2xl p-3 mt-2 curser-pointer hover:bg-blue-50">
                <input id="option_1" type="radio" value="a" name="option" class="form-radio text-blue-500">
                <span class="text-green-900 pl-2">{{ $mcqData->a }}</span>
              </label>
              <label for="option_2" class="flex border rounded-2xl shadow-2xl p-3 mt-2 curser-pointer hover:bg-blue-50">
                <input id="option_2" type="radio" value="b"  name="option"  class="form-radio text-blue-500">
                <span class="text-green-900 pl-2">{{ $mcqData->b }}</span>
              </label>
              <label for="option_3" class="flex border rounded-2xl shadow-2xl p-3 mt-2 curser-pointer hover:bg-blue-50">
                <input id="option_3" type="radio" value="c"  name="option"  class="form-radio text-blue-500">
                <span class="text-green-900 pl-2">{{ $mcqData->c }}</span>
              </label>
              <label for="option_4" class="flex border rounded-2xl shadow-2xl p-3 mt-2 curser-pointer hover:bg-blue-50">
                <input id="option_4" type="radio" value="d"  name="option"  class="form-radio text-blue-500">
                <span class="text-green-900 pl-2">{{ $mcqData->d }}</span>
              </label>
              <button type="submit"
                    class="bg-blue-500 w-full px-4 py-2 text-white rounded-2xl hover:bg-blue-700 transition">
                    Submit Answer and Next
                </button>
            </form>
        </div>
       
    </div>
 <x-footer-user></x-footer-user>

</body>

</html>