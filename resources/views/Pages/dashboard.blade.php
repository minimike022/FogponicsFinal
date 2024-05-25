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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="font-Poppins overflow-x-hidden">
    <div class="flex">
        <!-- Navigation Sidebar-->
        <div class="drop-shadow-md">
            <div id="sidebarNav-cont" class="w-[17em] h-full bg-white flex justify-center left-0">
                @livewire('sidebar-navigation')
            </div>
        </div>
        <!--End of Sidebar-->
        <div class="p-10 w-screen">
            <div>
                <h1 class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-green-700 drop-shadow-md">Dashboard</h1>
            </div>
            <div class="w-full flex mt-8">
                <div class="flex flex-col">
                    <div class="relative bg-gradient-to-r from-red-500 to-red-700 w-[100dvh] h-[12dvh] rounded-lg shadow-lg
                        flex items-center px-4
                        ">
                        <h1 class="text-xl font-bold text-white">Your plant is thirsty, refill the water tank</h1>
                    </div>

                    <!--Status-->
                    <div class="my-5 flex items-center">
                        <h1 class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-green-700 drop-shadow-md ">Mode Status:</h1>
                        <div class="w-[20dvh] rounded-lg h-[10dvh] flex justify-center items-center bg-white drop-shadow-md ml-4">
                            <h1 class="text-base font-bold text-green-600">
                                Automatic
                            </h1>
                        </div>
                    </div>

                    <!--Activate Device Section-->
                    <!-- Header -->
                    <div class="my-2">
                        <div class="flex items-center">
                            <h1 class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-green-700 drop-shadow-md my-2">Activate Devices</h1>
                            <h1 class="text-sm text-gray-400
                        font-bold
                        ml-2">
                                (Note: Mode Status will be changed to manual)
                            </h1>
                        </div>
                        <!-- Activate Devices -->
                        <div class="w-[70dvh] grid grid-cols-3">
                            <label for="fogger" class="
                        hover:bg-green-400 hover:text-white
                        text-green-600 
                        flex items-center justify-center
                        w-[20dvh] h-[7dvh] shadow-md rounded-md 
                      has-[:checked]:text-white has-[:checked]:bg-green-500">
                                <input type="checkbox" value="active" name="fogger" id="fogger" class="sr-only">
                                <h1 class="text-sm font-bold"> Fogger </h1>
                            </label>
                            <label for="exhaust_fan" class="
                        hover:bg-green-400 hover:text-white
                        text-green-600 
                        flex items-center justify-center
                        w-[20dvh] h-[7dvh] shadow-md rounded-md 
                      has-[:checked]:text-white has-[:checked]:bg-green-500">
                                <input type="checkbox" name="exhaust_fan" id="exhaust_fan" class="sr-only">
                                <h1 class="text-sm font-bold"> Exhaust Fan </h1>
                            </label>

                            <label for="grow_light" class="
                        hover:bg-green-400 hover:text-white
                    text-green-600
                    flex items-center justify-center
                    w-[20dvh] h-[7dvh] shadow-md rounded-md 
                    has-[:checked]:text-white has-[:checked]:bg-green-500">
                                <input type="checkbox" name="grow_light" id="grow_light" class="sr-only">
                                <h1 class="text-sm font-bold"> Grow Light </h1>
                            </label>
                        </div>
                    </div>
                    <div class="w-full my-8">
                        <div class="flex justify-between items-center">
                            <h1 class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-green-700 drop-shadow-md">Sensors Data</h1>
                            <a href="{{route('sensors')}}" class="text-sm text-gray-400 font-bold hover:text-green-600">See All</a>
                        </div>
                        <div class="flex justify-between">
                            <div class="w-[30dvh] h-[35dvh] shadow-lg">

                            </div>
                            <div class="w-[30dvh] h-[35dvh] shadow-lg">

                            </div>
                            <div class="w-[30dvh] h-[35dvh] shadow-lg">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="ml-[12dvh] flex flex-col">
                    <div class="w-[45dvh] h-[50dvh] shadow-lg rounded-lg flex items-center">
                        <div class="h-[30dvh] w-full">
                            <canvas id="dataChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">
</script>