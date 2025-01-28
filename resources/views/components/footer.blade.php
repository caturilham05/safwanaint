@php
$contacts = $contacts->filter(function($item){
    return $item->is_show === 1;
})
@endphp
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">PT. Safwana Marine International</h4>
                <p style="text-align: justify;">{!!$contacts[0]->description!!}</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/safwanaint/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            @foreach ($contacts as $item)
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">{{preg_match('/office/is', $item->name) ? 'Contact Us' : 'Head Office'}}</h4>
                    <p class="mb-2"><i class="fa fa-user me-3"></i>{{!empty($item->name_alias) ? $item->name_alias : $item->name}}</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{$item->phone}}</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{$item->email}}</p>
                    @if (preg_match('/office/is', $item->name))
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{$item->address}}</p>
                    @endif
                </div>
            @endforeach
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Disclaimer</h4>
                <p style="text-align: justify;">{{str_replace('-', ' ', config('app.name'))}} only use official website ({{url('/')}}) and other media with clear identity for job advertisement. {{str_replace('-', ' ', config('app.name'))}} will have no responsibility for those recruitment frauds.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-12 text-center text-md-start mb-3 mb-md-0">
                    <a class="border-bottom" href="#">{{url('/')}}</a> &copy; Copyright {{date('Y')}}, {{str_replace('-', ' ', config('app.name'))}}. All Right Reserved.
                </div>
            </div>
        </div>
    </div>
</div>
