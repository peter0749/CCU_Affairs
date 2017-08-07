<html>
    <head>
        <title>@yield('title')</title>
        @yield('metadata')
    </head>
    <body>
        <div id="wrapper">
            <div id="sidebar-wrapper">
                @yield('default_sidebar')
            </div>
            <div id="page-content-wrapper">
                <div class="page-content">
                    @yield('header')
                    @yield('mountain_image')
                    <div class="container-fluid">
                        <H4> @yield('subtitle') </H4>
                        @yield('content')
                    </div>
                    <div id="footer">
                        @yield('footer')
                    </div>
               </div>
            </div>
        </div>
    </body>
</html>
