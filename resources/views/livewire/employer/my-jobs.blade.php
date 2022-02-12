<div class="content">
    <ul class="dashboard-box-list">
        @forelse ($my_jobs as $my_job)
        <li>
            <div class="job-listing">
                <div class="job-listing-details">
                    <div class="job-listing-description">
                        <h3 class="job-listing-title"><a href="#">{{ Str::ucfirst($my_job->name) }}</a> <span class="dashboard-status-button green">Pending Approval</span></h3>

                        <!-- Job Listing Footer -->
                        <div class="job-listing-footer">
                            <ul>
                                <li><i class="icon-material-outline-date-range"></i> Posted on {{ $my_job->created_at->format('d M, Y') }}</li>
                                <li><i class="icon-material-outline-date-range"></i> Expiring on 10 August, 2019</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="buttons-to-right always-visible">
                <a href="dashboard-manage-candidates.html" class="button ripple-effect"><i class="icon-material-outline-supervisor-account"></i> Manage Candidates <span class="button-info">0</span></a>
                <a href="/employer/edit-job/?job={{ $my_job->slug }}" class="button gray ripple-effect ico" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                <a href="#" class="button gray ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
            </div>
        </li>
           
        <div class="mt-3">
            {{ $my_jobs->links() }}
        </div>
        @empty
            <h5 class="text-center">You have no jobs.</h5>
        @endforelse
        
    </ul>
 
</div>
