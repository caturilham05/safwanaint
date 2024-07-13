@extends('layout.index')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 py-5">
    <div class="container">
        <h1 class="display-3 text-white mb-3 animated slideInDown">{{$title}}</h1>
    </div>
</div>

@if (empty($data))
	<h1>Data Tidak Ditemukan</h1>
@else
	@foreach ($data as $item)
	    @if (!$item->media->isEmpty())
	        <div class="container-fluid fact bg-dark wow fadeInUp">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="text-uppercase mb-4" style="color: #fff !important">Our License</h1>
                </div>
	            <div class="certificate-test">
	                @foreach ($item->media as $key => $media)
						<div class="certificate-container-test m-3">
						    <img src="{{asset('/storage/'.$media->id.'/'.$media->file_name)}}" alt="Certificate" class="certificate-image-test">
						    <div class="certificate-frame-test">
						    	@if (($key == 0) || ($key == 1))
							    	<img src="{{asset('assets/rina.png')}}" class="certificate-logo">
							    	<span class="certificate-text">CERTIFICATE</span>
						    	@elseif (($key == 2))
							    	<img src="{{asset('assets/iqnet.png')}}" class="certificate-logo">
							    	<span class="certificate-text">CERTIFICATE</span>
						    	@endif
							</div>
						</div>
	                @endforeach
	            </div>
	        </div>
	    @else
	        <div class="container-xxl py-5">
	            <div class="container">
	                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
	                </div>
	                <div class="row g-4">
	                    <div style="text-align: justify;">{!!$item->content!!}</div>
	                </div>
	            </div>
	        </div>
	    @endif
	@endforeach
@endif
<!-- Page Header End -->
@endsection