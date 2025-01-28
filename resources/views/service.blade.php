@extends('layout.index')

@section('content')
<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        @foreach ($imageslider as $slider)
            @if (!empty($slider->description))
                @php
                preg_match('/<p>(.*?)<\/p>/is', $slider->description, $match);
                $description = $match[1];
                @endphp
            @endif
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('/storage/'.$slider->media[0]->id.'/'.$slider->media[0]->file_name)}}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{$slider->intro}}</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">{{$slider->title}}</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">{!! $description ?? '' !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@if (empty($data))
	<h1>Data Tidak Ditemukan</h1>
@else
	@foreach ($data as $item)	
		<div class="container-xxl py-1">
		    <div class="container">
		        <div class="row g-4 wow fadeInUp" data-wow-delay="0.1s">
				    <h4 class="text-secondary text-uppercase" style="color: #17224D !important">{{__('service.title')}}</h4>
		            <div style="text-align: justify;">{!!__('service.content')!!}</div>
		        </div>
		    </div>
		</div>
	@endforeach
@endif
<!-- Page Header End -->
@endsection