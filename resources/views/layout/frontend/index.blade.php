<!doctype html>
<html lang="zxx">
<head>
    @include('layout.frontend.source')
</head>

<body id="home" class="cms_course cms_course_list">
    {{-- header --}}
    @include('layout.frontend.header')
    {{-- body --}}
    <div>
        @yield('content')
    </div>
    {{-- footer --}}
    @include('layout.frontend.footer')

    

</body>

</html>
