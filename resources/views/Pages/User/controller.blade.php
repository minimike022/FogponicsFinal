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
            <div class="w-[17em] h-full relative bg-white flex justify-center left-0">
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
            <div class="w-full h-20 bg-white flex items-center">
                <button onclick="sidebarBehavior()">
                    <img src="{{asset('Images/menu.svg')}}" alt="" class="ml-5 h-[30px] w-[30px]">
                </button>
                <h1 class="text-2xl ml-3">Controller</h1>
            </div>
            <div class="w-full flex justify-center mt-16">
                <!-- Contents -->
                <!--Automatic-->
                <div class="flex w-[60%] h-[40em] justify-between">
                    <div class="w-[45%] h-[40em] bg-white flex justify-center rounded-xl transform transition duration-300 hover:scale-110">
                        <div class="mt-4 w-full flex flex-col items-center">
                            <h1 class="text-2xl font-semibold">Automatic</h1>
                            <form action="{{route('automaticMode')}}" method="POST" class="flex justify-start w-full flex-col">
                                @csrf
                                <!--Light Intensity-->
                                <div class="flex flex-col w-full mt-5">
                                    <div class="flex items-center ml-5">
                                        <img src="{{asset('Images/FogponicsIcons/light.png')}}" alt="">
                                        <h1 class="font-semibold mx-4">Light Intensity</h1>
                                    </div>
                                   <!--Light Intensity Forms-->
                                    <div class="flex justify-evenly w-full mt-4">
                                        <!-- Minimum Value-->
                                        <span class="flex flex-col items-center">
                                            <input type="text" name="light-intensity-minValue" class="outline-blue-300 border-2 text-center rounded-lg h-[2.5em] w-[8em]">
                                            <label for="light-intensity-minValue">min value</label>
                                        </span>
                                        <!-- Maximum Value -->
                                        <span class="flex flex-col items-center">
                                            <input type="text" name="light-intensity-maxValue" class="outline-blue-300 text-center border-2 rounded-lg h-[2.5em]  w-[8em]">
                                            <label for="light-intensity-minValue">max value</label>
                                        </span>
                                    </div>
                                </div>
                                <!-- Humidity -->
                                <div class="flex flex-col w-full mt-5">
                                    <div class="flex items-center ml-5">
                                        <img src="{{asset('Images/FogponicsIcons/humidity.png')}}" alt="">
                                        <h1 class="font-semibold mx-4">Humidity</h1>
                                    </div>
                                    <!-- Humidity Forms -->
                                    <div class="flex justify-evenly w-full mt-4">
                                        <!-- Minimum Value -->
                                        <span class="flex flex-col items-center">
                                            <input type="text" name="humidity-minValue" class="outline-blue-300 border-2 text-center rounded-lg h-[2.5em] w-[8em]">
                                            <label for="humidity-minValue">min value</label>
                                        </span>
                                        <!-- Maximum Value -->
                                        <span class="flex flex-col items-center">
                                            <input type="text" name="humidity-maxValue" class="outline-blue-300 text-center border-2 rounded-lg h-[2.5em]  w-[8em]">
                                            <label for="humidity-minValue">max value</label>
                                        </span>
                                    </div>
                                </div>
                                <!-- Water Temperature -->
                                <div class="flex flex-col w-full mt-5">
                                    <div class="flex items-center ml-5">
                                        <img src="{{asset('Images/FogponicsIcons/water-temperature.png')}}" alt="">
                                        <h1 class="font-semibold mx-4">Water Temperature</h1>
                                    </div>
                                    <!-- Water Temperature Forms -->
                                    <div class="flex justify-evenly w-full mt-4">
                                        <!-- Minimum Value -->
                                        <span class="flex flex-col items-center">
                                            <input type="text" name="water-temperature-minValue" class="outline-blue-300 border-2 text-center rounded-lg h-[2.5em] w-[8em]">
                                            <label for="water-temperature-minValue">min value</label>
                                        </span>
                                        <!-- Maximum Value -->
                                        <span class="flex flex-col items-center">
                                            <input type="text" name="water-temperature-maxValue" class="outline-blue-300 text-center border-2 rounded-lg h-[2.5em]  w-[8em]">
                                            <label for="water-temperature-maxValue">max value</label>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <input type="submit" class="text-xl font-semibold text-white mt-10 bg-green-400 rounded-lg h-[5dvh] w-[40dvh]">
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="w-[45%] h-[40em] bg-white flex justify-center rounded-xl transform transition duration-300 hover:scale-110">
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
</script>