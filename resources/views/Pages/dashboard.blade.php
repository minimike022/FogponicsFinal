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

<body class="font-Poppins">
    <div class="flex">
        <!-- Navigation Sidebar-->
        <div class="drop-shadow-md">
            <div id="sidebarNav-cont" class="w-[17em] h-screen bg-white flex justify-center left-0">
                @livewire('sidebar-navigation')
            </div>
        </div>
        <!--End of Sidebar-->
        <div class="p-10">
            <h1 class="text-3xl font-bold text-green-500">Dashboard</h1>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">
</script>