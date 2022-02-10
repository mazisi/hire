@extends('layouts.app')

@section('content')





<div class="dashboard-container" style="height: 287px;">

	<!-- Dashboard Sidebar
	================================================== -->
	<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar="init" style="height: 287px;"><div class="simplebar-track vertical" style="visibility: visible; display: none;"><div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 25px;"></div></div><div class="simplebar-track horizontal" style="visibility: visible; display: none;"><div class="simplebar-scrollbar" style="visibility: visible; left: 0px; width: 25px;"></div></div><div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;"><div class="simplebar-content" style="padding-bottom: 17px; margin-right: -17px;">
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Dashboard Navigation</span>
				</a>
				
				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">

						<ul data-submenu-title="Start">
							<li class="active"><a href="dashboard.html"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li><a href="dashboard-messages.html"><i class="icon-material-outline-question-answer"></i> Messages <span class="nav-tag">2</span></a></li>
							<li><a href="dashboard-bookmarks.html"><i class="icon-material-outline-star-border"></i> Bookmarks</a></li>
							<li><a href="dashboard-reviews.html"><i class="icon-material-outline-rate-review"></i> Reviews</a></li>
						</ul>
						
						<ul data-submenu-title="Organize and Manage">
							<li><a href="#"><i class="icon-material-outline-business-center"></i> Jobs</a>
								<ul>
									<li><a href="dashboard-manage-jobs.html">Manage Jobs <span class="nav-tag">3</span></a></li>
									<li><a href="dashboard-manage-candidates.html">Manage Candidates</a></li>
									<li><a href="dashboard-post-a-job.html">Post a Job</a></li>
								</ul>	
							</li>
							<li><a href="#"><i class="icon-material-outline-assignment"></i> Tasks</a>
								<ul>
									<li><a href="dashboard-manage-tasks.html">Manage Tasks <span class="nav-tag">2</span></a></li>
									<li><a href="dashboard-manage-bidders.html">Manage Bidders</a></li>
									<li><a href="dashboard-my-active-bids.html">My Active Bids <span class="nav-tag">4</span></a></li>
									<li><a href="dashboard-post-a-task.html">Post a Task</a></li>
								</ul>	
							</li>
						</ul>

						<ul data-submenu-title="Account">
							<li><a href="dashboard-settings.html"><i class="icon-material-outline-settings"></i> Settings</a></li>
							<li><a href="index-logged-out.html"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>
						
					</div>
				</div>
				<!-- Navigation / End -->

			</div>
		</div></div></div>
	</div>
	<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar="init" style="height: 116px;"><div class="simplebar-track vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 25px;"></div></div><div class="simplebar-track horizontal" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; left: 0px; width: 25px;"></div></div><div class="simplebar-scroll-content" style="padding-right: 20px; margin-bottom: -20px;"><div class="simplebar-content" style="padding-bottom: 20px;">
		<div class="dashboard-content-inner" style="min-height: 116px;">
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Manage Jobs</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Manage Jobs</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-business-center"></i> My Job Listings</h3>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">
								<li>
									<!-- Job Listing -->
									<div class="job-listing">

										<!-- Job Listing Details -->
										<div class="job-listing-details">

											<!-- Logo -->
<!-- 											<a href="#" class="job-listing-company-logo">
												<img src="images/company-logo-05.png" alt="">
											</a> -->

											<!-- Details -->
											<div class="job-listing-description">
												<h3 class="job-listing-title"><a href="#">Frontend React Developer</a> <span class="dashboard-status-button green">Pending Approval</span></h3>

												<!-- Job Listing Footer -->
												<div class="job-listing-footer">
													<ul>
														<li><i class="icon-material-outline-date-range"></i> Posted on 10 July, 2019</li>
														<li><i class="icon-material-outline-date-range"></i> Expiring on 10 August, 2019</li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<!-- Buttons -->
									<div class="buttons-to-right always-visible">
										<a href="dashboard-manage-candidates.html" class="button ripple-effect"><i class="icon-material-outline-supervisor-account"></i> Manage Candidates <span class="button-info">0</span></a>
										<a href="#" class="button gray ripple-effect ico" data-tippy-placement="top" data-tippy="" data-original-title="Edit"><i class="icon-feather-edit"></i></a>
										<a href="#" class="button gray ripple-effect ico" data-tippy-placement="top" data-tippy="" data-original-title="Remove"><i class="icon-feather-trash-2"></i></a>
									</div>
								</li>

								<li>
									<!-- Job Listing -->
									<div class="job-listing">

										<!-- Job Listing Details -->
										<div class="job-listing-details">

											<!-- Details -->
											<div class="job-listing-description">
												<h3 class="job-listing-title"><a href="#">Full Stack PHP Developer</a> <span class="dashboard-status-button yellow">Expiring</span></h3>

												<!-- Job Listing Footer -->
												<div class="job-listing-footer">
													<ul>
														<li><i class="icon-material-outline-date-range"></i> Posted on 28 June, 2019</li>
														<li><i class="icon-material-outline-date-range"></i> Expiring on 28 July, 2019</li>
													</ul>
												</div>
											</div>

										</div>
									</div>

									<!-- Buttons -->
									<div class="buttons-to-right always-visible">
										<a href="dashboard-manage-candidates.html" class="button ripple-effect"><i class="icon-material-outline-supervisor-account"></i> Manage Candidates <span class="button-info">3</span></a>
										<a href="#" class="button gray ripple-effect ico" data-tippy-placement="top" data-tippy="" data-original-title="Edit"><i class="icon-feather-edit"></i></a>
										<a href="#" class="button gray ripple-effect ico" data-tippy-placement="top" data-tippy="" data-original-title="Remove"><i class="icon-feather-trash-2"></i></a>
									</div>
								</li>

								<li>
									<!-- Job Listing -->
									<div class="job-listing">

										<!-- Job Listing Details -->
										<div class="job-listing-details">

											<!-- Details -->
											<div class="job-listing-description">
												<h3 class="job-listing-title"><a href="#">Node.js Developer</a> <span class="dashboard-status-button red">Expired</span></h3>

												<!-- Job Listing Footer -->
												<div class="job-listing-footer">
													<ul>
														<li><i class="icon-material-outline-date-range"></i> Posted on 16 May, 2019</li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<!-- Buttons -->
									<div class="buttons-to-right always-visible">
										<a href="dashboard-manage-candidates.html" class="button ripple-effect"><i class="icon-material-outline-supervisor-account"></i> Manage Candidates <span class="button-info">7</span></a>
										<a href="#" class="button dark ripple-effect"><i class="icon-feather-rotate-ccw"></i> Refresh</a>
										<a href="#" class="button gray ripple-effect ico" data-tippy-placement="top" data-tippy="" data-original-title="Edit"><i class="icon-feather-edit"></i></a>
										<a href="#" class="button gray ripple-effect ico" data-tippy-placement="top" data-tippy="" data-original-title="Remove"><i class="icon-feather-trash-2"></i></a>
									</div>
								</li>

							</ul>
						</div>
					</div>
				</div>

			</div>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer" style="padding-top: 124px;"></div>
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