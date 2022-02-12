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
							<li class="active"><a href="{{ route('home')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li><a href="{{ route('chats')}}"><i class="icon-material-outline-question-answer"></i> Messages <span class="nav-tag">2</span></a></li>
						
						</ul>
						
						<ul data-submenu-title="Organize and Manage">
							<li><a href="#"><i class="icon-material-outline-business-center"></i> Jobs</a>
								<ul>
									<li><a href="/employer/create-job">Post a Job</a></li>
									<li><a href="/employer/my-jobs">My Jobs</a></li>
								</ul>	
							</li>
							<li><a href="#"><i class="icon-material-outline-assignment"></i> Bids</a>
								<ul>
									<li><a href="/tradesman/all-bids">My Bids <span class="nav-tag">2</span></a></li>
									<li><a href="/tradesman/accepted-bids">Accepted Bids <span class="nav-tag">9</span></a></li>

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