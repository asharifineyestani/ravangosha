<!DOCTYPE html>

<html lang="en" @if(in_array(App::getLocale() , ['fa','ar','ur'])) dir="rtl" @endif>
<head>
    <base href="./">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Afracode Admin Template">
    <meta name="author" content="Ali Sharifi Neyestani ">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Afracode Admin Template</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/nxt/crud/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/nxt/crud/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/nxt/crud/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/nxt/crud/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/nxt/crud/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/nxt/crud/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/nxt/crud/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/nxt/crud/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/nxt/crud/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/nxt/crud/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/nxt/crud/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/nxt/crud/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/nxt/crud/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/nxt/crud/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <link href="/nxt/crud/css/style.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');
    </script>
    <link href="/nxt/crud/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
    <link href="https://unpkg.com/persian-datepicker@1.2.0/dist/css/persian-datepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>


    <style>
        .ml-auto, .mx-auto, html:not([dir="rtl"]) .mfs-auto {
            margin-right: auto !important;
            margin-left: 25px !important;
        }

        html:not([dir="ltr"]) .dropdown-menu {
            float: right;
            text-align: right;
        }


        html:not([dir="ltr"]) .mr-2 {
            margin-right: inherit !important;
            margin-left: 0.5rem !important;
        }

        .c-avatar-img {
            width: 36px;
            height: 36px;
        }

    </style>



    @yield('style')
</head>
<body class="c-app">
@include(crudView('partials.sidebar'))
<div class="c-wrapper c-fixed-components">
    @include(crudView('partials.header'))
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                @yield('content')
                <!-- /.card-->
                </div>
            </div>
        </main>

    </div>
</div>


<!-- CoreUI and necessary plugins-->
<script src="/nxt/crud/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
<script src="/nxt/crud/vendors/@coreui/icons/js/svgxuse.min.js"></script>
<script src="/nxt/crud/vendors/@coreui/utils/js/coreui-utils.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
@yield('script')

</body>
</html>
