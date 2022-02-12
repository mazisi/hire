@extends('layouts.app')

@section('content')





<div class="dashboard-container" style="height: 287px;">

		<!-- Dashboard Sidebar
	================================================== -->
	@include('layouts.sidebar')
	<!-- Dashboard Sidebar / End -->


	<div class="dashboard-content-container" data-simplebar="init" style="height: 302px;">
		<div class="simplebar-track vertical" style="visibility: visible;">
			<div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 86px;"></div></div>
			<div class="simplebar-track horizontal" style="visibility: visible;">
				<div class="simplebar-scrollbar" style="visibility: visible; left: 0px; width: 25px;"></div></div>
				<div class="simplebar-scroll-content" style="padding-right: 20px; margin-bottom: -20px;">
					<div class="simplebar-content" style="padding-bottom: 20px;">
		<div class="dashboard-content-inner" style="min-height: 302px;">
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Post a Job</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Post a Job</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
		@livewire('jobs.create-job')
			<!-- Row / End -->

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

</div>

@endsection
