<!-- Ví dụ trong layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    
</head>
<body>
    {{-- @include('partials.admin.header')
    @include('partials.admin.sidebar') --}}

    <main>
        @yield('content')
    </main>

    {{-- @include('partials.admin.footer') --}}
    
    @stack('scripts')
</body>
</html>
