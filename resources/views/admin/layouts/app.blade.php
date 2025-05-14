<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords"
        content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">

    @include('admin.partials._links')

</head>

<body>

    @include('admin.partials._preloader')

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            @include('admin.partials._navbar')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('admin.partials._sidebar')

                    @yield('content')
                </div>
            </div>

        </div>
    </div>

    @include('admin.partials._scripts')
</body>

</html>
