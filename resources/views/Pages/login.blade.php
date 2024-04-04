<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @vite('resources\css\app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body class="bg-body-bg bg-center bg-cover flex justify-end font-Poppins">

    <div class="h-screen w-[30em] bg-white">

        <div class="flex flex-col items-center py-10">
            <img src="{{asset('Images/clsuLogo.jpg')}}" class="h-[7em] w-[7em]" alt="Logo">
            <span class="text-center my-6 ">
                <h1 class="text-2xl font-medium">ALFC | Portal</h1>
            </span>
            @if(Session::has('errors'))
            <span class="w-[19em] h-[3em] rounded-md text-red-500 bg-red-300 flex items-center mb-2">
                <h1 class="text-sm ml-2">
                    
                    {{Session('errors')->first()}}
                </h1>
            </span>
            @endif
            <form action="/authenticate" method="POST" class="flex flex-col items-center">
                @csrf
                <div class="relative">
                    <input type="email" name="email" placeholder="Email" class="peer placeholder-transparent outline-blue-300 border-2 rounded-lg text-lg h-12 w-[17em] px-4 mt-2" required>
                    <label for="email" class="absolute text-base text-center  pointer-events-none -top-1 text-gray-400 left-4 w-16 bg-white
                    peer-placeholder-shown:text-lg
                    transition-all
                    peer-placeholder-shown:top-5
                    peer-focus:text-gray-400
                    ">Email</label>
                </div>
                <div class="relative mt-4">
                    <input type="password" name="password" placeholder="Password" class="peer placeholder-transparent outline-blue-300 border-2 rounded-lg text-lg h-12 w-[17em] px-4 mt-2" required>
                    <label for="password" class="absolute text-base text-center  pointer-events-none top-1 text-gray-400 left-4 w-24 bg-white
                    peer-placeholder-shown:text-lg
                    transition-all
                    peer-placeholder-shown:top-5
                    peer-focus:text-gray-400
                    ">Password</label>  
                </div>
                <span class="flex justify-end w-full mt-1">
                    <a href="" class="text-gray-600">Forgot password?</a>
                </span>
                <input type="submit" name="submit" class="hover:bg-gray-700 transition-all  bg-green-400 text-white font-bold mt-4 rounded-lg text-lg h-11 w-[17em] px-4">
            </form>
        </div>
    </div>
</body>
</html>