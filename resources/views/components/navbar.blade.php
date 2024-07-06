<div class="container-fluid nav-bar bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 py-lg-0 px-lg-4">
        <a href="" class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none">
            <h1 class="text-primary m-0">SAFWANA-INT</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav me-auto">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">Profile</a>
                <a href="service.html" class="nav-item nav-link">Services</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <div class="mt-4 mt-lg-0 me-lg-n4 py-3 px-4 bg-primary d-flex align-items-center">
                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                    <i class="fa fa-envelope-open text-primary"></i>
                </div>
                <div class="ms-3">
                    <p class="mb-1 text-white">Contact Us</p>
                    <h5 class="m-0 text-secondary">{{$contact->email}}</h5>
                </div>
            </div>
        </div>
    </nav>
</div>