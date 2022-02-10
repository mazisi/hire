@extends('layouts.app')

@section('content')





<div class="dashboard-container" style="height: 287px;">

	@include('layouts.sidebar')


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar="init" style="height: 287px;"><div class="simplebar-track vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 48px;"></div></div><div class="simplebar-track horizontal" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; left: 0px; width: 25px;"></div></div><div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;"><div class="simplebar-content" style="padding-bottom: 17px; margin-right: -17px;">
		<div class="dashboard-content-inner" style="min-height: 287px;">
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				
                 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Howdy,  {{ Auth::user()->name }}!</h3>
                    <span>We are glad to see you again!</span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Dashboard</li>
					</ul>
				</nav>
			</div>
	
			<!-- Fun Facts Container -->
			<div class="fun-facts-container">
				<div class="fun-fact" data-fun-fact-color="#36bd78">
					<div class="fun-fact-text">
						<span>Task Bids Won</span>
						<h4>22</h4>
					</div>
					<div class="fun-fact-icon" style="background-color: rgba(54, 189, 120, 0.07);"><i class="icon-material-outline-gavel" style="color: rgb(54, 189, 120);"></i></div>
				</div>
				<div class="fun-fact" data-fun-fact-color="#b81b7f">
					<div class="fun-fact-text">
						<span>Jobs Applied</span>
						<h4>4</h4>
					</div>
					<div class="fun-fact-icon" style="background-color: rgba(184, 27, 127, 0.07);"><i class="icon-material-outline-business-center" style="color: rgb(184, 27, 127);"></i></div>
				</div>
				<div class="fun-fact" data-fun-fact-color="#efa80f">
					<div class="fun-fact-text">
						<span>Reviews</span>
						<h4>28</h4>
					</div>
					<div class="fun-fact-icon" style="background-color: rgba(239, 168, 15, 0.07);"><i class="icon-material-outline-rate-review" style="color: rgb(239, 168, 15);"></i></div>
				</div>

				<!-- Last one has to be hidden below 1600px, sorry :( -->
				<div class="fun-fact" data-fun-fact-color="#2a41e6">
					<div class="fun-fact-text">
						<span>This Month Views</span>
						<h4>987</h4>
					</div>
					<div class="fun-fact-icon" style="background-color: rgba(42, 65, 230, 0.07);"><i class="icon-feather-trending-up" style="color: rgb(42, 65, 230);"></i></div>
				</div>
			</div>
			
			

			<!-- Footer -->
			<div class="dashboard-footer-spacer" style="padding-top: 125px;"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2019 <strong>Hireo</strong>. All Rights Reserved.
				</div>
				<ul class="footer-social-links">
					<li>
						<a href="#" data-tippy-placement="top" data-tippy="" data-original-title="Facebook">
							<i class="icon-brand-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#" data-tippy-placement="top" data-tippy="" data-original-title="Twitter">
							<i class="icon-brand-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" data-tippy-placement="top" data-tippy="" data-original-title="Google Plus">
							<i class="icon-brand-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" data-tippy-placement="top" data-tippy="" data-original-title="LinkedIn">
							<i class="icon-brand-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->

		</div>
	</div></div></div>
	<!-- Dashboard Content / End -->

</div>

@endsection
