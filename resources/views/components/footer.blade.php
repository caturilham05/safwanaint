<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h4 class="text-light mb-4">Safwana Marine International</h4>
                <p style="text-align: justify;">{!!$contact->description!!}</p>
            </div>

            <div class="col-lg-4 col-md-6">
                <h4 class="text-light mb-4">Address</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{$contact->address}}</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{$contact->phone}}</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{$contact->email}}</p>
            </div>
            <div class="col-lg-4 col-md-6">
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
