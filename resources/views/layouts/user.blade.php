<!-- Ví dụ trong layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('partials.admin.header')
    @include('partials.admin.sidebar')

    <main>
        @yield('content')
    </main>

    @include('partials.admin.footer')
    @stack('scripts')
</body>
</html>
