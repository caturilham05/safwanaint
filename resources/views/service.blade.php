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
		<div class="container-xxl py-5">
		    <div class="container">
		        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
		            <h6 class="text-secondary text-uppercase">{{$item->intro}}</h6>
		            <h1 class="text-uppercase mb-5">{{$item->title}}</h1>
		        </div>
		        <div class="row g-4">
		            <div style="text-align: justify;">{!!$item->content!!}</div>
		        </div>
		    </div>
		</div>
	@endforeach
@endif
<!-- Page Header End -->
@endsection