<div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                        <i class="ri-menu-line wrapper-menu"></i>
                        <a href="#" class="header-logo">
                            <img src="{{ asset('backend/assets/images/logo.png') }}" class="img-fluid rounded-normal" alt="logo">
                            <h5 class="logo-title ml-3">POSDash</h5>
        
                        </a>
                    </div>
                    <div class="iq-search-bar device-search">
                        <form action="#" class="searchbox">
                            <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                            <input type="text" class="text search-input" placeholder="Search here...">
                        </form>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-label="Toggle navigation">
                            <i class="ri-menu-3-line"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto navbar-list align-items-center">
                               
                                
                                <li class="nav-item nav-icon dropdown caption-content">
                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton4"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('backend/assets/images/user/1.png') }}" class="img-fluid rounded" alt="user">
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="card shadow-none m-0">
                                            <div class="card-body p-0 text-center">
                                                <div class="media-body profile-detail text-center">
                                                    <img src="{{ asset('backend/assets/images/page-img/profile-bg.jpg') }}" alt="profile-bg"
                                                        class="rounded-top img-fluid mb-4">
                                                    <img src="{{ asset('backend/assets/images/user/1.png') }}" alt="profile-img"
                                                        class="rounded profile-img img-fluid avatar-70">
                                                </div>
                                                <div class="p-3">
                                                    <h5 class="mb-1">{{ Auth::user()->name }}</h5>
                                                    <p class="mb-0">Since 10 march, 2020</p>
                                                    <div class="d-flex align-items-center justify-content-center mt-3">
                                                        <a href="../app/user-profile.html" class="btn border mr-2">Profile</a>
                                                        <a href="{{ route('logout') }}" class="btn border" onclick="
                                                            event.preventDefault();
                                                            document.getElementById('logout-form').submit();">Sign Out</a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf</form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>