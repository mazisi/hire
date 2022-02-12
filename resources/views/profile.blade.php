@extends('layouts.app')

@section('content')





<div class="dashboard-container" style="height: 287px;">

@include('layouts.sidebar')


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar="init" style="height: 521px;"><div class="simplebar-track vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 64px;"></div></div><div class="simplebar-track horizontal" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; left: 0px; width: 25px;"></div></div><div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;"><div class="simplebar-content" style="padding-bottom: 17px; margin-right: -17px;">
		<div class="dashboard-content-inner" style="min-height: 521px;">
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Settings</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Settings</li>
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
							<h3><i class="icon-material-outline-account-circle"></i> My Account</h3>
						</div>

						<div class="content with-padding padding-bottom-0">

							<div class="row">

								<div class="col-auto">
									<div class="avatar-wrapper" data-tippy-placement="bottom" data-tippy="" data-original-title="Change Avatar">
										<img class="profile-pic" src="images/user-avatar-placeholder.png" alt="">
										<div class="upload-button"></div>
										<input class="file-upload" type="file" accept="image/*">
									</div>
								</div>

								<div class="col">
									<div class="row">

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>First Name</h5>
												<input type="text" class="with-border" value="{{$user->first_name}}" readonly>
											</div>
										</div>

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Last Name</h5>
												<input type="text" class="with-border" value="{{$user->last_name}}" readonly>
											</div>
										</div>

										<div class="col-xl-6">
											<!-- Account Type -->
											<div class="submit-field">
												<h5>Address</h5>
												<div class="account-type">
													
													<textarea name="address" cols="30" rows="10">{{$user->address}}</textarea>
													
												</div>
											</div>
										</div>

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Email</h5>
												<input type="text" class="with-border" value="{{$user->email}}" readonly>
											</div>
										</div>

									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-face"></i> My Profile</h3>
						</div>

						<div class="content">
							<ul class="fields-ul">
							<li>
								<div class="row">
									<div class="col-xl-4">
										<div class="submit-field">
											<div class="bidding-widget">
												<!-- Headline -->
												<span class="bidding-detail">Set your <strong>minimal hourly rate</strong></span>

												<!-- Slider -->
												<div class="bidding-value margin-bottom-10">$<span id="biddingVal">35</span></div>
												<div class="slider slider-horizontal" id=""><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 0%;"></div><div class="slider-selection" style="left: 0%; width: 20.6897%;"></div><div class="slider-track-high" style="right: 0px; width: 79.3103%;"></div></div><div class="tooltip tooltip-main top hide" role="presentation" style="left: 20.6897%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">35</div></div><div class="tooltip tooltip-min top hide" role="presentation"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="tooltip tooltip-max top hide" role="presentation"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="slider-handle min-slider-handle custom" role="slider" aria-valuemin="5" aria-valuemax="150" aria-valuenow="35" tabindex="0" style="left: 20.6897%;"></div><div class="slider-handle max-slider-handle custom hide" role="slider" aria-valuemin="5" aria-valuemax="150" aria-valuenow="5" tabindex="0" style="left: 0%;"></div></div><input class="bidding-slider" type="text" value="35" data-slider-handle="custom" data-slider-currency="$" data-slider-min="5" data-slider-max="150" data-slider-value="35" data-slider-step="1" data-slider-tooltip="hide" style="display: none;" data-value="35">
											</div>
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Skills <i class="help-icon" data-tippy-placement="right" data-tippy="" data-original-title="Add up to 10 skills"></i></h5>

											<!-- Skills List -->
											<div class="keywords-container">
												<div class="keyword-input-container">
													<input type="text" class="keyword-input with-border" placeholder="e.g. Angular, Laravel">
													<button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
												</div>
												<div class="keywords-list" style="height: auto;">
													<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Angular</span></span>
													<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Vue JS</span></span>
													<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">iOS</span></span>
													<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Android</span></span>
													<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Laravel</span></span>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Attachments</h5>
											
											<!-- Attachments -->
											<div class="attachments-container margin-top-0 margin-bottom-0">
												<div class="attachment-box ripple-effect">
													<span>Cover Letter</span>
													<i>PDF</i>
													<button class="remove-attachment" data-tippy-placement="top" data-tippy="" data-original-title="Remove"></button>
												</div>
												<div class="attachment-box ripple-effect">
													<span>Contract</span>
													<i>DOCX</i>
													<button class="remove-attachment" data-tippy-placement="top" data-tippy="" data-original-title="Remove"></button>
												</div>
											</div>
											<div class="clearfix"></div>
											
											<!-- Upload Button -->
											<div class="uploadButton margin-top-0">
												<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple="">
												<label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
												<span class="uploadButton-file-name">Maximum file size: 10 MB</span>
											</div>

										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-xl-6">
										<div class="submit-field">
											<h5>Tagline</h5>
											<input type="text" class="with-border" value="iOS Expert + Node Dev">
										</div>
									</div>

									<div class="col-xl-6">
										<div class="submit-field">
											<h5>Province</h5>
											<div class="btn-group bootstrap-select with-border"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="United States"><span class="filter-option pull-left">United States</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Argentina</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Armenia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Aruba</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Australia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Austria</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Azerbaijan</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bahamas</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="8"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bahrain</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="9"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bangladesh</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="10"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Barbados</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="11"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Belarus</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="12"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Belgium</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="13"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Belize</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="14"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Benin</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="15"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bermuda</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="16"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bhutan</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="17"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bulgaria</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="18"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Burkina Faso</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="19"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Burundi</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="20"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Cambodia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="21"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Cameroon</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="22"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Canada</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="23"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Cape Verde</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="24"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Cayman Islands</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="25"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Colombia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="26"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Comoros</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="27"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Congo</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="28"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Cook Islands</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="29"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Costa Rica</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="30"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Côte d'Ivoire</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="31"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Croatia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="32"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Cuba</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="33"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Curaçao</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="34"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Cyprus</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="35"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Czech Republic</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="36"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Denmark</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="37"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Djibouti</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="38"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Dominica</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="39"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Dominican Republic</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="40"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Ecuador</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="41"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Egypt</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="42"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Guadeloupe</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="43"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Guam</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="44"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Guatemala</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="45"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Guernsey</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="46"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Guinea</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="47"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Guinea-Bissau</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="48"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Guyana</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="49"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Haiti</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="50"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Honduras</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="51"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Hong Kong</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="52"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Hungary</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="53"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Iceland</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="54"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">India</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="55"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Indonesia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="56"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Norway</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="57"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Oman</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="58"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Pakistan</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="59"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Palau</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="60"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Panama</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="61"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Papua New Guinea</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="62"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Paraguay</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="63"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Peru</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="64"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Philippines</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="65"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Pitcairn</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="66"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Poland</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="67"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Portugal</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="68"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Puerto Rico</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="69"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Qatar</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="70"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Réunion</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="71"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Romania</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="72"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Russian Federation</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="73"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Rwanda</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="74"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Swaziland</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="75"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Sweden</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="76"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Switzerland</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="77"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Turkey</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="78"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Turkmenistan</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="79"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Tuvalu</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="80"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Uganda</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="81"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Ukraine</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="82"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">United Kingdom</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="83" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">United States</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="84"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Uruguay</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="85"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Uzbekistan</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="86"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Yemen</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="87"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Zambia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="88"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Zimbabwe</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker with-border" data-size="7" title="Select Job Type" data-live-search="true" tabindex="-98"><option class="bs-title-option" value="">Select Job Type</option>
												<option value="AR">Argentina</option>
												<option value="AM">Armenia</option>
												<option value="AW">Aruba</option>
												<option value="AU">Australia</option>
												<option value="AT">Austria</option>
												<option value="AZ">Azerbaijan</option>
												<option value="BS">Bahamas</option>
												<option value="BH">Bahrain</option>
												<option value="BD">Bangladesh</option>
												<option value="BB">Barbados</option>
												<option value="BY">Belarus</option>
												<option value="BE">Belgium</option>
												<option value="BZ">Belize</option>
												<option value="BJ">Benin</option>
												<option value="BM">Bermuda</option>
												<option value="BT">Bhutan</option>
												<option value="BG">Bulgaria</option>
												<option value="BF">Burkina Faso</option>
												<option value="BI">Burundi</option>
												<option value="KH">Cambodia</option>
												<option value="CM">Cameroon</option>
												<option value="CA">Canada</option>
												<option value="CV">Cape Verde</option>
												<option value="KY">Cayman Islands</option>
												<option value="CO">Colombia</option>
												<option value="KM">Comoros</option>
												<option value="CG">Congo</option>
												<option value="CK">Cook Islands</option>
												<option value="CR">Costa Rica</option>
												<option value="CI">Côte d'Ivoire</option>
												<option value="HR">Croatia</option>
												<option value="CU">Cuba</option>
												<option value="CW">Curaçao</option>
												<option value="CY">Cyprus</option>
												<option value="CZ">Czech Republic</option>
												<option value="DK">Denmark</option>
												<option value="DJ">Djibouti</option>
												<option value="DM">Dominica</option>
												<option value="DO">Dominican Republic</option>
												<option value="EC">Ecuador</option>
												<option value="EG">Egypt</option>
												<option value="GP">Guadeloupe</option>
												<option value="GU">Guam</option>
												<option value="GT">Guatemala</option>
												<option value="GG">Guernsey</option>
												<option value="GN">Guinea</option>
												<option value="GW">Guinea-Bissau</option>
												<option value="GY">Guyana</option>
												<option value="HT">Haiti</option>
												<option value="HN">Honduras</option>
												<option value="HK">Hong Kong</option>
												<option value="HU">Hungary</option>
												<option value="IS">Iceland</option>
												<option value="IN">India</option>
												<option value="ID">Indonesia</option>
												<option value="NO">Norway</option>
												<option value="OM">Oman</option>
												<option value="PK">Pakistan</option>
												<option value="PW">Palau</option>
												<option value="PA">Panama</option>
												<option value="PG">Papua New Guinea</option>
												<option value="PY">Paraguay</option>
												<option value="PE">Peru</option>
												<option value="PH">Philippines</option>
												<option value="PN">Pitcairn</option>
												<option value="PL">Poland</option>
												<option value="PT">Portugal</option>
												<option value="PR">Puerto Rico</option>
												<option value="QA">Qatar</option>
												<option value="RE">Réunion</option>
												<option value="RO">Romania</option>
												<option value="RU">Russian Federation</option>
												<option value="RW">Rwanda</option>
												<option value="SZ">Swaziland</option>
												<option value="SE">Sweden</option>
												<option value="CH">Switzerland</option>
												<option value="TR">Turkey</option>
												<option value="TM">Turkmenistan</option>
												<option value="TV">Tuvalu</option>
												<option value="UG">Uganda</option>
												<option value="UA">Ukraine</option>
												<option value="GB">United Kingdom</option>
												<option value="US" selected="">United States</option>
												<option value="UY">Uruguay</option>
												<option value="UZ">Uzbekistan</option>
												<option value="YE">Yemen</option>
												<option value="ZM">Zambia</option>
												<option value="ZW">Zimbabwe</option>
											</select></div>
										</div>
									</div>

									<div class="col-xl-12">
										<div class="submit-field">
											<h5>Introduce Yourself</h5>
											<textarea cols="30" rows="5" class="with-border">
												About Me
											</textarea>
										</div>
									</div>

								</div>
							</li>
						</ul>
						</div>
					</div>
				</div>

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div id="test1" class="dashboard-box">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-lock"></i> Password &amp; Security</h3>
						</div>

						<div class="content with-padding">
							<div class="row">
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Current Password</h5>
										<input type="password" class="with-border">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>New Password</h5>
										<input type="password" class="with-border">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Repeat New Password</h5>
										<input type="password" class="with-border">
									</div>
								</div>

								<div class="col-xl-12">
									<div class="checkbox">
										<input type="checkbox" id="two-step" checked="">
										<label for="two-step"><span class="checkbox-icon"></span> Enable Two-Step Verification via Email</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Button -->
				<div class="col-xl-12">
					<a href="#" class="button ripple-effect big margin-top-30">Save Changes</a>
				</div>

				<div class="row">

					<!-- Dashboard Box -->
					<div class="col-xl-6">
						<div class="dashboard-box margin-top-0">
	
							<!-- Headline -->
							<div class="headline">
								<h3><i class="icon-material-outline-business"></i> Rate Employers</h3>
							</div>
	
							<div class="content">
								<ul class="dashboard-box-list">
									
									<li>
										<div class="boxed-list-item">
											<!-- Content -->
											<div class="item-content">
												<h4>Fix Python Selenium Code</h4>
												<div class="item-details margin-top-10">
													<div class="star-rating" data-rating="5.0"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></div>
													<div class="detail-item"><i class="icon-material-outline-date-range"></i> May 2019</div>
												</div>
												<div class="item-description">
													<p>Great clarity in specification and communication. I got payment really fast. Really recommend this employer for his professionalism. I will work for him again with pleasure.</p>
												</div>
											</div>
										</div>
										<a href="#small-dialog-1" class="popup-with-zoom-anim button gray ripple-effect margin-top-5 margin-bottom-10"><i class="icon-feather-edit"></i> Edit Review</a>
									</li>
									
	
								</ul>
							</div>
						</div>
	
					
	
					</div>
	
					<!-- Dashboard Box -->
				
	
	
				</div>
			</div>
			<!-- Row / End -->
		
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
	<!-- Dashboard Content / End -->

</div>

@endsection
