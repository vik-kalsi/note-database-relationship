<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title> {{ $title }} </title>
</head>

<body class="my-4 grid justify-center bg-purple-950 text-white">
    


    <div class="mb-4">
        <ul class="border-2 flex py-2 justify-center">


            @if(!auth()->user())
                <li class="px-2"><a class="hover:font-bold" href="/">Homepage</a></li>
                <li class="px-2"><a class="hover:font-bold" href="/login">Login</a></li>
                <li class="px-2"><a class="hover:font-bold" href="/register">Register</a></li>
            @endif


            @if(auth()->user())
                <li class="px-2"><a class="hover:font-bold" href="/notes">View Notes</a></li>
                <li class="px-2"><a class="hover:font-bold" href="/addnotes">Add Notes</a></li>
                <li class="px-2"><a class="hover:font-bold" href="/editnotes">Edit Notes</a></li>
                <li class="px-2"><a class="hover:font-bold" href="/logout">Logout</a></li>
            @endif

            


        </ul>
    </div>
    

    <div class="border-2 p-4">
        {{ $slot }}
    </div>
    
</body>
</html>