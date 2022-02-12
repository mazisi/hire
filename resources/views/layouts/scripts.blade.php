
<!-- Scripts
================================================== -->
<script src="{{ asset('assets/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery-migrate-3.1.0.min.html')}}"></script>
<script src="{{ asset('assets/js/mmenu.min.js')}}"></script>
<script src="{{ asset('assets/js/tippy.all.min.js')}}"></script>
<script src="{{ asset('assets/js/simplebar.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap-slider.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap-select.min.js')}}"></script>
<script src="{{ asset('assets/js/snackbar.js')}}"></script>
<script src="{{ asset('assets/js/clipboard.min.js')}}"></script>
<script src="{{ asset('assets/js/counterup.min.js')}}"></script>
<script src="{{ asset('assets/js/magnific-popup.min.js')}}"></script>
<script src="{{ asset('assets/js/slick.min.js')}}"></script>
<script src="{{ asset('assets/js/custom.js')}}"></script>



<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 
</script>


<!-- Google Autocomplete -->
<script>
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);
	}

	// Autocomplete adjustment for homepage
	if ($('.intro-banner-search-form')[0]) {
	    setTimeout(function(){ 
	        $(".pac-container").prependTo(".intro-search-field.with-autocomplete");
	    }, 300);
	}

</script>

