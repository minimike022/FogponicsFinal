<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="font-Poppins">
    <div class="flex">
        <!-- Navigation Sidebar-->
        <div class="drop-shadow-md">
            <div id="sidebarNav-cont" class="w-[17em] h-screen relative bg-white flex justify-center left-0">
                @livewire('sidebar-navigation')
            </div>
        </div>
        <!--End of Sidebar-->
        <div class="p-10">
            <h1 class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-green-700 drop-shadow-md">Controller</h1>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">

</script>