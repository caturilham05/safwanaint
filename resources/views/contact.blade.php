@extends('layout.index')

@section('content')
<div class="container-fluid page-header-contact mb-5 py-5">
    <div class="container">
        <h1 class="display-3 text-white mb-3 animated slideInDown">{{$title}}</h1>
    </div>
</div>

<!-- Contact Start -->
<div class="container-xxl py-1">
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <div class="row g-4">
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="mb-4">{!!$contacts[0]->description!!}</p>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-light p-5 h-100 d-flex align-items-center">
                    <form action="{{route('contact_post')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('fullname') is-invalid @enderror" id="name" name="fullname" placeholder="Your Name">
                                    <label for="name">Full Name</label>
                                    @error('fullname')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                    @error('email')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                    @error('subject')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control @error('message') is-invalid @enderror" placeholder="Leave a message here" id="message" name="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                    @error('message')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Email</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection