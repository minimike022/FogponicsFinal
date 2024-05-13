<div class="h-[22em] flex flex-col justify-between sticky top-10 mt-10">
    <div class="flex justify-center">
        <img src="{{asset('Images/clsuLogo.jpg')}}" alt="" class="h-[5em] w-[5em]">
    </div>
    <div class="text-lg font-semibold mt-2 flex justify-center items-center flex-col">
        <h1 class="text-green-500">Fogponics Controller</h1>
        <h1 class="text-green-500">(Web Based)</h1>
    </div>
    <div>
        <nav>
            <ul class="h-[10em] flex flex-col text-lg ml-5">
                <li class="my-3">
                    <a href="{{route('dashboard')}}" wire:navigate>
                        <h1 class="font-bold text-gray-300 hover:text-green-500">Dashboard</h1>
                    </a>
                </li>
                <li class="my-3">
                    <a href="{{route('equipments')}}">
                        <h1 class="font-bold text-gray-300 hover:text-green-500">Equipments</h1>
                    </a>
                </li>
                <li class="my-3">
                    <a href="{{route("controller")}}" wire:navigate>
                        <h class="font-bold text-gray-300 hover:text-green-500">Controller</h1>
                    </a>
                </li>
                <li class="my-3">
                    <a href="{{route("changePass")}}" wire:navigate>
                        <h1 class="font-bold text-gray-300 hover:text-green-500">Change Password</h1>
                    </a>
                </li>
                <form action="/user/logout" method="POST">
                    @csrf
                    <button>
                        <li class="my-3 flex items-center">
                            <h1 class="font-bold text-gray-300 hover:text-green-500">Logout</h1>
                        </li>
                    </button>
                </form>
            </ul>
        </nav>
    </div>
</div>