<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"
        integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous">
    </script>
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"

        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="https://cdn.datatables.net/plug-ins/1.10.15/integration/font-awesome/dataTables.fontAwesome.css"
        rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/Style/css/bootstrap.min.css') }}">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
    <link rel="stylesheet" href="{{ asset('Template/assets/toastr/toastr.min.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    @livewireStyles
    @livewireScripts
    <title>Gerindra</title>
</head>

<body>
    <nav class="navbar sticky-top">
        <div class="container-sm">
            <a class="navbar-brand" href="/"><img src="{{ asset('img/logo.png') }}" alt="" width="52" height="63"
                    class="logo d-inline-block align-text-top">
            </a>
            {{-- <a class="navbar-brand" href="/">LOGO</a> --}}
            @auth
                <span class="navbar-text">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn tombol text-white">Logout</button>

                    </form>
                    <!-- <button type="button" class="btn tombol">Login</button> -->
                </span>

            @endauth
        </div>
    </nav>
    <div class="row rowside" style="width: 100%;">
        <div class="col-sm-3 sidebar ">
            <livewire:side-bar>
        </div>
        <div class="col-sm">
            <div class="container-sm"></div>
            @yield('konten')
        </div>
    </div>
    </div>
    </div>

    <footer class="text-center text-lg-start text-light pb-5" style="background-color: #212121">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-between p-4 text-light" style="background-color: #212121">
            <!-- Left -->
            <div class="me-5">
                <!-- <span>Get connected with us on social networks:</span> -->
            </div>
            <!-- Left -->

            <!-- Right -->

            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <!-- <h6 class="text-uppercase fw-bold">Company name</h6> -->
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #212121; height: 2px" />
                        {{-- <h5>
                            KANTOR DPD GERINDRA
                        </h5> --}}
                        <h5>KANTOR KU</h5>
                        <P>Jl. Gergaji I No.8
                            Mugassari
                            Kec. Semarang Sel.
                            Kota Semarang
                            Jawa Tengah 50249</P>
                        <p>(024) 831923913</p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 col-rows-5">
                        <!-- Links -->
                        <!-- <h6 class="text-uppercase fw-bold">Products</h6> -->
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #212121; height: 2px" />
                        <section>
                            <div class="d-flex justify-content-center align-item-center ">
                                <div class="justify-content-center align-item-center mx-2">
                                    <a href="" class="text-white ">

                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                            viewBox="0 0 171 171" style=" fill:#000000;">
                                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                font-weight="none" font-size="none" text-anchor="none"
                                                style="mix-blend-mode: normal">
                                                <path d="M0,171.99765v-171.99765h171.99765v171.99765z" fill="none">
                                                </path>
                                                <g fill="#ffffff">
                                                    <path
                                                        d="M140.22,13.68h-109.44c-9.42894,0 -17.1,7.67106 -17.1,17.1v109.44c0,9.42894 7.67106,17.1 17.1,17.1h109.44c9.42894,0 17.1,-7.67106 17.1,-17.1v-109.44c0,-9.42894 -7.67106,-17.1 -17.1,-17.1zM126.56052,76.34466c-0.77634,0.07182 -1.56294,0.1197 -2.3598,0.1197c-8.97066,0 -16.85376,-4.61358 -21.43998,-11.58696c0,18.29358 0,39.1077 0,39.45654c0,16.10478 -13.05756,29.16234 -29.16234,29.16234c-16.10478,0 -29.16234,-13.05756 -29.16234,-29.16234c0,-16.10478 13.05756,-29.16234 29.16234,-29.16234c0.60876,0 1.20384,0.05472 1.80234,0.09234v14.37084c-0.5985,-0.07182 -1.18674,-0.18126 -1.80234,-0.18126c-8.22168,0 -14.88384,6.66216 -14.88384,14.88384c0,8.22168 6.66216,14.88384 14.88384,14.88384c8.22168,0 15.48234,-6.47748 15.48234,-14.69916c0,-0.3249 0.14364,-67.01148 0.14364,-67.01148h13.73472c1.29276,12.28122 11.20734,21.9735 23.60142,22.8627z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div class="justify-content-center align-item-center mx-2">
                                    <a href="" class="text-white ">

                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                            viewBox="0 0 171 171" style=" fill:#000000;">
                                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                font-weight="none" font-size="none" text-anchor="none"
                                                style="mix-blend-mode: normal">
                                                <path d="M0,171.99765v-171.99765h171.99765v171.99765z" fill="none">
                                                </path>
                                                <g fill="#ffffff">
                                                    <path
                                                        d="M159.6,39.5409c-5.4549,2.4225 -11.3145,4.0527 -17.4648,4.788c6.2814,-3.762 11.0979,-9.7185 13.3665,-16.8207c-5.871,3.4827 -12.3804,6.0135 -19.3116,7.3815c-5.5461,-5.9109 -13.4463,-9.6045 -22.1901,-9.6045c-16.7922,0 -30.4038,13.6173 -30.4038,30.4038c0,2.3826 0.2736,4.7082 0.7866,6.9255c-25.2681,-1.2654 -47.6691,-13.3722 -62.6715,-31.7718c-2.6106,4.4916 -4.1097,9.7128 -4.1097,15.2931c0,10.545 5.3637,19.8531 13.5204,25.3023c-4.9818,-0.1596 -9.6729,-1.5276 -13.7712,-3.8019c0,0.1311 0,0.2508 0,0.3819c0,14.7345 10.4766,27.0237 24.3903,29.811c-2.5479,0.6954 -5.2383,1.0659 -8.0142,1.0659c-1.9551,0 -3.8646,-0.1938 -5.7171,-0.5415c3.8703,12.0783 15.0993,20.8734 28.4031,21.1185c-10.4025,8.1567 -23.5125,13.0188 -37.7625,13.0188c-2.451,0 -4.8735,-0.1425 -7.2561,-0.4275c13.4577,8.6241 29.4348,13.6572 46.6089,13.6572c55.9284,0 86.5032,-46.3296 86.5032,-86.5089c0,-1.3167 -0.0285,-2.6277 -0.0855,-3.933c5.9451,-4.2921 11.1036,-9.6444 15.1791,-15.7377z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div class="justify-content-center align-item-center mx-2">
                                    <a href="" class="text-white">

                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                            viewBox="0 0 171 171" style=" fill:#000000;">
                                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                font-weight="none" font-size="none" text-anchor="none"
                                                style="mix-blend-mode: normal">
                                                <path d="M0,171.99765v-171.99765h171.99765v171.99765z" fill="none">
                                                </path>
                                                <g fill="#ffffff">
                                                    <path
                                                        d="M56.98887,17.1c-21.9963,0 -39.88887,17.90913 -39.88887,39.91113v57c0,21.9963 17.90913,39.88887 39.91113,39.88887h57c21.9963,0 39.88887,-17.90913 39.88887,-39.91113v-57c0,-21.9963 -17.90913,-39.88887 -39.91113,-39.88887zM125.4,39.9c3.1464,0 5.7,2.5536 5.7,5.7c0,3.1464 -2.5536,5.7 -5.7,5.7c-3.1464,0 -5.7,-2.5536 -5.7,-5.7c0,-3.1464 2.5536,-5.7 5.7,-5.7zM85.5,51.3c18.8613,0 34.2,15.3387 34.2,34.2c0,18.8613 -15.3387,34.2 -34.2,34.2c-18.8613,0 -34.2,-15.3387 -34.2,-34.2c0,-18.8613 15.3387,-34.2 34.2,-34.2zM85.5,62.7c-12.59209,0 -22.8,10.20791 -22.8,22.8c0,12.59209 10.20791,22.8 22.8,22.8c12.59209,0 22.8,-10.20791 22.8,-22.8c0,-12.59209 -10.20791,-22.8 -22.8,-22.8z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div class="justify-content-center align-item-center mx-2">
                                    <a href="" class="text-white ">

                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                            viewBox="0 0 171 171" style=" fill:#000000;">
                                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                font-weight="none" font-size="none" text-anchor="none"
                                                style="mix-blend-mode: normal">
                                                <path d="M0,171.99765v-171.99765h171.99765v171.99765z" fill="none">
                                                </path>
                                                <g fill="#ffffff">
                                                    <path
                                                        d="M153.77175,44.07525c-1.63875,-6.1275 -6.4695,-10.95825 -12.597,-12.597c-11.115,-2.97825 -55.67475,-2.97825 -55.67475,-2.97825c0,0 -44.55975,0 -55.67475,2.97825c-6.1275,1.63875 -10.95825,6.4695 -12.597,12.597c-2.97825,11.115 -2.97825,41.42475 -2.97825,41.42475c0,0 0,30.30975 2.97825,41.42475c1.63875,6.1275 6.4695,10.95825 12.597,12.597c11.115,2.97825 55.67475,2.97825 55.67475,2.97825c0,0 44.55975,0 55.67475,-2.97825c6.13463,-1.63875 10.95825,-6.4695 12.597,-12.597c2.97825,-11.115 2.97825,-41.42475 2.97825,-41.42475c0,0 0,-30.30975 -2.97825,-41.42475zM71.25,104.01075v-37.0215c0,-2.74313 2.97113,-4.45313 5.34375,-3.08513l32.0625,18.51075c2.37262,1.368 2.37262,4.80225 0,6.17025l-32.0625,18.51075c-2.37262,1.37513 -5.34375,-0.342 -5.34375,-3.08512z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div class="justify-content-center align-item-center mx-2">
                                    <a href="" class="text-white">

                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                            viewBox="0 0 50 50" style=" fill:#ffffff;">
                                            <path
                                                d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M37,19h-2c-2.14,0-3,0.5-3,2 v3h5l-1,5h-4v15h-5V29h-4v-5h4v-3c0-4,2-7,6-7c2.9,0,4,1,4,1V19z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                        </section>
                        <div class="copy">
                            <p><span class="px-1">©Copyright2022</span><b>GERINDRA<span
                                        class="px-2">JATENG<span></b></P>
                        </div>

                    </div>

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <!-- <h6 class="text-uppercase fw-bold">Contact</h6> -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1281274836083!2d110.41256511465048!3d-6.994187394947517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b5d2e2f3169%3A0x5bcf8d1a0298bd69!2sJl.%20Gergaji%20I%20No.8%2C%20Mugassari%2C%20Kec.%20Semarang%20Sel.%2C%20Kota%20Semarang%2C%20Jawa%20Tengah%2050249!5e0!3m2!1sen!2sid!4v1648179302032!5m2!1sen!2sid" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        {{-- <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.070532923704!2d110.44651311477337!3d-7.000976394942679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c933d6636c3%3A0xca1c8f002f19bcce!2sKANTOR%20DPD%20GERINDRA%20JATENG!5e0!3m2!1sen!2sid!4v1647520860723!5m2!1sen!2sid"
                            width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->

        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
             integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('/Style/js/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/Style/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/Style/js/bootstrap.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/style/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('Template/assets/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('Template/assets/toastr/toastr.min.js') }}"></script>


    @yield('script')
    <script>
        $(document).ready(function() {
            // $('#tabel-1').DataTable({
            // pagingType: 'input',
            // pageLength: 5,
            // language: {
            // oPaginate: {
            //   sNext: '<i class="fa fa-forward"></i>',
            //   sPrevious: '<i class="fa fa-backward"></i>',
            //   sFirst: '<i class="fa fa-step-backward"></i>',
            //   sLast: '<i class="fa fa-step-forward"></i>'
            //   }
            //   }
            //   })
            $('#tabel-1').DataTable({
                "paging": true,
                "pagingType": "numbers",
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,

                // "pagingType": 'input',
                "oPaginate": {
                    sNext: '<i class="fa fa-forward"></i>',
                    sPrevious: '<i class="fa fa-backward"></i>',
                    sFirst: '<i class="fa fa-step-backward"></i>',
                    sLast: '<i class="fa fa-step-forward"></i>'
                }
            });
        });
    </script>
    @if (Session::has('success'))
        <script>
        $( document ).ready(function() {
        toastr.success('<?php echo Session::get('success'); ?>', 'Berhasil');
        });
        </script>
    @endif
    @if (Session::has('error'))
        <script>
            $(document).ready(function() {
                toastr.error('<?php echo Session::get('error'); ?>', 'Gagal');
            });
        </script>
    @endif
    <script type="text/javascript">
        $(document).ready(function(e) {


            $('#image').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

        });
    </script>
    <script>
        function removeclass(idinput) {
            var input = document.getElementById(idinput);
            input.classList.remove('is-invalid')
        }
    </script>

</body>

</html>
