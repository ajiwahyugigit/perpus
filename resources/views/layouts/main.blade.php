<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
               
        @include('includes.admin.style')
        @include('sweetalert::alert')

    </head>
    <body class="sb-nav-fixed">
       
        @include('includes.admin.navbar')

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">

                   @include('includes.admin.sidebar')

                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>

                   @yield('content')

                </main>
               
                @include('includes.admin.footer')

            </div>
        </div>
       
        @include('includes.admin.script')
    </body>
</html>
