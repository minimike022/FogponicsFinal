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
        <div id="sidebarNav">
            @include('Pages/Components.navigation')
        </div>
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