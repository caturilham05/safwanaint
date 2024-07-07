@extends('layout.index')

@section('content')
<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        @foreach ($imageslider as $slider)
            @php
            preg_match('/<p>(.*?)<\/p>/is', $slider->description, $match);
            $description = $match[1];
            @endphp
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('/storage/'.$slider->media[0]->id.'/'.$slider->media[0]->file_name)}}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{$slider->intro}}</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">{{$slider->title}}</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">{!! $description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@foreach ($data as $item)
    @if (!$item->media->isEmpty())
        <div class="container-fluid py-5 px-4 px-lg-0">
            <div class="row g-0">
                <div class="col-lg-3 d-none d-lg-flex">
                    <div class="d-flex align-items-center justify-content-center bg-primary w-100 h-100">
                        <h1 class="display-3 text-white" style="transform: rotate(-90deg); margin-bottom: 5rem">{{$item->title}}</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-9">
                    <div class="ms-lg-5 ps-lg-5">
                        <div class="text-center text-lg-start wow fadeInUp" data-wow-delay="0.1s">
                            <h6 class="text-secondary text-uppercase">{{-- Our Services --}}</h6>
                            <h1 class="mb-3">{{$item->title}}</h1>
                        </div>
                        <div class="owl-carousel service-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                            @foreach ($item->media as $media)
                                <img src="{{asset('/storage/'.$media->id.'/'.$media->file_name)}}" alt="{{$media->file_name}}">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    {{-- <h6 class="text-secondary text-uppercase">{{$item->intro}}</h6> --}}
                    <h1 class="text-uppercase">{{$item->title}}</h1>
                </div>
                <div class="row g-4">
                    <div style="text-align: justify;">{!!$item->content!!}</div>
                </div>
            </div>
        </div>
    @endif
@endforeach
@endsection