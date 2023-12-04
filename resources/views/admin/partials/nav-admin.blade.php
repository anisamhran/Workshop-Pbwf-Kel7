
{{-- <!-- Topbar Start -->
<div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center">
                <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Opening Hours: Mon - Tues : 6.00 am - 10.00 pm, Sunday Closed </small>
            </div>
        </div>
        <div class="col-md-6 text-center text-lg-end">
            <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                <div class="me-3 pe-3 border-end py-2">
                    <p class="m-0"><i class="fa fa-envelope-open me-2"></i>glucosync@gmail.com</p>
                </div>
                <div class="py-2">
                    <p class="m-0"><i class="fa fa-phone-alt me-2"></i>(021) 789816</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End --> --}}


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
    <a href="/" class="navbar-brand p-0">
        <h1 class="m-0 text-primary"> GlucoSync.</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <span _ngcontent-halodoc-c164="" class="text-truncate mr-2" title="profile">
                <!-- Teks dan tautan ke halaman profil -->
                <a href="profile" style="display: flex; align-items: center;">
                    <img src="img/profile.jpg" alt="Profile Image" style="width: 35px; height: 35px; border-radius: 50%; margin-right: 8px;">
                    <span style="font-size: 18px;">
                        Hi, {{ auth()->check() ? auth()->user()->name : 'Guest' }}!
                    </span>
                </a>
            </span>
        </div>
    </div>
</nav>

<!-- Navbar End -->
