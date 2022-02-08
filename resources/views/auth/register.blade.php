@extends('layouts.app')

@section('content')




<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Register</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Register</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>




<div class="container">
	<div class="row">
		<div class="col-xl-5 offset-xl-3">

			<div class="login-register-page">
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3 style="font-size: 26px;">Let's create your account!</h3>
					<span>Already have an account? <a href="{{ route('login')}}">Log In!</a></span>
				</div>

					
				<!-- Form -->
				<form method="POST" action="{{ route('register') }}">
                    @csrf

					<div class="input-with-icon-left">
						<i class="icon-material-outline-account-circle"></i>


                     
                            <input id="name" type="text" class="input-text with-border @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Your Name" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      
					</div>
                    
                    <div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input id="email" type="email" class="input-text with-border @error('email') is-invalid @enderror" name="email" placeholder="Your Email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
                   
                    <div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input id="password" type="password" class="input-text with-border @error('password') is-invalid @enderror" placeholder="Your Password" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>

					<div class="input-with-icon-left" data-tippy-placement="bottom" data-tippy="" data-original-title="Should be at least 8 characters long">
						<i class="icon-material-outline-lock"></i>
                        <input id="password-confirm" type="password" class="input-text with-border" placeholder="Confirm Your Password" name="password_confirmation" required autocomplete="new-password">
					</div>

				
                    	<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit"  style="width: 504.156px;">Register <i class="icon-material-outline-arrow-right-alt"></i></button>
				</form>
				
			
				
			
			</div>

		</div>
	</div>
</div>

</div>
@endsection
