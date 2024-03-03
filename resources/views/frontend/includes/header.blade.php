<div class="py-4 md:py-6 xl:py-8 px-4 relative">
    <div class="container mx-auto">
        <div class="flex items-center justify-between">
            <div>
                <a href="">
                    {{ env('APP_NAME') }}
                </a>
            </div>
            <button class="md:hidden" onclick="menuToggle()">
                <img src="{{ asset('images/web/menu.svg') }}" alt="Menu" width="35px"
                    height="35px">
            </button>
            <div class="sidebar" id="mobile-menu">
                <button class="absolute top-2 left-5 text-2xl md:hidden" onclick="menuToggle()">
                    &#x2716;
                </button>
                <a href="" class="text-base xl:text-lg font-semibold hover:text-cyan transition ml-5 xl:ml-7">{{ __('landing_page.menu.features') }}</a>
                <a href="" class="text-base xl:text-lg font-semibold hover:text-cyan transition ml-5 xl:ml-7">{{ __('landing_page.menu.documentation') }}</a>
                <a href="" class="text-base xl:text-lg font-semibold hover:text-cyan transition ml-5 xl:ml-7">{{ __('landing_page.menu.github') }}</a>
            </div>
        </div>
    </div>
</div>
