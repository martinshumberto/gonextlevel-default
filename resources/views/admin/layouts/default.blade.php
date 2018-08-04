<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Go Next Level - Gerenciamento de Prospectos</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="prospectos hinode" name="keywords">
    <meta content="Consilio" name="author">
    <meta content="Gerenciamento de prospectos destinado ao controle de novos e acompanhar contatos para ingresso da empresa Hinode" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <link href="//fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet" type="text/css">
    <link href="{!!url("/")!!}/public/libs/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="{!!url("/")!!}/public/libs/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="{!!url("/")!!}/public/libs/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="{!!url("/")!!}/public/libs/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{!!url("/")!!}/public/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="{!!url("/")!!}/public/libs/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="{!!url("/")!!}/public/libs/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="{!!url("/")!!}/public/css/main.css?version=4.4.0" rel="stylesheet">

</head>
<body class="menu-position-side menu-side-left full-screen with-content-panel">



    <div class="all-wrapper with-side-panel solid-bg-all">
        <div class="layout-w">
            <!-- sidebar content -->
            @include('admin.includes.sidebar')

            <div class="content-w">
                <!-- Topbar content -->
                @include('admin.includes.topbar')

                <!-- main content -->
                @yield('content')
            </div>
        </div>

        <div class="display-type"></div>
    </div>





    <input type="hidden" name="app_url" id="app_url" value="{!!url("/")!!}">

    <script src="{!!url("/")!!}/public/libs/jquery/dist/jquery.min.js"></script>
    <script src="{!!url("/")!!}/public/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="{!!url("/")!!}/public/libs/moment/moment.js"></script>
    <script src="{!!url("/")!!}/public/libs/chart.js/dist/Chart.min.js"></script>
    <script src="{!!url("/")!!}/public/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="{!!url("/")!!}/public/libs/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="{!!url("/")!!}/public/libs/ckeditor/ckeditor.js"></script>
    <script src="{!!url("/")!!}/public/libs/bootstrap-validator/dist/validator.min.js"></script>
    <script src="{!!url("/")!!}/public/libs/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="{!!url("/")!!}/public/libs/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <script src="{!!url("/")!!}/public/libs/dropzone/dist/dropzone.js"></script>
    <script src="{!!url("/")!!}/public/libs/editable-table/mindmup-editabletable.js"></script>
    <script src="{!!url("/")!!}/public/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{!!url("/")!!}/public/libs/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="{!!url("/")!!}/public/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="{!!url("/")!!}/public/libs/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="{!!url("/")!!}/public/libs/tether/dist/js/tether.min.js"></script>
    <script src="{!!url("/")!!}/public/libs/slick-carousel/slick/slick.min.js"></script>
    <script src="{!!url("/")!!}/public/libs/bootstrap/js/dist/util.js"></script>
    <script src="{!!url("/")!!}/public/libs/bootstrap/js/dist/alert.js"></script>
    <script src="{!!url("/")!!}/public/libs/bootstrap/js/dist/button.js"></script>
    <script src="{!!url("/")!!}/public/libs/bootstrap/js/dist/carousel.js"></script>
    <script src="{!!url("/")!!}/public/libs/bootstrap/js/dist/collapse.js"></script>
    <script src="{!!url("/")!!}/public/libs/bootstrap/js/dist/dropdown.js"></script>
    <script src="{!!url("/")!!}/public/libs/bootstrap/js/dist/modal.js"></script>
    <script src="{!!url("/")!!}/public/libs/bootstrap/js/dist/tab.js"></script>
    <script src="{!!url("/")!!}/public/libs/bootstrap/js/dist/tooltip.js"></script>
    <script src="{!!url("/")!!}/public/libs/bootstrap/js/dist/popover.js"></script>
    <script src="{!!url("/")!!}/public/js/demo_customizer.js?version=4.4.0"></script>
    <script src="{!!url("/")!!}/public/js/main.js?version=4.4.0"></script>
    <script src="{!!url("/")!!}/public/js/demo_customizer.js?version={!!time()!!}"></script>
</body>
</html>