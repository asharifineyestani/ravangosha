<!DOCTYPE html>
<html lang="en" dir="rtl">

<!-- Mirrored from flixtv.volkovdesign.com/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Mar 2024 08:55:02 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    @include('layouts.styles')

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="icon/favicon-32x32.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Dmitry Volkov">
    <title>FlixTV – Movies & TV Shows, Online cinema HTML Template</title>

</head>

<body>
@include('layouts.header')
@yield('content')
{{--@include('layouts.footer')--}}
<button class="afc-theme-switch afc-theme-switch--1" type="button">
		<span>
			<svg width="17" height="17" viewBox="0 0 17 17">
				<g>
				</g>
				<path
                    d="M8.5 5c-1.93 0-3.5 1.57-3.5 3.5s1.57 3.5 3.5 3.5 3.5-1.57 3.5-3.5-1.57-3.5-3.5-3.5zM8.5 11c-1.378 0-2.5-1.122-2.5-2.5s1.122-2.5 2.5-2.5 2.5 1.122 2.5 2.5-1.122 2.5-2.5 2.5zM9 4h-1v-3h1v3zM8 13h1v3h-1v-3zM16 8v1h-3v-1h3zM4 9h-3v-1h3v1zM12.036 5.671l-0.707-0.707 2.121-2.121 0.707 0.707-2.121 2.121zM4.964 11.329l0.707 0.707-2.121 2.121-0.707-0.707 2.121-2.121zM12.036 11.329l2.121 2.121-0.707 0.707-2.121-2.121 0.707-0.707zM4.964 5.671l-2.121-2.121 0.707-0.707 2.121 2.121-0.707 0.707z"></path>
			</svg>
		</span>
</button>

<!-- JS -->
@include('layouts.scripts')
</body>

<!-- Mirrored from flixtv.volkovdesign.com/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Mar 2024 08:55:42 GMT -->
</html>
