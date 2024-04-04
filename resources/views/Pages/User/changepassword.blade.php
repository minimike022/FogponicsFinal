<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-gray-200 font-Poppins">
    <div class="flex">
        <!-- Navigation Sidebar-->
        <div id="sidebarNav">
            <div class="w-[20em] h-screen relative bg-white flex justify-center left-0">
                <div class="h-[22em] flex flex-col justify-between fixed mt-14">
                    <div class="flex justify-center">
                        <img src="{{asset('Images/clsuLogo.jpg')}}" alt="" class="h-[5em] w-[5em]">
                    </div>
                    <div class="text-lg font-semibold mt-5 flex justify-center items-center flex-col">
                        <h1>Fogponics Controller</h1>
                        <h1>(Web Based)</h1>
                    </div>
                    <div class="text-md">
                        <div class="flex justify-center my-5">
                            <h1 class="font-bold text-md">{{ Auth::user()->email}}</h1>
                        </div>
                        <nav class="relative">
                            <ul class=" h-[10em] flex flex-col items-center">
                                <li class="my-3">
                                    <a href="{{route('dashboard')}}">
                                        <h1>Dashboard</h1>
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="{{route('equipments')}}">
                                        <h1>Equipments</h1>
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="{{route("controller")}}" id="controller-parent">
                                        <h1>Controller</h1>
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="{{route("changePass")}}">
                                        <h1>Change Password</h1>
                                    </a>
                                </li>
                                <form action="logout" method="POST">
                                    @csrf
                                    <button>
                                        <li class="my-3 flex items-center">
                                            <h1 class>Logout</h1>
                                        </li>
                                    </button>
                                </form>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Sidebar-->
        <!--Content Section-->
        <div class="w-full">
            <div class="w-full h-24 bg-white flex items-center">
                <button onclick="sidebarBehavior()">
                    <img src="{{asset('Images/menu.svg')}}" alt="" class="ml-5 h-[30px] w-[30px]">
                </button>
                <h1 class="text-4xl ml-5">Change Password</h1>
            </div>
            @if(session('data'))
            {{dd(Session::all())}}
            @endif

            @if(session('pss'))
            {{session('pss')}}
            @endif
            <div class="mt-20 ml-20">
                <form action="/updatePassword" method="POST">
                    @csrf
                    <div class="flex flex-col">
                        <span class="flex flex-col my-2">
                            <label for="oldPassword" class="text-gray-500 text-xl"> Old Password</label>
                            <input type="password" name="oldPassword" class="w-[28em] h-[2.5em] text-xl pl-4 rounded-md border-gray-400 outline-gray-600 border-2" required>
                        </span>
                        <span class="flex flex-col my-2">
                            <label for="newPassword" class="text-gray-500 text-xl"> New Password</label>
                            <input type="password" name="newPassword" class="w-[28em] h-[2.5em] text-xl pl-4 rounded-md border-gray-400 outline-gray-600 border-2" required>
                        </span>
                        <span class="flex flex-col my-2">
                            <label for="confirmPassword" class="text-gray-500 text-xl"> Confirm Password</label>
                            <input type="password" name="confirmPassword" class="w-[28em] h-[2.5em] text-xl pl-4 rounded-md border-gray-400 outline-gray-600 border-2" required> 
                        </span>
                        <input type="submit" name="submit" class=" bg-green-400 text-white rounded-lg mt-4 w-[28em] h-[2.5em] text-xl">
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">
    var sidebarMenu = document.getElementById("sidebarNav");
    const sidebarBehavior = () => {
        if (sidebarMenu.style.display == "none") {
            sidebarMenu.style.display = "block"
        } else {
            sidebarMenu.style.display = "none"
        }
    }
</script>