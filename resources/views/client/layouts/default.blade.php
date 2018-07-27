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


    <link href="{!!url("/")!!}/public/libs/dragula.js/dist/dragula.min.css" rel="stylesheet"> <!-- pipeline -->    
    <link href="{!!url("/")!!}/public/iconfonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{!!url("/")!!}/public/iconfonts/feather/style.css" rel="stylesheet">
    
    <link href="{!!url("/")!!}/public/css/main.css?version={!!time()!!}" rel="stylesheet">
    <link href="{!!url("/")!!}/public/css/gonextlevel.css?version={!!time()!!}" rel="stylesheet">
    <script>
        function changeBody() {
            var scre = $(window).width();
            /*scre <= 1200 && scre =< 850 */
            if (scre < 1366) {
                $('body').addClass('full-screen with-content-panel menu-position-side menu-side-left');

            }
        };
    </script>
</head>
<body class="with-content-panel menu-position-side menu-side-left">
    <div class="all-wrapper with-side-panel solid-bg-all">
        {{--<div id="main" class="row">--}}
            <div class="layout-w">
                <!-- sidebar content -->
                @include('client.includes.sidebar')

                <div class="content-w">
                    <!-- Topbar content -->
                    @include('client.includes.topbar')

                    <!-- main content -->
                    @yield('content')
                </div>
            </div>

            <div class="display-type"></div>
        </div>


        <input type="hidden" name="app_url" id="app_url" value="{!!url("/")!!}">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </body>
    </html>




