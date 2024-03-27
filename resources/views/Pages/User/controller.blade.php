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
                <h1 class="text-4xl ml-5">Controller</h1>
            </div>
            <div class="w-full flex justify-center mt-16">
                <!-- Contents -->
                <div class="flex w-[60%] h-[40em] justify-between">
                    <div onclick = "automatic()" class="w-[45%] h-[40em] bg-white flex justify-center rounded-xl transform transition duration-300 hover:scale-110">
                        <span class="mt-4">
                            <h1 class="text-2xl font-semibold">Automatic</h1>
                        </span>
                    </div>
                    <div onclick="scheduled()" class="w-[45%] h-[40em] bg-white flex justify-center rounded-xl transform transition duration-300 hover:scale-110">
                        <span class="mt-4">
                            <h1 class="text-2xl font-semibold">Scheduled</h1>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">
    var sidebarMenu = document.getElementById("sidebarNav");

    var automaticSetter = 0;
    var scheduledSetter = 0;
    const sidebarBehavior = () => {
        if (sidebarMenu.style.display == "none") {
            sidebarMenu.style.display = "block"
        } else {
            sidebarMenu.style.display = "none"
        }
    }

    const scheduled = () => {
        automaticSetter = 0;
        scheduledSetter = 1;
        console.log("automatic = " + automaticSetter)
        console.log("Scheduled = " + scheduledSetter)
    }

    const automatic = () => {
        automaticSetter = 1;
        scheduledSetter = 0;
        console.log("automatic = " + automaticSetter)
        console.log("Scheduled = " + scheduledSetter)
    }
</script>