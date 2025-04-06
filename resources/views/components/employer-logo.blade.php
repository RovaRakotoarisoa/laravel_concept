@props(['employer','width' => 90])

<!-- Image random -->
<!-- <img src="http://picsum.photos/seed/{{ rand(0,100000) }}/{{ $width }}" alt="" class="rounded-xl"> -->

<img src="{{ Vite::asset('resources/images/job.jpg')}}" alt="logo" width="{{ $width }}" height="100px" class="rounded-xl">

{{-- THIS IS THE TRUE LOGO FOR AN EMPLOYERs --}}
{{-- <img src="{{ asset($employer->logo) }}" alt="logo" width="{{ $width }}" height="100px" class="rounded-xl"> --}}
