<div class="w-[250px] bg-light-black h-[calc(100vh-60px)] float-left" id="sidebar-menu">
    <ul class="py-3 border-solid border-black border-t-2">
        <li class="side-list px-[25px] py-[15px] relative">
            <a href="{{ route('admin.data-seed.index') }}"
                class="flex items-center text-[15px] hover:text-white @if (Route::is(['admin.data-seed.index'])) active @endif"
                aria-haspopup="true" data-menu-toggle="hover">
                <img src="{{ asset ('images/web/dashboard-white.svg') }}" alt="optimization"
                    class="me-3" width="20" />
                    Seed Dataset
            </a>
        </li>
    </ul>
</div>
