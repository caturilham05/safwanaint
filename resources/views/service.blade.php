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
		<div class="container-xxl py-1">
		    <div class="container">
		        <div class="row g-4 wow fadeInUp" data-wow-delay="0.1s">
		            <div style="text-align: justify;">{!!$item->content!!}</div>
		        </div>
		    </div>
		</div>
	@endforeach
@endif
<!-- Page Header End -->
@endsection