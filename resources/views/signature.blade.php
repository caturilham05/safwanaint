<!DOCTYPE html>
<html lang="en">

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
</head>

<body>
	@if (!$data->media->isEmpty())
		@foreach ($data->media as $media)
			<img src="{{asset('/storage/'.$media->id.'/'.$media->file_name)}}" alt="{{$media->file_name}}" style="max-width: 100%; height: auto;">
		@endforeach
	@endif
</body>
</html>