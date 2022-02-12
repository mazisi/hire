@extends('layouts.app')

@section('content')


<div class="full-page-container" style="height: 302px;">

	<div class="full-page-sidebar">
		<div class="full-page-sidebar-inner" data-simplebar="init" style="height: 302px;"><div class="simplebar-track vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 86px;"></div></div><div class="simplebar-track horizontal" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; left: 0px; width: 25px;"></div></div><div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;"><div class="simplebar-content" style="padding-bottom: 17px; margin-right: -17px;">
			<div class="sidebar-container">
				
				<!-- Location -->
				<div class="sidebar-widget">
					<h3>Location</h3>
					<div class="input-with-icon">
						<div id="autocomplete-container">
							<input id="autocomplete-input" type="text" placeholder="Location">
						</div>
						<i class="icon-material-outline-location-on"></i>
					</div>
				</div>

				<!-- Category -->
				<div class="sidebar-widget">
					<h3>Category</h3>
					<div class="btn-group bootstrap-select show-tick default"><button type="button" class="btn dropdown-toggle bs-placeholder btn-default" data-toggle="dropdown" role="button" title="All Categories"><span class="filter-option pull-left">All Categories</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Admin Support</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Customer Service</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Data Analytics</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Design &amp; Creative</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Legal</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Software Developing</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">IT &amp; Networking</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Writing</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="8"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Translation</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="9"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Sales &amp; Marketing</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker default" multiple="" data-selected-text-format="count" data-size="7" title="All Categories" tabindex="-98">
						<option>Admin Support</option>
						<option>Customer Service</option>
						<option>Data Analytics</option>
						<option>Design &amp; Creative</option>
						<option>Legal</option>
						<option>Software Developing</option>
						<option>IT &amp; Networking</option>
						<option>Writing</option>
						<option>Translation</option>
						<option>Sales &amp; Marketing</option>
					</select></div>
				</div>

				<!-- Keywords -->
				<div class="sidebar-widget">
					<h3>Keywords</h3>
					<div class="keywords-container">
						<div class="keyword-input-container">
							<input type="text" class="keyword-input" placeholder="e.g. task title">
							<button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
						</div>
						<div class="keywords-list" style="height: auto;"><!-- keywords go here --></div>
						<div class="clearfix"></div>
					</div>
				</div>


				<!-- Hourly Rate -->
				<div class="sidebar-widget">
					<h3>Hourly Rate</h3>
					<div class="margin-top-55"></div>

					<!-- Range Slider -->
					<div class="slider slider-horizontal" id=""><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 0%;"></div><div class="slider-selection" style="left: 0%; width: 100%;"></div><div class="slider-track-high" style="right: 0px; width: 0%;"></div></div><div class="tooltip tooltip-main top" role="presentation" style="left: 50%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">$10 - $250</div></div><div class="tooltip tooltip-min top" role="presentation" style="left: 0%; display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner">$NaN - $NaN</div></div><div class="tooltip tooltip-max top" role="presentation" style="left: 100%; display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner">$NaN - $NaN</div></div><div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="10" aria-valuemax="250" aria-valuenow="10" aria-valuetext="$NaN - $NaN" tabindex="0" style="left: 0%;"></div><div class="slider-handle max-slider-handle round" role="slider" aria-valuemin="10" aria-valuemax="250" aria-valuenow="250" aria-valuetext="$NaN - $NaN" tabindex="0" style="left: 100%;"></div></div><input class="range-slider" type="text" value="10,250" data-slider-currency="$" data-slider-min="10" data-slider-max="250" data-slider-step="5" data-slider-value="[10,250]" data-value="10,250" style="display: none;">
				</div>

				<!-- Tags -->
				<div class="sidebar-widget">
					<h3>Skills</h3>

					<div class="tags-container">
						<div class="tag">
							<input type="checkbox" id="tag1">
							<label for="tag1">front-end dev</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag2">
							<label for="tag2">angular</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag3">
							<label for="tag3">react</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag4">
							<label for="tag4">vue js</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag5">
							<label for="tag5">web apps</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag6">
							<label for="tag6">design</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag7">
							<label for="tag7">wordpress</label>
						</div>
					</div>
					<div class="clearfix"></div>

					<!-- More Skills -->
					<div class="keywords-container margin-top-20">
						<div class="keyword-input-container">
							<input type="text" class="keyword-input" placeholder="add more skills">
							<button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
						</div>
						<div class="keywords-list" style="height: auto;"><!-- keywords go here --></div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>

				<div class="margin-bottom-40"></div>

			</div>
			<!-- Sidebar Container / End -->

			<!-- Search Button -->
			<div class="sidebar-search-button-container">
				<button class="button ripple-effect">Search</button>
			</div>
			<!-- Search Button / End-->

		</div></div></div>
	</div>
	<!-- Full Page Sidebar / End -->
	
	<!-- Full Page Content -->
	<div class="full-page-content-container" data-simplebar="init" style="height: 302px;"><div class="simplebar-track vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 63px;"></div></div><div class="simplebar-track horizontal" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; left: 0px; width: 25px;"></div></div><div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;"><div class="simplebar-content" style="padding-bottom: 17px; margin-right: -17px;">
		<div class="full-page-content-inner">

			<h3 class="page-title">Search Results</h3>

			<div class="notify-box margin-top-15">
				<div class="switch-container">
					<label class="switch"><input type="checkbox"><span class="switch-button"></span><span class="switch-text">Turn on email alerts for this search</span></label>
				</div>

				<div class="sort-by">
					<span>Sort by:</span>
					<div class="btn-group bootstrap-select hide-tick"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="Relevance" aria-expanded="false"><span class="filter-option pull-left">Relevance</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox" style="max-height: 162px; overflow: hidden; min-height: 121px;"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false" style="max-height: 142px; overflow-y: auto; min-height: 101px;"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Relevance</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Newest</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Oldest</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Random</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker hide-tick" tabindex="-98">
						<option>Relevance</option>
						<option>Newest</option>
						<option>Oldest</option>
						<option>Random</option>
					</select></div>
				</div>
			</div>

			<!-- Freelancers List Container -->
			<div class="freelancers-container freelancers-grid-layout margin-top-35">
				
				<!--Freelancer -->
				<div class="freelancer">

					<!-- Overview -->
					<div class="freelancer-overview">
						<div class="freelancer-overview-inner">
							
							<!-- Bookmark Icon -->
							<span class="bookmark-icon"></span>
							
							<!-- Avatar -->
							<div class="freelancer-avatar">
								<div class="verified-badge"></div>
								<a href="single-freelancer-profile.html"><img src="images/user-avatar-big-01.jpg" alt=""></a>
							</div>

							<!-- Name -->
							<div class="freelancer-name">
								<h4><a href="single-freelancer-profile.html">Tom Smith <img class="flag" src="images/flags/gb.svg" alt="" data-tippy-placement="top" data-tippy="" data-original-title="United Kingdom"></a></h4>
								<span>UI/UX Designer</span>
							</div>

							<!-- Rating -->
							<div class="freelancer-rating">
								<div class="star-rating" data-rating="4.9"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></div>
							</div>
						</div>
					</div>
					
					<!-- Details -->
					<div class="freelancer-details">
						<div class="freelancer-details-list">
							<ul>
								<li>Location <strong><i class="icon-material-outline-location-on"></i> London</strong></li>
								<li>Rate <strong>$60 / hr</strong></li>
								<li>Job Success <strong>95%</strong></li>
							</ul>
						</div>
						<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect" style="width: 333.328px;">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
					</div>
				</div>
				<!-- Freelancer / End -->

				<!--Freelancer -->
				<div class="freelancer">

					<!-- Overview -->
					<div class="freelancer-overview">
						<div class="freelancer-overview-inner">
							
							<!-- Bookmark Icon -->
							<span class="bookmark-icon"></span>
							
							<!-- Avatar -->
							<div class="freelancer-avatar">
								<div class="verified-badge"></div>
								<a href="single-freelancer-profile.html"><img src="images/user-avatar-big-02.jpg" alt=""></a>
							</div>

							<!-- Name -->
							<div class="freelancer-name">
								<h4><a href="#">David Peterson <img class="flag" src="images/flags/de.svg" alt="" data-tippy-placement="top" data-tippy="" data-original-title="Germany"></a></h4>
								<span>iOS Expert + Node Dev</span>
							</div>

							<!-- Rating -->
							<div class="freelancer-rating">
								<div class="star-rating" data-rating="4.2"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star empty"></span></div>
							</div>
						</div>
					</div>
					
					<!-- Details -->
					<div class="freelancer-details">
						<div class="freelancer-details-list">
							<ul>
								<li>Location <strong><i class="icon-material-outline-location-on"></i> Berlin</strong></li>
								<li>Rate <strong>$40 / hr</strong></li>
								<li>Job Success <strong>88%</strong></li>
							</ul>
						</div>
						<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect" style="width: 333.328px;">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
					</div>
				</div>
				<!-- Freelancer / End -->

				<!--Freelancer -->
				<div class="freelancer">

					<!-- Overview -->
					<div class="freelancer-overview">
						<div class="freelancer-overview-inner">
							<!-- Bookmark Icon -->
							<span class="bookmark-icon"></span>
							
							<!-- Avatar -->
							<div class="freelancer-avatar">
								<a href="single-freelancer-profile.html"><img src="images/user-avatar-placeholder.png" alt=""></a>
							</div>

							<!-- Name -->
							<div class="freelancer-name">
								<h4><a href="#">Marcin Kowalski <img class="flag" src="images/flags/pl.svg" alt="" data-tippy-placement="top" data-tippy="" data-original-title="Poland"></a></h4>
								<span>Front-End Developer</span>
							</div>

							<!-- Rating -->
							<span class="company-not-rated margin-bottom-5">Minimum of 3 votes required</span>
						</div>
					</div>
					
					<!-- Details -->
					<div class="freelancer-details">
						<div class="freelancer-details-list">
							<ul>
								<li>Location <strong><i class="icon-material-outline-location-on"></i> Warsaw</strong></li>
								<li>Rate <strong>$50 / hr</strong></li>
								<li>Job Success <strong>100%</strong></li>
							</ul>
						</div>
						<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect" style="width: 333.328px;">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
					</div>
				</div>
				<!-- Freelancer / End -->

				<!--Freelancer -->
				<div class="freelancer">

					<!-- Overview -->
					<div class="freelancer-overview">
							<div class="freelancer-overview-inner">
							<!-- Bookmark Icon -->
							<span class="bookmark-icon"></span>
							
							<!-- Avatar -->
							<div class="freelancer-avatar">
								<div class="verified-badge"></div>
								<a href="single-freelancer-profile.html"><img src="images/user-avatar-big-03.jpg" alt=""></a>
							</div>

							<!-- Name -->
							<div class="freelancer-name">
								<h4><a href="#">Sindy Forest <img class="flag" src="images/flags/au.svg" alt="" data-tippy-placement="top" data-tippy="" data-original-title="Australia"></a></h4>
								<span>Magento Certified Developer</span>
							</div>

							<!-- Rating -->
							<div class="freelancer-rating">
								<div class="star-rating" data-rating="5.0"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></div>
							</div>
						</div>
					</div>
					
					<!-- Details -->
					<div class="freelancer-details">
						<div class="freelancer-details-list">
							<ul>
								<li>Location <strong><i class="icon-material-outline-location-on"></i> Brisbane</strong></li>
								<li>Rate <strong>$70 / hr</strong></li>
								<li>Job Success <strong>100%</strong></li>
							</ul>
						</div>
						<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect" style="width: 333.328px;">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
					</div>
				</div>
				<!-- Freelancer / End -->
				
				<!--Freelancer -->
				<div class="freelancer">

					<!-- Overview -->
					<div class="freelancer-overview">
							<div class="freelancer-overview-inner">
							<!-- Bookmark Icon -->
							<span class="bookmark-icon"></span>
							
							<!-- Avatar -->
							<div class="freelancer-avatar">
								<a href="single-freelancer-profile.html"><img src="images/user-avatar-placeholder.png" alt=""></a>
							</div>

							<!-- Name -->
							<div class="freelancer-name">
								<h4><a href="#">Sebastiano Piccio <img class="flag" src="images/flags/it.svg" alt="" data-tippy-placement="top" data-tippy="" data-original-title="Italy"></a></h4>
								<span>Laravel Dev</span>
							</div>

							<!-- Rating -->
							<div class="freelancer-rating">
								<div class="star-rating" data-rating="4.5"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star half"></span></div>
							</div>
						</div>
					</div>
					
					<!-- Details -->
					<div class="freelancer-details">
						<div class="freelancer-details-list">
							<ul>
								<li>Location <strong><i class="icon-material-outline-location-on"></i> Milan</strong></li>
								<li>Rate <strong>$80 / hr</strong></li>
								<li>Job Success <strong>89%</strong></li>
							</ul>
						</div>
						<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect" style="width: 333.328px;">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
					</div>
				</div>
				<!-- Freelancer / End -->
							
				<!--Freelancer -->
				<div class="freelancer">

					<!-- Overview -->
					<div class="freelancer-overview">
							<div class="freelancer-overview-inner">
							<!-- Bookmark Icon -->
							<span class="bookmark-icon"></span>
							
							<!-- Avatar -->
							<div class="freelancer-avatar">
								<a href="single-freelancer-profile.html"><img src="images/user-avatar-placeholder.png" alt=""></a>
							</div>

							<!-- Name -->
							<div class="freelancer-name">
								<h4><a href="#">Gabriel Lagueux <img class="flag" src="images/flags/fr.svg" alt="" data-tippy-placement="top" data-tippy="" data-original-title="France"></a></h4>
								<span>WordPress Expert</span>
							</div>

							<!-- Rating -->
							<div class="freelancer-rating">
								<div class="star-rating" data-rating="5.0"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></div>
							</div>
						</div>
					</div>
					
					<!-- Details -->
					<div class="freelancer-details">
						<div class="freelancer-details-list">
							<ul>
								<li>Location <strong><i class="icon-material-outline-location-on"></i> Paris</strong></li>
								<li>Rate <strong>$50 / hr</strong></li>
								<li>Job Success <strong>100%</strong></li>
							</ul>
						</div>
						<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect" style="width: 333.328px;">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
					</div>
				</div>
				<!-- Freelancer / End -->
	
			</div>
			<!-- Freelancers Container / End -->

			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="pagination-container margin-top-20 margin-bottom-20">
				<nav class="pagination">
					<ul>
						<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
						<li><a href="#" class="ripple-effect">1</a></li>
						<li><a href="#" class="ripple-effect current-page">2</a></li>
						<li><a href="#" class="ripple-effect">3</a></li>
						<li><a href="#" class="ripple-effect">4</a></li>
						<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
					</ul>
				</nav>
			</div>
			<div class="clearfix"></div>
			<!-- Pagination / End -->

			<!-- Footer -->
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
	<!-- Full Page Content / End -->

</div>
@endsection
