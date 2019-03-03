<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <link rel="stylesheet" href="{{ asset('admin/dist/admin.style.min.css') }}"/>
</head>
<body>

<div class="container-scroller">

    @include('layouts.admin.sidebar-top')

    <div class="container-fluid page-body-wrapper">
        <div class="row row-offcanvas row-offcanvas-right">

            @include('layouts.admin.sidebar-left')

            <div class="content-wrapper">
                @yield('content')
            </div>

            @include('layouts.admin.footer')
        </div>
    </div>
</div>

<script src="{{ asset('admin/dist/admin.script.min.js') }}"></script>
</body>
</html>
