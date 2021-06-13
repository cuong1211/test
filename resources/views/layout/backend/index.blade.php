<!doctype html>
<html lang="en">

<head>
    @include('layout.backend.source')
</head>

<body>
    @include('layout.backend.navbar')
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div id="content-page" class="content-page">
        @yield('content')
    </div>
    <!-- Wrapper END -->
    <!-- Footer -->
    @include('layout.backend.footer')
    <!-- Footer END -->
    
</body>

</html>
