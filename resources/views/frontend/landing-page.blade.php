@extends('frontend.layouts.app')
@section('content')
    <div class="py-12 md:py-24 xl:py-32 px-4 relative">
        <img class="absolute left-0 bottom-0 block w-full h-[300px] md:h-[480px] xl:h-[605px] object-cover"
            src="{{ asset('images/web/wave.svg') }}" alt="Wave">
        <div class="container mx-auto relative">
            <h1 class="text-[48px] leading-[54px] lg:text-[64px] lg:leading-[72px] xl:text-[80px] xl:leading-[94px] font-bold text-center">
                {{ __('landing_page.heading.head_text_1') }} <span class="text-cyan">{{ __('landing_page.heading.head_text_2') }}</span> <span class="block">{{ __('landing_page.heading.head_text_3') }}</span>
            </h1>
            <p class="text-base md:text-lg xl:text-xl text-gray-custom text-center mt-4 md:mt-6 mx-auto max-w-full w-[600px]">
                {{ __('landing_page.heading.sub_text') }}
            </p>
            <div class="flex justify-center mt-8 md:mt-12 xl:mt-14">
                <a href="" class="bg-cyan rounded-full flex items-center justify-center h-11 md:h-12 xl:h-14 w-[200px]" id="see_plans">
                    {{ __('landing_page.buttons.see_plan') }}
                    <img class="ml-3" src="{{ asset('images/web/right-arrow.svg') }}" alt="Arrow">
                </a>
            </div>
        </div>
    </div>
    <div class="pb-12 md:pb-24 xl:pb-32 px-4 mt-0 -md:mt-10 -xl:mt-16 relative">
        <div class="container mx-auto">
            <img class="block mx-auto max-w-full w-[600px] xl:w-[700px]" src="{{ asset('images/web/ipad.png') }}" alt="Ipad">
        </div>
    </div>
    <div class="px-4 relative">
        <div class="container mx-auto">
            <h2 class="text-[40px] md:text-[48px] xl:text-[56px] leading-[48px] md:leading-[54px] xl:leading-[64px] font-bold text-center">
                {{ __('landing_page.mid_heading.head_text') }}
            </h2>
            <p class="text-base md:text-lg xl:text-xl text-gray-custom text-center mt-4 xl:mt-6 mx-auto max-w-full w-[600px]">
                {{ __('landing_page.mid_heading.head_subtext') }}
            </p>
            <div class="flex flex-col lg:flex-row items-center justify-between mt-14 xl:mt-16">
                <div class="order-2 lg:order-1 lg:pr-10 mt-6 lg:mt-0 text-center lg:text-left w-[830px] max-w-full">
                    <p class="text-[18px] md:text-[20px] xl:text-[22px] mb-4 md:mb-5 xl:mb-6">
                        {{ __('landing_page.mid_heading.sub_text_1') }}
                    </p>
                    <p class="text-[18px] md:text-[20px] xl:text-[22px] mb-4 md:mb-5 xl:mb-6">
                        {{ __('landing_page.mid_heading.sub_text_2') }}
                    </p>
                    <p class="text-[18px] md:text-[20px] xl:text-[22px] mb-4 md:mb-5 xl:mb-6">
                        {{ __('landing_page.mid_heading.sub_text_3') }}
                    </p>
                </div>
                <div class="order-1 ">
                    <img class="block mx-auto w-[440px] lg:min-w-[440px]" src="{{ asset('images/web/ipad.png') }}" alt="Ipad">
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-evenly mt-8 md:mt-16 xl:mt-20">
                <div>
                    <div
                        class="flex items-center justify-center bg-gray-dark border-2 border-cyan rounded-[10px] w-full md:w-[215px] lg:w-[260px] xl:w-[322px] h-[100px] lg:h-[120px] xl:h-[136px]">
                        <span class="text-lg lg:text-xl xl:text-2xl font-semibold">{{ __('landing_page.cards.lighten_the_code') }}</span>
                    </div>
                    <div class="bg-cyan w-[2px] h-[80px] lg:h-[100px] xl:h-[120px] mx-auto"></div>
                    <div class="w-[28px] h-[28px] mx-auto border-2 border-cyan rounded-full"></div>
                </div>
                <div class="mt-4 md:mt-16 lg:mt-20 xl:mt-24 mb-4 md:mb-0">
                    <div
                        class="flex items-center justify-center bg-gray-dark border-2 border-cyan rounded-[10px] w-full md:w-[215px] lg:w-[260px] xl:w-[322px] h-[100px] lg:h-[120px] xl:h-[136px]">
                        <span class="text-lg lg:text-xl xl:text-2xl font-semibold">{{ __('landing_page.cards.platforms_to_choose') }}</span>
                    </div>
                    <div class="bg-cyan w-[2px] h-[80px] lg:h-[100px] xl:h-[120px] mx-auto"></div>
                    <div class="w-[28px] h-[28px] mx-auto border-2 border-cyan rounded-full"></div>
                </div>
                <div>
                    <div
                        class="flex items-center justify-center bg-gray-dark border-2 border-cyan rounded-[10px] w-full md:w-[215px] lg:w-[260px] xl:w-[322px] h-[100px] lg:h-[120px] xl:h-[136px]">
                        <span class="text-lg lg:text-xl xl:text-2xl font-semibold">{{ __('landing_page.cards.remote_control') }}</span>
                    </div>
                    <div class="bg-cyan w-[2px] h-[80px] lg:h-[100px] xl:h-[120px] mx-auto"></div>
                    <div class="w-[28px] h-[28px] mx-auto border-2 border-cyan rounded-full"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-[-150px] md:mt-[-250px] xl:mt-[-300px]">
        <img class="block w-full h-[300px] md:h-[450px] xl:h-[580px] object-cover" src="{{ asset('images/web/wave2.svg') }}" alt="Wave">
    </div>
    <div class="pb-12 md:pb-24 xl:pb-32 px-4 relative" id="plans">
        <div class="container mx-auto">
            <h2 class="text-[40px] md:text-[48px] xl:text-[56px] leading-[54px] xl:leading-[64px] font-bold text-center">
                {{ __('landing_page.plans.choose_your_plan') }}
            </h2>
            <p class="text-base md:text-lg xl:text-xl text-gray-custom text-center mt-4 xl:mt-6 mx-auto max-w-full w-[600px]">
                {{ __('landing_page.plans.sub_text') }}
            </p>

            <div class="flex flex-col md:flex-row justify-between lg:justify-evenly mt-5 md:mt-[120px] xl:mt-[160px]">
                <div class="py-12 xl:py-16 group px-4 bg-gray-dark ring-1 ring-zinc-700 mt-4 md:mt-0 md:hover:scale-105 hover:ring-4 hover:ring-cyan transition flex flex-col items-center w-full md:w-[230px] lg:w-[280px] xl:w-[320px] rounded-[10px]">
                    <h4 class="text-[21px] xl:text-[23px] font-bold text-cyan text-center">{{ __('landing_page.plans.free_plan.free_plan') }}</h4>
                    <p class="text-[12px] text-gray-custom text-center mt-3">{{ __('landing_page.plans.free_plan.sub_text') }}</p>
                    <div class="flex items-center justify-center group-hover:text-cyan transition mt-3">
                        <span class="text-[15px] font-bold -mt-2">{{ __('landing_page.plans.dollor') }}</span>
                        <span class="text-[48px] md:text-[54px] xl:text-[67px] leading-none font-bold">{{ __('landing_page.plans.free_plan.price_1') }}</span>
                        <span class="mt-1">
                            <span class="block text-[15px] font-bold">{{ __('landing_page.plans.free_plan.price_2') }}</span>
                            <span class="block text-[11px] mt-1">{{ __('landing_page.plans.free_plan.duration') }}</span>
                        </span>
                    </div>
                    <a href="" class="bg-neutral-900 text-[12px] xl:text-[13px] mt-5 border border-white group-hover:bg-cyan group-hover:border-cyan transition flex items-center justify-center rounded-full h-[40px] xl:h-[42px]  w-[160px]">
                        {{ __('landing_page.plans.free_plan.button') }}
                    </a>
                    <div class="mt-6">
                        <div class="flex items-center">
                            <img src="{{ asset('images/web/check.svg') }}" alt="Check">
                            <span class="text-[13px] ml-2">{{ __('landing_page.plans.benefits.trial_demo') }}</span>
                        </div>
                        <div class="flex items-center mt-3">
                            <img src="{{ asset('images/web/check.svg') }}" alt="Check">
                            <span class="text-[13px] ml-2">{{ __('landing_page.plans.benefits.freebies') }}</span>
                        </div>
                        <div class="flex items-center mt-3">
                            <img src="{{ asset('images/web/close.svg') }}" alt="Close">
                            <span class="text-[13px] ml-2">{{ __('landing_page.plans.benefits.team_management') }}</span>
                        </div>
                        <div class="flex items-center mt-3">
                            <img src="{{ asset('images/web/close.svg') }}" alt="Close">
                            <span class="text-[13px] ml-2">{{ __('landing_page.plans.benefits.customer_support') }}</span>
                        </div>
                    </div>
                </div>

                <div class="py-12 xl:py-16 group px-4 bg-gray-dark ring-1 ring-zinc-700 mt-4 md:mt-0 md:hover:scale-105 hover:ring-4 hover:ring-cyan transition flex flex-col items-center w-full md:w-[230px] lg:w-[280px] xl:w-[320px] rounded-[10px]">
                    <h4 class="text-[21px] xl:text-[23px] font-bold text-cyan text-center">{{ __('landing_page.plans.basic_plan.basic_plan') }}</h4>
                    <p class="text-[12px] text-gray-custom text-center mt-3">{{ __('landing_page.plans.basic_plan.sub_text') }}</p>
                    <div class="flex items-center justify-center group-hover:text-cyan transition mt-3">
                        <span class="text-[15px] font-bold -mt-2">{{ __('landing_page.plans.dollor') }}</span>
                        <span class="text-[48px] md:text-[54px] xl:text-[67px] leading-none font-bold">{{ __('landing_page.plans.basic_plan.price_1') }}</span>
                        <span class="mt-1">
                            <span class="block text-[15px] font-bold">{{ __('landing_page.plans.basic_plan.price_2') }}</span>
                            <span class="block text-[11px] mt-1">{{ __('landing_page.plans.basic_plan.duration') }}</span>
                        </span>
                    </div>
                    <a href="" class="bg-neutral-900 text-[12px] xl:text-[13px] mt-5 border border-white group-hover:bg-cyan group-hover:border-cyan transition flex items-center justify-center rounded-full h-[40px] xl:h-[42px] w-[160px]">
                        {{ __('landing_page.plans.basic_plan.button') }}
                    </a>
                    <div class="mt-6">
                        <div class="flex items-center">
                            <img src="{{ asset('images/web/check.svg') }}" alt="Check">
                            <span class="text-[12px] xl:text-[13px] ml-2">{{ __('landing_page.plans.benefits.trial_demo') }}</span>
                        </div>
                        <div class="flex items-center mt-3">
                            <img src="{{ asset('images/web/check.svg') }}" alt="Check">
                            <span class="text-[12px] xl:text-[13px] ml-2">{{ __('landing_page.plans.benefits.freebies') }}</span>
                        </div>
                        <div class="flex items-center mt-3">
                            <img src="{{ asset('images/web/check.svg') }}" alt="Close">
                            <span class="text-[12px] xl:text-[13px] ml-2">{{ __('landing_page.plans.benefits.team_management') }}</span>
                        </div>
                        <div class="flex items-center mt-3">
                            <img src="{{ asset('images/web/close.svg') }}" alt="Close">
                            <span class="text-[12px] xl:text-[13px] ml-2">{{ __('landing_page.plans.benefits.customer_support') }}</span>
                        </div>
                    </div>
                </div>

                <div class="py-12 xl:py-16 group px-4 bg-gray-dark ring-1 ring-zinc-700 mt-4 md:mt-0 md:hover:scale-105 hover:ring-4 hover:ring-cyan transition flex flex-col items-center w-full md:w-[230px] lg:w-[280px] xl:w-[320px] rounded-[10px]">
                    <h4 class="text-[21px] xl:text-[23px] font-bold text-cyan text-center">{{ __('landing_page.plans.pro_plan.pro_plan') }}</h4>
                    <p class="text-[12px] text-gray-custom text-center mt-3">{{ __('landing_page.plans.pro_plan.sub_text') }}</p>
                    <div class="flex items-center justify-center group-hover:text-cyan transition mt-3">
                        <span class="text-[15px] font-bold -mt-2">{{ __('landing_page.plans.dollor') }}</span>
                        <span class="text-[48px] md:text-[54px] xl:text-[67px] leading-none font-bold">{{ __('landing_page.plans.pro_plan.price_1') }}</span>
                        <span class="mt-1">
                            <span class="block text-[15px] font-bold">{{ __('landing_page.plans.pro_plan.price_2') }}</span>
                            <span class="block text-[11px] mt-1">{{ __('landing_page.plans.pro_plan.duration') }}</span>
                        </span>
                    </div>
                    <a href="" class="bg-neutral-900 text-[12px] xl:text-[13px] mt-5 border border-white group-hover:bg-cyan group-hover:border-cyan transition flex items-center justify-center rounded-full h-[40px] xl:h-[42px] w-[160px]">
                        {{ __('landing_page.plans.pro_plan.button') }}
                    </a>
                    <div class="mt-6">
                        <div class="flex items-center">
                            <img src="{{ asset('images/web/check.svg') }}" alt="Check">
                            <span class="text-[12px] xl:text-[13px] ml-2">{{ __('landing_page.plans.benefits.trial_demo') }}</span>
                        </div>
                        <div class="flex items-center mt-3">
                            <img src="{{ asset('images/web/check.svg') }}" alt="Check">
                            <span class="text-[12px] xl:text-[13px] ml-2">{{ __('landing_page.plans.benefits.freebies') }}</span>
                        </div>
                        <div class="flex items-center mt-3">
                            <img src="{{ asset('images/web/check.svg') }}" alt="Check">
                            <span class="text-[12px] xl:text-[13px] ml-2">{{ __('landing_page.plans.benefits.team_management') }}</span>
                        </div>
                        <div class="flex items-center mt-3">
                            <img src="{{ asset('images/web/check.svg') }}" alt="Check">
                            <span class="text-[12px] xl:text-[13px] ml-2">{{ __('landing_page.plans.benefits.customer_support') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-0 md:pt-[40px] xl:pt-[80px] pb-12 md:pb-[120px] xl:pb-[190px] px-4 relative">
        <div class="absolute left-0 bottom-0 md:-bottom-10">
            <img class="block w-full h-[300px] md:h-[450px] xl:h-[580px] object-cover" src="{{ asset('images/web/wave3.svg') }}" alt="Wave">
        </div>
        <div class="container mx-auto relative">
            <h2 class="text-[40px] md:text-[48px] xl:text-[56px] leading-[54px] xl:leading-[64px] font-bold text-center">
                {{ __('landing_page.bottom_heading.head_text') }}
            </h2>
            <p class="text-base md:text-lg xl:text-xl text-gray-custom text-center mt-4 xl:mt-6 mx-auto max-w-full w-[600px]">
                {{ __('landing_page.bottom_heading.head_subtext') }}
            </p>
            <div class="flex justify-center mt-8 md:mt-12">
                <a href="{{ route('register') }}" class="bg-cyan rounded-full flex items-center justify-center h-11 md:h-12 xl:h-14 w-[200px]" target="_blank">
                    {{ __('landing_page.buttons.try_it_now') }} 
                    <img class="ml-3" src="{{ asset('images/web/right-arrow.svg') }}" alt="Arrow">
                </a>
            </div>
        </div>
    </div>
@endsection
@section('after-scripts')
    <script>
        function menuToggle() {
            var element = document.getElementById("mobile-menu");
            element.classList.toggle("open");
        }

        $("#see_plans").click(function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $("#plans").offset().top
            }, 1500);
        });
    </script>
@endsection