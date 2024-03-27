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
            <div class="w-[24em] h-screen relative bg-white flex justify-center left-0">
                <div class="h-[22em] flex flex-col justify-between fixed mt-24">
                    <div class="flex justify-center">
                        <img src="{{asset('Images/clsuLogo.jpg')}}" alt="" class="h-[7em] w-[7em]">
                    </div>
                    <div class=" mt-5 flex justify-center items-center flex-col">
                        <h1 class="text-xl">Fogponics Controller</h1>
                        <h1 class="text-xl">(Web Based)</h1>
                    </div>
                    <div>
                        <div class="flex justify-center my-10">
                            <h1 class="font-bold text-lg">{{ Auth::user()->email}}</h1>
                        </div>
                        <nav class="relative">
                            <ul class="text-xl h-[10em] flex flex-col ">
                                <li>
                                    <a href="{{route('dashboard')}}" class="my-4 flex">
                                        <img src="{{asset("Images/dashboard.png")}}" alt="" class="h-[40px] w-[40px] mr-7">
                                        <h1 class="text-xl">Dashboard</h1>
                                    </a>
                                </li>
                                <li class="my-4">
                                    <a href="{{route('equipments')}}" class="flex items-center">
                                        <img src="{{asset("Images/equipment.png")}}" alt="" class="h-[40px] w-[40px] mr-7">
                                        <h1>Equipments</h1>
                                    </a>
                                </li>
                                <li class="my-4">
                                    <a href="{{route("controller")}}" class="flex items-center" id="controller-parent">
                                        <img src="{{asset("Images/controller.png")}}" alt="" class="h-[40px] w-[40px] mr-7">
                                        <h1>Controller</h1>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route("changePass")}}" class="my-4 flex items-center">
                                        <img src="{{asset("Images/password.png")}}" alt="" class="h-[45px] w-[45px] mr-6">
                                        <h1>Change Password</h1>
                                    </a>
                                </li>
                                <form action="logout" method="POST">
                                    @csrf
                                    <button>
                                        <li class="my-4 flex items-center">
                                            <img src="{{asset("Images/logout.png")}}" alt="" class="h-[30px] w-[30px] mr-10">
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