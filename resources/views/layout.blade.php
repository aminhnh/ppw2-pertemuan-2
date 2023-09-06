<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <!-- Konten header -->
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <!-- Konten footer -->
    </footer>
    <script src="js/script.js"></script>
</body>
</html>