<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? '🌸 Portal Praktikum PWL 🌸' ?></title>

    <!-- Google Fonts (Fredoka & Nunito - Super Cute & Friendly Fonts) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU90FeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEWIH" crossorigin="anonymous">
    
    <!-- FontAwesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom Cute Aesthetics Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Inline Standalone Cute CSS Fallback -->
    <style>
        ul, ol { list-style: none !important; padding-left: 0 !important; margin: 0 !important; }
        a { text-decoration: none !important; }
        body { font-family: 'Nunito', 'Fredoka', sans-serif; background: linear-gradient(135deg, #fff5f8 0%, #f3e8ff 40%, #e0f2fe 100%) fixed; color: #475569; min-height: 100vh; display: flex; flex-direction: column; }
        h1, h2, h3, h4, h5, h6, .btn, .navbar-brand { font-family: 'Fredoka', 'Nunito', sans-serif; }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Modular Cute Navbar Component -->
    @include('components.navbar')

    <!-- Main Content Container with Animation -->
    <main class="py-4 py-lg-5 flex-shrink-0">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Modular Cute Footer Component -->
    @include('components.footer')

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY31HB60NNkmXc5s9fDVZLESAAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
