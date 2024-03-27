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
                    <img src="{{asset('Images/menu.svg')}}"  alt="" class="ml-5 h-[30px]  w-[30px]">
                </button>
                <h1 class="text-4xl ml-5">Equipments</h1>
            </div>

            <div class="flex w-full justify-between p-6">
                <!--Sensors-->
                <div class="w-[49%] h-[40em] bg-white rounded-md p-4">
                    <h1 class="text-2xl font-bold">Sensors</h1>
                    <div class="p-4">
                        <!--Light Intensity-->
                        <div class="flex flex-col my-4">
                            <!--Title-->
                            <h1 class="font- text-lg">Light Intensity</h1>
                            <div class="flex my-4">
                                <span class="bg-green-400 rounded-md h-[2.3em] w-[6em] flex justify-center items-center mx-4">
                                    <h1 class="font-semibold text-white text-sm">Text-1</h1>
                                </span>
                                <span class="bg-green-400 rounded-md h-[2.3em] w-[6em] flex justify-center items-center mx-4">
                                    <h1 class="font-semibold text-white text-sm">Text-2</h1>
                                </span>
                                <span class="bg-green-400 rounded-md h-[2.3em] w-[6em] flex justify-center items-center mx-4">
                                    <h1 class="font-semibold text-white text-sm">Text-3</h1>
                                </span>
                                <span class="bg-green-400 rounded-md h-[2.3em] w-[6em] flex justify-center items-center mx-4">
                                    <h1 class="font-semibold text-white text-sm">Text-4</h1>
                                </span>
                                <span class="bg-green-400 rounded-md h-[2.3em] w-[6em] flex justify-center items-center mx-4">
                                    <h1 class="font-semibold text-white text-sm">Text-5</h1>
                                </span>
                            </div>
                        </div>
                        <!--Humidity Section-->
                        <div class="flex flex-col my-4">
                            <!--Title-->
                            <h1 class="text-lg">Humidity</h1>
                            <div class="flex my-4">
                                <span class="bg-green-400 rounded-md h-[2.3em] w-[6em] flex justify-center items-center mx-4">
                                    <h1 class="font-semibold text-white text-sm">Text-1</h1>
                                </span>
                                <span class="bg-green-400 rounded-md h-[2.3em] w-[6em] flex justify-center items-center mx-4">
                                    <h1 class="font-semibold text-white text-sm">Text-2</h1>
                                </span>
                                <span class="bg-green-400 rounded-md h-[2.3em] w-[6em] flex justify-center items-center mx-4">
                                    <h1 class="font-semibold text-white text-sm">Text-3</h1>
                                </span>
                                <span class="bg-green-400 rounded-md h-[2.3em] w-[6em] flex justify-center items-center mx-4">
                                    <h1 class="font-semibold text-white text-sm">Text-4</h1>
                                </span>
                                <span class="bg-green-400 rounded-md h-[2.3em] w-[6em] flex justify-center items-center mx-4">
                                    <h1 class="font-semibold text-white text-sm">Text-5</h1>
                                </span>
                            </div>
                        </div>
                        <!--Water Temperature Section-->
                        <div class="flex flex-col my-4">
                            <!--Title-->
                            <h1 class="text-lg">Water Temperature</h1>
                            <div class="flex my-4">
                                <span class="bg-green-400 rounded-md h-[2.3em] w-[6em] flex justify-center items-center mx-4">
                                    <h1 class="font-semibold text-white text-sm">Text-1</h1>
                                </span>
                                <span class="bg-green-400 rounded-md h-[2.3em] w-[6em] flex justify-center items-center mx-4">
                                    <h1 class="font-semibold text-white text-sm">Text-2</h1>
                                </span>
                                <span class="bg-green-400 rounded-md h-[2.3em] w-[6em] flex justify-center items-center mx-4">
                                    <h1 class="font-semibold text-white text-sm">Text-3</h1>
                                </span>
                                <span class="bg-green-400 rounded-md h-[2.3em] w-[6em] flex justify-center items-center mx-4">
                                    <h1 class="font-semibold text-white text-sm">Text-4</h1>
                                </span>
                                <span class="bg-green-400 rounded-md h-[2.3em] w-[6em] flex justify-center items-center mx-4">
                                    <h1 class="font-semibold text-white text-sm">Text-5</h1>
                                </span>
                            </div>
                        </div>
                        <!--C02 Level Sensor-->
                        <div class="flex flex-col my-4">
                            <!--Title-->
                            <h1 class="text-lg">C02 Level</h1>
                            <div class="flex my-4">
                                <span class="bg-green-400 rounded-md h-[2.3em] w-[6em] flex justify-center items-center mx-4">
                                    <h1 class="font-semibold text-white text-sm">Text-1</h1>
                                </span>
                                <span class="bg-green-400 rounded-md h-[2.3em] w-[6em] flex justify-center items-center mx-4">
                                    <h1 class="font-semibold text-white text-sm">Text-2</h1>
                                </span>
                                <span class="bg-green-400 rounded-md h-[2.3em] w-[6em] flex justify-center items-center mx-4">
                                    <h1 class="font-semibold text-white text-sm">Text-3</h1>
                                </span>
                                <span class="bg-green-400 rounded-md h-[2.3em] w-[6em] flex justify-center items-center mx-4">
                                    <h1 class="font-semibold text-white text-sm">Text-4</h1>
                                </span>
                                <span class="bg-green-400 rounded-md h-[2.3em] w-[6em] flex justify-center items-center mx-4">
                                    <h1 class="font-semibold text-white text-sm">Text-5</h1>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Devices-->
                <div class="w-[49%] h-[40em] bg-white rounded-md p-4">
                    <h1 class="text-2xl font-bold">Devices</h1>
                    <div class="flex justify-center flex-col">
                        <h1>Title</h1>
                        <div class="flex my-4">
                            <span class="mx-4">
                                <h1>Device 1</h1>
                            </span>
                            <span>
                                <h1>Device 2</h1>
                            </span>
                            <span>
                                <h1>Device 3</h1>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script type="text/javascript">
    var sidebarMenu = document.getElementById("sidebarNav");
    const sidebarBehavior = () => {
        if(sidebarMenu.style.display == "none") {
            sidebarMenu.style.display = "block"
        }else {
            sidebarMenu.style.display = "none"
        }
    }
</script>
