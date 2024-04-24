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
        <div>
            <div id="sidebarNav-cont" class="w-[17em] h-screen relative bg-white flex justify-center left-0">
                @livewire('sidebar-navigation')
            </div>
        </div>
        <!--End of Sidebar-->
        <!--Content Section-->
        <div class="w-full">
            <div class="w-full h-16 bg-white flex items-center px-5">
                <h1 class="text-2xl ml-3">Dashboard</h1>
            </div>
            <div class="flex flex-col p-5">
                <div class="flex justify-between w-full">
                    <div class="w-[13em] h-[9em] bg-white rounded-lg text-center py-2">
                        <h1 class="font-semibold">Mode Status:</h1>
                        <h1 id="modeIndicator" class="mt-6 font-bold text-2xl">Automatic</h1>
                    </div>
                    <div class="w-[45em] h-[9em] bg-white rounded-lg flex justify-between font-semibold p-5">
                        <div class="flex flex-col items-center">
                            <h1>Light Intensity</h1>
                            <h2 class="mt-4">Data</h2>
                        </div>
                        <div class="flex flex-col items-center">
                            <h1>Humidity</h1>
                            <h2 class="mt-4">Data</h2>
                        </div>
                        <div class="flex flex-col items-center">
                            <h1>Water Temperature</h1>
                            <h2 class="mt-4">Data</h2>
                        </div>
                        <div class="flex flex-col items-center">
                            <h1>Water Level</h1>
                            <h2 class="mt-4">Data</h2>
                        </div>
                    </div>
                </div>
                <!-- Log Status -->
                <div class="mt-5 flex justify-between">
                    <div class="w-[40em] h-[18em] bg-white rounded-lg px-5">
                        <h1 class="mt-4 text-xl font-bold">Logs</h1>
                        <div class="h-[14em] bg-gray-200 mt-2 rounded-md">
                        </div>
                    </div>
                    <!-- Actuators Status -->
                    <div class="w-[18em] h-[18em] px-4 py-4 flex flex-col bg-white rounded-lg">
                        <h1 class="text-xl font-bold">Device Controller</h1>
                        <span class="flex justify-between my-4 px-4">
                            <h1 class="font-bold">Exhaust Fan</h1>
                            <label for="check-ef" class="bg-gray-200 items-center relative w-14 h-6 rounded-full">
                                <input type="checkbox" id="check-ef" class="sr-only peer">
                                <span class="w-5 h-5 absolute bg-gray-700 rounded-full
                                left-1 top-[.14em] peer-checked:bg-green-400 peer-checked:left-8
                                transition-all"></span>
                            </label>
                        </span>
                        <span class="flex justify-between my-4 px-4">
                            <h1 class="font-bold">Grow Light</h1>
                            <label for="check-gl" class="bg-gray-200 items-center relative w-14 h-6 rounded-full">
                                <input type="checkbox" id="check-gl" class="sr-only peer">
                                <span class="w-5 h-5 absolute bg-gray-700 rounded-full
                                left-1 top-[.14em] peer-checked:bg-green-400 peer-checked:left-8
                                transition-all"></span>
                            </label>
                        </span>
                        <span class="flex justify-between my-4 px-4">
                            <h1 class="font-bold">Fogger</h1>
                            <label for="check-f" class="bg-gray-200 items-center relative w-14 h-6 rounded-full">
                                <input type="checkbox" id="check-f" class="sr-only peer">
                                <span class="w-5 h-5 absolute bg-gray-700 rounded-full
                                left-1 top-[.14em] peer-checked:bg-white peer-checked:left-8
                                transition-all"></span>
                            </label>
                        </span>
        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">
    const modeIndicator = document.getElementById("modeIndicator")
    modeIndicator.textContent = "Manual"
</script>