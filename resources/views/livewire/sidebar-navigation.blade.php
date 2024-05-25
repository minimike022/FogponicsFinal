<div class="h-[22em] flex flex-col justify-between sticky top-10 mt-10">
    <div class="flex justify-center">
        <img src="{{asset('Images/clsuLogo.jpg')}}" alt="" class="h-[5em] w-[5em]">
    </div>
    <div class="text-lg font-semibold mt-2 flex justify-center items-center flex-col">
        <h1 class="bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-green-700">Fogponics Controller</h1>
        <h1 class="bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-green-700">(Web Based)</h1>
    </div>
    <div>
        <nav>
            <ul class="h-[10em] flex flex-col text-lg ml-5">
                <li class="my-3">
                    <a href="{{route('dashboard')}}">
                        <h1 class="font-bold text-gray-300 bg-clip-text hover:text-transparent hover:bg-gradient-to-r from-green-500 to-green-700">Dashboard</h1>
                    </a>
                </li>
                <li class="my-3">
                    <a href="{{route('sensors')}}">
                        <h1 class="font-bold text-gray-300 bg-clip-text hover:text-transparent hover:bg-gradient-to-r from-green-500 to-green-700">Sensors</h1>
                    </a>
                </li>
                <li class="my-3">
                    <a href="{{route("controller")}}">
                        <h class="font-bold text-gray-300 bg-clip-text hover:text-transparent hover:bg-gradient-to-r from-green-500 to-green-700">Controller</h1>
                    </a>
                </li>
                <li class="my-3">
                    <a href="{{route("changePass")}}">
                        <h1 class="font-bold text-gray-300 bg-clip-text hover:text-transparent hover:bg-gradient-to-r from-green-500 to-green-700">Change Password</h1>
                    </a>
                </li>
                <form action="/user/logout" method="POST">
                    @csrf
                    <button>
                        <li class="my-3 flex items-center">
                            <h1 class="font-bold text-gray-300 bg-clip-text hover:text-transparent hover:bg-gradient-to-r from-green-500 to-green-700">Logout</h1>
                        </li>
                    </button>
                </form>
            </ul>
        </nav>
    </div>
</div>