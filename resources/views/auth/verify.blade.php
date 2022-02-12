@extends('layouts.app')

@section('content')





<div class="dashboard-container" style="height: 287px;">

	


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar="init" style="height: 287px;"><div class="simplebar-track vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 48px;"></div></div><div class="simplebar-track horizontal" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; left: 0px; width: 25px;"></div></div><div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;"><div class="simplebar-content" style="padding-bottom: 17px; margin-right: -17px;">
		<div class="dashboard-content-inner" style="min-height: 287px;">
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">

               <div class="row">
                   <div class="col-xl-3"></div>
                <div class="col-xl-6">
                    <div class="submit-field">
                  <div class="with-border bg-white p-3">
                    <h3>{{ __('Verify Your Email Address') }}</h3>
				
                    @if (session('status'))
                           <div class="alert alert-success" role="alert">
                               {{ session('status') }}
                           </div>
                       @endif
   
                       @if (session('resent'))
                       <div class="alert alert-success" role="alert">
                           {{ __('A fresh verification link has been sent to your email address.') }}
                       </div>
                   @endif
   
                   {{ __('Before proceeding, please check your email for a verification link.') }}<br><br>
                   {{ __('If you did not receive the email') }},
                   <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                       @csrf
                       <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                   </form>

                  </div>
                    </div>
                </div>
               </div>

                
            

				
			</div>
	
		
		
			

		</div>
	</div></div></div>
	

</div>

@endsection


