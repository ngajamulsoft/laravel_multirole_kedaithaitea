

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>POS Dash | Responsive Bootstrap 4 Admin Dashboard Template</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}" />
      <link rel="stylesheet" href="{{asset('backend/assets/css/backend-plugin.min.css')}}">
      <link rel="stylesheet" href="{{asset('backend/assets/css/backend.css?v=1.0.0')}}">
      <link rel="stylesheet" href="{{asset('backend/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
      <link rel="stylesheet" href="{{asset('backend/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('backend/assets/vendor/remixicon/fonts/remixicon.css')}}">

      <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
  <body class="  ">
    
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Sidebar  -->
        @include('layouts.navigation.sidebar')     
        <!-- TOP Nav Bar -->
        @include('layouts.navigation.topnav')
      <div class="content-page">
      <div class="container-fluid">
        <div class="row">
            <main>
                @isset($slot)
                    {{ $slot }}
                @endisset

                @yield('content')
            </main>
        </div>
        <!-- Page end  -->
      </div>
      </div>
    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
            <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                                <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 text-right">
                            <span class="mr-1"><script>document.write(new Date().getFullYear())</script>©</span> <a href="#" class="">POS Dash</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('backend/assets/js/backend-bundle.min.js') }}"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="{{ asset('backend/assets/js/backend-bundle.min.js') }}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('backend/assets/js/backend-bundle.min.js') }}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script async src="{{ asset('backend/assets/js/backend-bundle.min.js') }}"></script>
    
    <!-- app JavaScript -->
    <script src="{{ asset('backend/assets/js/backend-bundle.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireScripts
  </body>
</html>