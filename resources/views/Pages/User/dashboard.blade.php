<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/luxon"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-luxon"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-streaming"></script>
</head>

<body class="bg-gray-200 font-Poppins">
    <div class="flex">
        <!-- Navigation Sidebar-->
        <div id="sidebarNav">
            <div class="w-[17em] h-screen relative bg-white flex justify-center left-0">
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
            <div class="w-full h-16 bg-white flex items-center px-5">
                <button onclick="sidebarBehavior()">
                    <img src="{{asset('Images/menu.svg')}}" alt="" class="h-[30px]  w-[30px]">
                </button>
                <h1 class="text-2xl ml-3">Dashboard</h1>
            </div>
            <div class="flex flex-col p-5">
                <div class="flex justify-between w-full">
                    <div class="w-[13em] h-[9em] bg-white rounded-lg text-center p-7">
                        <div class="h-full flex justify-center items-center text-xl font-bold">
                            <h1>Automatic</h1>
                        </div>
                    </div>
                    <div class="w-[45em] h-[9em] bg-white rounded-lg">
                        <form action="" class="flex justify-around items-center h-full">
                        <span class="flex">
                            <h1>Grow Light</h1>
                            <input type="checkbox">
                        </span>
                        <span class="flex">
                            <h1>Humidifier</h1>
                            <input type="checkbox">
                        </span>
                        <span class="flex">
                            <h1>Exhaust Fan</h1>
                            <input type="checkbox">
                        </span>
                        </form>
                    </div>
                </div>
                <div class="mt-5 flex justify-between">
                    <div class="w-[40em] h-[18em] bg-white rounded-lg">
                        <h1>Logs</h1>
                    </div>
                    <div class="w-[18em] h-[18em] bg-white rounded-lg">
                        <h1>Notifications</h1>
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
        if (sidebarMenu.style.display == "none") {
            sidebarMenu.style.display = "block"
        } else {
            sidebarMenu.style.display = "none"
        }
    }
</script>