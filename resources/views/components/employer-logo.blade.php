@props(['width' => 90])

<!-- Image random -->
<!-- <img src="http://picsum.photos/seed/{{ rand(0,100000) }}/{{ $width }}" alt="" class="rounded-xl"> -->

<img src="{{ Vite::asset('resources/images/job.jpg')}}" alt="logo" width="{{ $width }}" height="100px" class="rounded-xl">