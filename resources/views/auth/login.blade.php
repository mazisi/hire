@extends('layouts.app')

@section('content')










<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Log In</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Log In</li>
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
					<h3>We're glad to see you again!</h3>
					<span>Don't have an account? <a href="pages-register.html">Sign Up!</a></span>
				</div>
					
				<!-- Form -->
                <form method="POST" action="{{ route('login') }}" class="mb-5">
                    @csrf
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
					

                        <input id="email" type="email" class="input-text with-border @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						
                        <input id="password" type="password" class="input-text with-border @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

                    <div class="input-with-icon-left">
                        
                    <div class="checkbox">
                        <input id="chekcbox2" type="checkbox" name="remember"  {{ old('remember') ? 'checked' : '' }}>
                        <label for="chekcbox2"><span class="checkbox-icon"></span>  {{ __('Remember Me') }}</label>
                       
                    </div>
                    </div>
					
                    @if (Route::has('password.request'))
                    <a class="forgot-password" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" style="width: 504.156px;">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>
            </form>
				
			</div>

		</div>
	</div>
</div>

@endsection
