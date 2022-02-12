<div class="container">
    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <div class="sidebar-container">
                
                <!-- Location -->
                <div class="sidebar-widget">
                    <h3>Location</h3>
                    <div class="input-with-icon">
                        <div id="autocomplete-container">
                            <input wire:model='search_by_location' id="autocomplete-input" type="text" placeholder="Location">
                        </div>
                        <i class="icon-material-outline-location-on"></i>
                    </div>
                </div>

                
                <!-- Keywords -->
                <div class="sidebar-widget">
                    <h3>Keywords</h3>
                    <div class="keywords-container">
                        <div class="keyword-input-container">
                            <input wire:model.debounce.2000ms="search_by_title" type="text" class="keyword-input" placeholder="e.g. job title">
                            <button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
                        </div>
                        <div class="keywords-list" style="height: auto;"><!-- keywords go here --></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                
                <!-- Category -->
                <div class="sidebar-widget">
                    <h3>Category</h3>
                    <div class="btn-group bootstrap-select show-tick default">
                        <div class="input-group mb-3">
                            <select wire:model="search_by_category" class="form-select" id="inputGroupSelect01">
                              <option  selected>Latest</option>
                              @foreach ($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                              @endforeach
                            </select>
                          </div>
                    </div>
                </div>
                
                <!-- Job Types -->
                <div class="sidebar-widget">
                    <h3>Job Type</h3>

                    <div class="switches-list">
                        <div class="switch-container">
                            <label class="switch"><input type="checkbox"><span class="switch-button"></span> Freelance</label>
                        </div>

                        <div class="switch-container">
                            <label class="switch"><input type="checkbox"><span class="switch-button"></span> Full Time</label>
                        </div>

                        <div class="switch-container">
                            <label class="switch"><input type="checkbox"><span class="switch-button"></span> Part Time</label>
                        </div>

                        <div class="switch-container">
                            <label class="switch"><input type="checkbox"><span class="switch-button"></span> Internship</label>
                        </div>
                        <div class="switch-container">
                            <label class="switch"><input type="checkbox"><span class="switch-button"></span> Temporary</label>
                        </div>
                    </div>

                </div>

                <!-- Tags -->
            

            </div>
        </div>
        <div class="col-xl-9 col-lg-8 content-left-offset">

            <h3 class="page-title">Search Results</h3>

            <div class="notify-box margin-top-15">
                <div class="switch-container">
                    <label class="switch"><input type="checkbox"><span class="switch-button"></span>
                        <span class="switch-text">Turn on email alerts for this search</span></label>
                </div>

                <div class="sort-by">
                    <span>Sort by:</span>
                    <div class="btn-group bootstrap-select hide-tick dropup">                      
                    <div class="dropdown-menu open" role="combobox"
                     style="max-height: 216px; overflow: hidden; min-height: 121px;">
         
                    </div><select class="selectpicker hide-tick" tabindex="-98">
                        <option>Relevance</option>
                        <option>Newest</option>
                        <option>Oldest</option>
                        <option>Random</option>
                    </select></div>
                </div>
            </div>

            <div class="listings-container margin-top-35">
             
               @forelse($jobs as $job)
               <a href="{{ route('view_job',$job->slug) }}" class="job-listing">

                <!-- Job Listing Details -->
                <div class="job-listing-details">
                    <!-- Logo -->
                    <div class="job-listing-company-logo">
                        <img src="images/company-logo-01.png" alt="">
                    </div>

                    <!-- Details -->
                    <div class="job-listing-description">
                        <h4 class="job-listing-company">Hexagon <span class="verified-badge" data-tippy-placement="top" data-tippy="" data-original-title="Verified Employer"></span></h4>
                        <h3 class="job-listing-title">{{ Str::ucfirst($job->name) }}</h3>
                        <p class="job-listing-text">{{ Str::limit($job->description,320,'...') }}</p>
                    </div>

                    <!-- Bookmark -->
                    <span class="bookmark-icon"></span>
                </div>

                <!-- Job Listing Footer -->
                <div class="job-listing-footer">
                    <ul>
                        {{-- <li><i class="icon-material-outline-location-on"></i> {{ Str::ucfirst($job->city->name) }}</li> --}}
                        <li style="visibility: hidden"><i class="icon-material-outline-business-center"></i> Full</li>
                        <li><i class="icon-material-outline-access-time"></i> {{ $job->created_at->diffForHumans() }}</li>
                    </ul>
                </div>
            </a>

               @empty
               <h5 class="text-center">No jobs available.</h5>
               @endforelse
               		

           


                <!-- Pagination -->
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Pagination -->
                        <div class="pagination-container margin-top-30 margin-bottom-60">
                            <nav class="pagination">
                                <ul>
                                    <li class="pagination-arrow"><a href="#"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#" class="current-page">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li class="pagination-arrow"><a href="#"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Pagination / End -->

            </div>

        </div>
    </div>
</div>
