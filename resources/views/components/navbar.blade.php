<div class="container-fluid nav-bar bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-4 custom-nav">
        <img src="{{asset('/storage/'.$contacts[0]->media[0]->id.'/'.$contacts[0]->media[0]->file_name)}}" alt="logo" class="custom-img-logo">
        <a href="" class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none">
            <h1 class="text-primary m-0 custom-title-logo" style="color: #3552e6 !important; font-size: 30px;">SAFWANA-INT</h1>
        </a>
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav me-auto">
                <a href="{{route('home')}}" class="nav-item nav-link active">{{__('navbar.home')}}</a>
                <a href="{{route('profile')}}" class="nav-item nav-link">{{__('navbar.about_us')}}</a>
                <a href="{{route('service')}}" class="nav-item nav-link">{{__('navbar.crew_service')}}</a>
                <a href="{{route('contact')}}" class="nav-item nav-link">{{__('navbar.contact')}}</a>
                @if (env('APP_DEBUG'))
                    <a href="{{route('apply')}}" class="nav-item nav-link" style="color: #FF4917 !important">{{__('navbar.apply')}}</a>
                @endif
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ strtoupper(LaravelLocalization::getCurrentLocale()) }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach (LaravelLocalization::getSupportedLanguagesKeys() as $locale)
                            <li><a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL($locale) }}">{{ strtoupper($locale) }}</a></li>
                        @endforeach
                    </ul>
                </li>
            </div>
            <div class="mt-4 mt-lg-0 me-lg-n4 py-3 px-4 bg-primary d-flex align-items-center">
                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                    <i class="fa fa-envelope-open text-primary"></i>
                </div>
                <div class="ms-3">
                    <p class="mb-1 text-white">Contact Us</p>
                    <h5 class="m-0 text-secondary">{{$contacts[0]->email}}</h5>
                </div>
            </div>
        </div>
    </nav>
</div>