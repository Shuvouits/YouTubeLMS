<!doctype html>
<html lang="en">

<head>
    @include('backend.section.link')
    <title>LMS - Admin Dashboard</title>

    <style>
        /* ডিফল্ট ভাবে থিম হাইড করুন */
        html {
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }
    </style>

    <script>
        (function () {
            if (localStorage.getItem("theme") === "dark") {
                document.documentElement.classList.add("dark-theme");
            } else {
                document.documentElement.classList.add("light-theme");
            }
            document.documentElement.style.visibility = "visible";
            document.documentElement.style.opacity = "1";
        })();
    </script>

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
