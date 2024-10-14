<header id="header" class="header d-flex align-items-center sticky-top" style="background-color:#003366">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto me-xl-0">
            <img src="{{ asset('frontend-assets') }}/img/logo.png" alt="">
            <h3 class="sitename mt-2" style="color: #ffffff;">Southern Leyte State University</h3>
        </a>

        <nav id="navmenu" class="navmenu me-3">
            <ul>
                <li><a href="{{ url('/') }}" class="active" style="color: #ffffff;">Home<br></a></li>
                <li><a href="about.html" style="color: #ffffff;">Faculties</a></li>
                <li><a href="contact.html" style="color: #ffffff;">About</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list" style="color: #ffffff;"></i>
        </nav>

    </div>
</header>
