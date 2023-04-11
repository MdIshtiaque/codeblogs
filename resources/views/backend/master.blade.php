<!DOCTYPE html>

<html lang="en" class="light">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rubick admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Dashboard - Rubick - Tailwind HTML Admin Template</title>
    <!-- BEGIN: CSS Assets-->
    @include('backend.layouts.style')
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="py-5">
<!-- BEGIN: Mobile Menu -->
@include('backend.inc.mobile_menu')
<!-- END: Mobile Menu -->
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('backend.inc.sidebar')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('backend.inc.topbar')
        <!-- END: Top Bar -->
        @yield('content')
    </div>
    <!-- END: Content -->
</div>
<!-- BEGIN: Dark Mode Switcher-->
@include('backend.layouts.dark_mode_switcher')
<!-- END: Dark Mode Switcher-->

<!-- BEGIN: JS Assets-->
@include('backend.layouts.scripts')
<!-- END: JS Assets-->
</body>
</html>
