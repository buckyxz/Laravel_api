<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Diğer head içeriği -->
</head>
<body>
    <div id="root"></div>
    <script src="{{ asset('js/app.js') }}"></script> <!-- Laravel mix tarafından üretilen JS dosyası -->
</body>
</html>