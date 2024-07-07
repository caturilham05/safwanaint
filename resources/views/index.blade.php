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
        <div class="container-xxl">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">{{$item->intro}}</h6>
                    <h1 class="text-uppercase">{{$item->title}}</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid fact bg-dark">
            <div class="certification-border">
                @foreach ($item->media as $media)
                        <div class="certification-wrapper">
                            <img src="{{asset('/storage/'.$media->id.'/'.$media->file_name)}}" alt="Certification" class="certification-image" style="max-width: 100%; height: auto; border-radius: 8px; padding: 1rem;">
                        </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">{{$item->intro}}</h6>
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