<nav class="navbar navbar-expand-md shadow-sm bg-light-black">
    <div class="flex w-100 px-4 justify-between">
        <a class="text-[22px] navbar-brand text-white text-center w-md-[250px] m-0 hidden md:block" href="#">
            {{ env('APP_NAME') }}
        </a>
        <button class="text-[22px] navbar-brand text-white text-center w-30 m-0 block md:hidden" onclick="mobileMenu()">
            <img src="{{ asset('images/web/menu.svg') }}" alt="menu" />
        </button>

        <div class="w-[calc(100%-250px)] flex">
            {{-- <div class="relative">
                <div class="absolute top-3 left-3">
                    <img src="{{ asset('images/web/search.svg') }}" alt="search" />
                </div>
                <input class="text-sm[13px] px-5 py-0 w-full rounded-[20px] bg-dark border-0 h-[40px] form-control focus:outline-none focus:shadow-none text-white" type="text" name="search" placeholder="Search here...">
            </div> --}}
            <div class="ms-auto flex items-center">
                {{-- <div class="relative border-solid border rounded-full border-gray-light w-[40px] h-[40px] flex items-center justify-center">
                    <p class="bg-cyan text-white rounded-full w-[21px] h-[21px] flex items-center justify-center text-[12px] absolute top-[-5px] right-[-5px]">1</p>
                    <img src="{{asset('images/web/notification.svg')}}" alt="notification" />
                </div> --}}
                <div class="relative ms-3">
                    <button class="flex items-center" type="button" onclick="userDropdown()">
                        <img src="{{asset('images/web/user.svg')}}" alt="menu" />
                        <img src="{{asset('images/web/down-arrow.svg')}}" class="ms-2" alt="arrow" width="8" />
                    </button>
                    <div id="user-menu" class="absolute top-[55px] right-0 bg-light-black z-10 border-solid border-2 rounded-[10px] border-gray w-[180px]" style="display: none;">
                        <div class="user-detail flex items-center border-b-2 border-solid border-gray p-3">
                            <img src="{{asset('images/web/user.svg')}}" alt="menu" width="30" height="30" />
                            <p class="text-white text-sm ms-3">{{ Auth()->user()->name }}</p>
                        </div>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST">
                            @csrf
                            <button class="flex items-center m-3">
                                <img src="{{asset('images/web/logout.svg')}}" alt="logout" />
                                <p class="text-white text-sm ms-3">Logout</p>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>


<script src="{{ asset('js/sidebar.js') }}"></script>
