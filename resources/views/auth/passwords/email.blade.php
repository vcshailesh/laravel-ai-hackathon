@extends('backend.layouts.app')
@section('content')
<div class="py-12 md:py-24 xl:py-32 px-4 mt-auto relative">
	<img class="absolute left-0 top-10 block w-full h-[300px] md:h-[480px] xl:h-[605px] object-cover" src="{{ asset('images/web/wave.svg') }}" alt="Wave">
	<div class="container mx-auto relative">
		<div class="flex items-center justify-around">
			<div class="lg:pl-10 pr-10 hidden md:block">
				<img src="{{ asset('images/web/person.png') }}" alt="">
			</div>
					
			<div class="backdrop-blur border-2 sm:border-4 border-cyan p-4 sm:p-6 md:p-8 lg:p-10 xl:p-12 rounded-[10px] w-[400px] md:w-[500px]">
				<h3 class="text-[24px] lg:text-[28px] font-semibold mb-1">{{ __('forgot_password.reset_password') }}</h3>
				
				<form method="POST" id="forgot_password" action="{{ route('password.email') }}">
					@csrf
					{{-- @error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror --}}
					<div class="mt-5">
						<label>{{ __('forgot_password.form.email') }}</label>
						<div class="mt-1.5">
							<input class="text-sm border border-zinc-700 px-5 w-full rounded-[30px] bg-transparent outline-0 h-[46px] form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Enter email address" autofocus>
						</div>
					</div>
					
					<div class="mt-5">
						<button class="text-base md:text-lg font-semibold flex items-center justify-center bg-cyan rounded-full h-11 md:h-12 xl:h-14 w-full" type="submit">{{ __('forgot_password.buttons.send_password_reset_link') }}</button>
					</div>
                    <div class="mt-5">
                        <a href="{{ route('login') }}" class="text-base border border-cyan hover:bg-cyan hover:text-white active:bg-cyan px-8 py-3 rounded-full outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 text-center w-full" type="button">{{ __('forgot_password.buttons.back') }}</a>
                    </div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
@section('after-scripts')
	<script src="{{ asset('js/login.js') }}"></script>
@endsection