<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{str_replace('-', ' ', config('app.name'))}} | {{$title}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Safwana Marine International adalah perusahaan dengan kualitas tertinggi yang memperkerjakan anggota kru Indonesia yang sangat kompeten untuk bekerja di perusahaan pelayaran dengan semua jenis kapal & ukuran kapal. Kami mempunyai prosedur yang sangat ketat namun adil dalam proses perekrutan anggota kru. Kami juga menggunakan metode perincian dan seleksi modern untuk memastikan bahwa anggota kru kami memiliki kualitas dan kepribadi profesional yang diperlukan klien kami. Kami juga memastikan bahwa anggota kru siap untuk memenuhi standard yang anda butuhkan dan juga sangat berpengalaman untuk bekerja di atas kapal" name="description">
    <meta content="kru kapal indonesia, kapal, agency kapal, perusahaan kapal, manner agency" name="keywords">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="googlebot-news" content="index, follow">
    <meta name="developer" content="caturilham05.github.io/portfolio">
    <meta name="Author" content="{{url('/')}}">
    <meta name="google-site-verification" content="DH-90XsxXCtmbz9Spv3BPpsxyUZl1LaqYTISfMrTXes" />

    <!-- Favicon -->
    <link href="{{asset('/storage/'.$contacts[0]->media[0]->id.'/'.$contacts[0]->media[0]->file_name)}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    @include('components.spinner')
    <!-- Spinner End -->

    <!-- Topbar Start -->
    @include('components.topbar')
    <!-- Topbar End -->

    <!-- Navbar Start -->
    @include('components.navbar')
    <!-- Navbar End -->

    <!-- Carousel Start -->
    {{-- @include('components.carousel') --}}
    <!-- Carousel End -->

    @yield('content')

    <!-- Footer Start -->
    @include('components.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    @include('components.back_to_top')

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>