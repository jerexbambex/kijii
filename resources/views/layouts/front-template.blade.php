<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.front.includes.head')

    @yield('title')
</head>

<body>
    <div class="content-wrapper">
        @include('layouts.front.partials.nav')
        <!-- /header -->

        @yield('content')
    </div>
    <!-- /.content-wrapper -->
    @include('layouts.front.partials.footer')

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="/front/assets/js/plugins.js"></script>
    <script src="/front/assets/js/theme.js"></script>
</body>

</html>
