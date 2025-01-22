<!doctype html>
<html lang="en">

<head>
    @include('backend.section.link')
    <title>LMS - Admin Dashboard</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">

        <!--sidebar wrapper -->
        @include('backend.section.sidebar')

        <!--start header -->
        @include('backend.section.header')

        <!--start page wrapper -->
        <div class="page-wrapper">

            @yield('content')

        </div>
        <!--end page wrapper -->


       @include('backend.section.footer')



    </div>
    <!--end wrapper-->


    <!-- Bootstrap JS -->
    @include('backend.section.script')

</body>

</html>
