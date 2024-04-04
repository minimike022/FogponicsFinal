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
            <div class="w-full h-16 bg-white flex items-center justify-between px-5">
                <span class="flex">
                    <button onclick="sidebarBehavior()">
                        <img src="{{asset('Images/menu.svg')}}" alt="" class="h-[30px]  w-[30px]">
                    </button>
                    <h1 class="text-2xl ml-3">Equipments</h1>
                </span>
                <span class="flex text-lg">
                    <h1 class="mr-2">Time: </h1>
                    <h1 id="timestamps"></h1>
                </span>
            </div>
            <!--Sensors-->
            <div class="p-5 overflow-hidden">
                <div class="flex w-full justify-between">
                    <div class="bg-white h-[20em] w-[29em] rounded-lg">
                        <span class="flex justify-between text-sm px-6 py-2">
                            <h1>Water Temperature</h1>
                            <h1>Up Time: 0</h1>
                        </span>
                        <canvas id="water-temp">

                        </canvas>
                    </div>
                    <div class="bg-white h-[20em] w-[29em] rounded-lg">
                        <span class="flex justify-between text-sm px-6 py-2">
                            <h1>Light Intensity</h1>
                            <h1>Up Time: 0</h1>
                        </span>
                        <canvas id="light-intensity">

                        </canvas>
                    </div>
                </div>

                <div class="flex w-full justify-between mt-5 items-center">
                    <div class="bg-white h-[22em] w-[38em] rounded-lg items-center">
                        <span class="flex justify-between text-sm px-6 py-2">
                            <h1>Humidity</h1>
                            <h1>Up Time: 0</h1>
                        </span>
                        <canvas id="humidity">

                        </canvas>
                    </div>
                    <div class="bg-white h-[22em] w-[20em] rounded-lg">
                        <span class="flex justify-between text-sm px-6 py-2">
                            <h1>Water Level</h1>
                            <h1>Up Time: 0</h1>
                        </span>
                        <canvas id="water-level">

                        </canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">
    var sidebarMenu = document.getElementById("sidebarNav");
    const waterTemp = document.getElementById("water-temp")
    const lightIntensity = document.getElementById("light-intensity")
    const humidity = document.getElementById("humidity")
    const waterLevel = document.getElementById("water-level")

    window.setInterval(function() {
        document.getElementById("timestamps").textContent = callbackDate()
    }, 1000)

    const callbackDate = () => {
        var date = new Date()
        date = date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds()

        return date;
    }



    const sidebarBehavior = () => {
        if (sidebarMenu.style.display == "none") {
            sidebarMenu.style.display = "block"
        } else {
            sidebarMenu.style.display = "none"
        }
    }

    function createChart(chartName, lineColor, chartLabel) {
        const data = {
            labels: [0],
            datasets: [{
                label: chartLabel,
                data: [0],
                lineTension: .5,
                borderColor: lineColor
            }]
        }
        const config = {
            type: 'line',
            data: data,
            options: {
                scales: {
                    x: {
                        type: 'realtime',
                        realtime: {
                            delay: 2000,
                            onRefresh: chart => {
                                chart.data.datasets.forEach(dataset => {
                                    dataset.data.push({
                                        x: Date.now(),
                                        y: Math.random() * 10
                                    })
                                })
                            }
                        }
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        }

        new Chart(chartName, config)
    }

    createChart(waterTemp, 'red' , "Water Temperature")
    createChart(lightIntensity , null , "Light Intensity")
    createChart(humidity , null , "Humidity")
</script>