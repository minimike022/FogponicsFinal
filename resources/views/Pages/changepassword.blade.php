<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class=" font-Poppins">
    <div class="flex">
        <!-- Navigation Sidebar-->
        <div class="drop-shadow-md">
            <div id="sidebarNav-cont" class="w-[17em] h-screen relative bg-white flex justify-center left-0">
                @livewire('sidebar-navigation')
            </div>
        </div>
        <!--End of Sidebar-->
        <!--Content Section-->
        <div class="p-10">
            <h1 class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-green-700 drop-shadow-md">Change Password</h1>
            @if(Session::has('error'))
            {{dd(session('error'))}}
            @endif
            <div class="mt-10">
                <form action="/user/updatePassword" method="POST">
                    @csrf
                    <div class="flex flex-col">
                        <span class="flex flex-col my-4 relative">
                            <input type="password" id="old_password" name="old_password" class="w-[15em] h-[2.5em] text-lg pl-2 border-gray-400 outline-none border-b-2 focus:border-green-500 peer" required>
                            <label for="old_password" class="text-gray-500 text-lg
                            absolute -top-5
                            peer-focus:text-green-500"> Old Password</label>
                        </span>
                        <span class="flex flex-col my-4 relative">
                            <input type="password" name="new_password" class="w-[15em] h-[2.5em] text-lg pl-2 border-gray-400 outline-none border-b-2 focus:border-green-500 peer" required>
                            <label for="new_password" class="text-gray-500 text-lg 
                            absolute -top-5
                            peer-focus:text-green-500"> New Password</label>
                        </span>
                        <span class="flex flex-col my-4 relative">
                            <input type="password" name="confirm_password" class="w-[15em] h-[2.5em] text-lg pl-2 border-gray-400 outline-none border-b-2 focus:border-green-500 peer" required> 
                            <label for="confirm_password" class="text-gray-500 text-lg 
                            absolute -top-5
                            peer-focus:text-green-500"> Confirm Password</label>
                        </span>
                        <input type="submit" name="submit" class=" bg-green-400 text-white font-bold rounded-md mt-2 w-[15em] h-[2em] text-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">

</script>