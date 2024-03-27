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
        <div id="sidebarNav" class="relative">
            @include('Pages/Components.navigation')
        </div>
        <div class="w-full">
            <div class="w-full h-24 bg-white flex items-center">
                <button onclick="sidebarBehavior()">
                    <img src="{{asset('Images/menu.svg')}}" alt="" class="ml-5 h-[30px]  w-[30px]">
                </button>
                <h1 class="text-4xl ml-5">Dashboard</h1>
            </div>
            <div class="flex items-center my-5 flex-col">
                <div class="bg-white h-[30em] w-[90em] rounded-lg">
                    <h1></h1>
                </div>
                <div class="flex justify-between mt-5 w-[90em]">
                    <div class="bg-white w-[44em] h-[30em] rounded-lg">
                        
                    </div>
                    <div class="bg-white w-[44em] h-[30em] rounded-lg">
                        
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