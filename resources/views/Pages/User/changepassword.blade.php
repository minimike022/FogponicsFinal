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
            <div id="sidebarNav-cont" class="w-[17em] h-screen relative bg-white flex justify-center left-0">
                @livewire('sidebar-navigation')
            </div>
        </div>
        <!--End of Sidebar-->
        <!--Content Section-->
        <div class="w-full">
            <div class="w-full h-16 bg-white flex items-center">
                <h1 class="text-2xl ml-5">Change Password</h1>
            </div>
            @if(session('data'))
            {{dd(Session::all())}}
            @endif

            @if(session('pss'))
            {{session('pss')}}
            @endif
            <div class="mt-20 ml-20">
                <form action="/updatePassword" method="POST">
                    @csrf
                    <div class="flex flex-col">
                        <span class="flex flex-col my-2">
                            <label for="oldPassword" class="text-gray-500 text-xl"> Old Password</label>
                            <input type="password" name="oldPassword" class="w-[15em] h-[2.5em] text-xl pl-4 rounded-md border-gray-400 outline-gray-600 border-2" required>
                        </span>
                        <span class="flex flex-col my-2">
                            <label for="newPassword" class="text-gray-500 text-xl"> New Password</label>
                            <input type="password" name="newPassword" class="w-[15em] h-[2.5em] text-xl pl-4 rounded-md border-gray-400 outline-gray-600 border-2" required>
                        </span>
                        <span class="flex flex-col my-2">
                            <label for="confirmPassword" class="text-gray-500 text-xl"> Confirm Password</label>
                            <input type="password" name="confirmPassword" class="w-[15em] h-[2.5em] text-xl pl-4 rounded-md border-gray-400 outline-gray-600 border-2" required> 
                        </span>
                        <input type="submit" name="submit" class=" bg-green-400 text-white rounded-lg mt-4 w-[15em] h-[2.5em] text-xl">
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">

</script>