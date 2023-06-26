@if($alert = session()->pull('alert'))
	<div class="alert alert-{{ session('type') }} mb-0 rounded-0 text-center small py-2">
		{{ $alert }}
	</div>
@endif
