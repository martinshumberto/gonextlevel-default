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
    <link href="{!!url("/")!!}/public/css/main.css?version={!!time()!!}" rel="stylesheet">
    <link href="{!!url("/")!!}/public/css/gonextlevel.css?version={!!time()!!}" rel="stylesheet">

    <link href="{!!url("/")!!}/public/css/app.css?version={!!time()!!}" rel="stylesheet">
</head>
<body class="auth-wrapper">
    @yield('content')

    <input type="hidden" name="app_url" id="app_url" value="{!!url("/")!!}">
    <script src="{!!url("/")!!}/public/libs/jquery/dist/jquery.min.js"></script>

    <script src="{!!url("/")!!}/public/js/guest.js?version={!!time()!!}"></script>
</body>
</html>
