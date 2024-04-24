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
            <ul class=" h-[10em] flex flex-col text-lg items-center">
                <li class="my-3">
                    <a href="{{route('dashboard')}}" wire:navigate>
                        <h1>Dashboard</h1>
                    </a>
                </li>
                <li class="my-3">
                    <a href="{{route('equipments')}}">
                        <h1>Equipments</h1>
                    </a>
                </li>
                <li class="my-3">
                    <a href="{{route("controller")}}" wire:navigate>
                        <h1>Controller</h1>
                    </a>
                </li>
                <li class="my-3">
                    <a href="{{route("changePass")}}" wire:navigate>
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