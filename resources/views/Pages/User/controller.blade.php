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
        <div>
            <div id="sidebarNav-cont" class="w-[17em] h-full relative bg-white flex justify-center left-0">
                @livewire('sidebar-navigation')
            </div>
        </div>
        <!--End of Sidebar-->
        <!--Content Section-->
        <div class="w-full">
            <div class="w-full h-16 bg-white flex items-center px-5">
                <h1 class="text-2xl ml-3">Controller</h1>
            </div>
            <div class="w-full flex justify-around p-5">
                <!-- Contents -->
                <div class="w-[28em] h-[30em] bg-white rounded-md flex flex-col items-center p-4 px-6">
                    <h1 class="text-xl">Automatic</h1>
                    <div class="w-full flex justify-start">
                        <form action="" method="post" class="w-full">
                            @csrf
                            <input type="hidden" value="automatic">
                            <!-- Light Intensity -->
                            <div class="mt-5">
                                <div class="flex items-center">
                                    <img src="{{asset('Images/FogponicsIcons/light.png')}}" alt="" class="h-[30px] w-[30px] mr-4">
                                    <h1 class="font-bold">Light Intensity</h1>
                                </div>
                                <div class="flex justify-evenly mt-4">
                                    <span class="flex flex-col items-center">
                                        <input type="text" name="lightIntensity-min" class="w-[6em] h-[2em] text-center outline-none border-gray-500 border-2 focus:border-blue-400 rounded-md" required>
                                        <label for="lightIntensity-min" class="text-sm mt-1">min value</label>
                                    </span>
                                    <span class="flex flex-col items-center">
                                        <input type="text" name="lightIntensity-max" class="w-[6em] h-[2em] text-center outline-none border-gray-500 border-2 focus:border-blue-400 rounded-md" required>
                                        <label for="lightIntensity-max" class="text-sm mt-1">max value</label>
                                    </span>
                                </div>
                            </div>

                            <!-- Water Temperature -->
                            <div class="mt-5">
                                <div class="flex items-center">
                                    <img src="{{asset('Images/FogponicsIcons/water-temperature.png')}}" alt="" class="h-[30px] w-[30px] mr-4">
                                    <h1 class="font-bold">Water Temperature</h1>
                                </div>
                                <div class="flex justify-evenly mt-4">
                                    <span class="flex flex-col items-center">
                                        <input type="text" name="waterTemp-min" class="w-[6em] h-[2em] text-center outline-none border-gray-500 border-2 focus:border-blue-400 rounded-md" required>
                                        <label for="waterTemp-min" class="text-sm mt-1">min value</label>
                                    </span>
                                    <span class="flex flex-col items-center">
                                        <input type="text" name="waterTemp-max" class="w-[6em] h-[2em] text-center outline-none border-gray-500 border-2 focus:border-blue-400 rounded-md" required>
                                        <label for="waterTemp-max" class="text-sm mt-1">max value</label>
                                    </span>
                                </div>
                            </div>

                            <!-- Humidity -->
                            <div class="mt-5">
                                <div class="flex items-center">
                                    <img src="{{asset('Images/FogponicsIcons/humidity.png')}}" alt="" class="h-[30px] w-[30px] mr-4">
                                    <h1 class="font-bold">Humidity</h1>
                                </div>
                                <div class="flex justify-evenly mt-4">
                                    <span class="flex flex-col items-center">
                                        <input type="text" name="humidity-min" class="w-[6em] h-[2em] text-center outline-none border-gray-500 border-2 focus:border-blue-400 rounded-md" required>
                                        <label for="humidity-min" class="text-sm mt-1">min value</label>
                                    </span>
                                    <span class="flex flex-col items-center">
                                        <input type="text" name="humidity-max" class="w-[6em] h-[2em] text-center outline-none border-gray-500 border-2 focus:border-blue-400 rounded-md" required>
                                        <label for="humidity-max" class="text-sm mt-1">max value</label>
                                    </span>
                                </div>
                            </div>

                            <input type="submit" class="text-white font-bold mt-5 bg-green-400 h-[2em] w-full rounded-md flex justify-center items-center">

                        </form>
                    </div>
                </div>
                <div class="w-[28em] h-[30em] bg-white rounded-lg flex flex-col items-center p-4 px-6">
                    <h1 class="text-xl">Scheduled</h1>
                    <div class="w-full flex justify-start">
                        <form action="" method="POST" class="w-full">
                            @csrf
                            <input type="hidden" value="scheduled">
                            <!-- Grow Light -->
                            <div class="mt-5">
                                <div class="flex items-center">
                                    <img src="{{asset('Images/FogponicsIcons/growLight.png')}}" alt="" class="h-[30px] w-[30px] mr-4">
                                    <h1 class="font-bold">Grow Light</h1>
                                </div>
                                <div class="flex justify-evenly mt-4">
                                    <span class="flex flex-col items-center">
                                        <input type="text" name="growLight-am" class="w-[6em] h-[2em] text-center outline-none border-gray-500 border-2 focus:border-blue-400 rounded-md" required>
                                        <label for="growLight-am" class="text-sm mt-1">AM</label>
                                    </span>
                                    <span class="flex flex-col items-center">
                                        <input type="text" name="growLight-pm" class="w-[6em] h-[2em] text-center outline-none border-gray-500 border-2 focus:border-blue-400 rounded-md" required>
                                        <label for="growLight-pm" class="text-sm mt-1">PM</label>
                                    </span>
                                </div>
                            </div>

                            <!--Exhaust Fan-->
                            <div class="mt-5">
                                <div class="flex items-center">
                                    <img src="{{asset('Images/FogponicsIcons/exhaustFan.png')}}" alt="" class="h-[30px] w-[30px] mr-4">
                                    <h1 class="font-bold">Exhaust Fan</h1>
                                </div>
                                <div class="flex justify-evenly mt-4">
                                    <span class="flex flex-col items-center">
                                        <input type="text" name="exhaustFan-am" class="w-[6em] h-[2em] text-center outline-none border-gray-500 border-2 focus:border-blue-400 rounded-md" required>
                                        <label for="exhaustFan-am" class="text-sm mt-1">AM</label>
                                    </span>
                                    <span class="flex flex-col items-center">
                                        <input type="text" name="exhaustFan-pm" class="w-[6em] h-[2em] text-center outline-none border-gray-500 border-2 focus:border-blue-400 rounded-md" required>
                                        <label for="exhaustFan-pm" class="text-sm mt-1">PM</label>
                                    </span>
                                </div>
                            </div>

                            <!-- Humidifier -->
                            <div class="mt-5">
                                <div class="flex items-center">
                                    <img src="{{asset('Images/FogponicsIcons/humidity.png')}}" alt="" class="h-[30px] w-[30px] mr-4">
                                    <h1 class="font-bold">Humidity</h1>
                                </div>
                                <div class="flex justify-evenly mt-4">
                                    <span class="flex flex-col items-center">
                                        <input type="text" name="humidifier-am" class="w-[6em] h-[2em] text-center outline-none border-gray-500 border-2 focus:border-blue-400 rounded-md" required>
                                        <label for="humidifier-am" class="text-sm mt-1">min value</label>
                                    </span>
                                    <span class="flex flex-col items-center">
                                        <input type="text" name="humidifier-pm" class="w-[6em] h-[2em] text-center outline-none border-gray-500 border-2 focus:border-blue-400 rounded-md" required>
                                        <label for="humidifier-pm" class="text-sm mt-1">max value</label>
                                    </span>
                                </div>
                            </div>

                            <input type="submit" class="text-white font-bold mt-5 bg-green-400 h-[2em] w-full rounded-md flex justify-center items-center">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">
    var automaticSetter = 0;
    var scheduledSetter = 0;

</script>