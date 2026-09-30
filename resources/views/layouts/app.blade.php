<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Portal PWL' ?></title>

    <!-- Google Fonts (Plus Jakarta Sans & Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU90FeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEWIH" crossorigin="anonymous">
    
    <!-- FontAwesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom Professional Rose Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Inline Fallback Layout & Bullet Reset -->
    <style>
        *, *::before, *::after { box-sizing: border-box; }
        ul, ol { list-style: none !important; padding-left: 0 !important; margin: 0 !important; }
        a { text-decoration: none !important; }
        body { font-family: 'Plus Jakarta Sans', 'Inter', sans-serif; background: linear-gradient(180deg, #fdf2f8 0%, #faf5f8 40%, #f8fafc 100%) fixed; color: #334155; min-height: 100vh; display: flex; flex-direction: column; }
        .container-centered { width: 100%; max-width: 960px; margin: 0 auto; padding: 0 1.5rem; }
        .nav-content { display: flex !important; flex-direction: row !important; align-items: center !important; justify-content: space-between !important; width: 100%; }
        .nav-links { display: flex !important; flex-direction: row !important; align-items: center !important; gap: 0.5rem; margin: 0 !important; }
        .form-control-clean, .form-select-clean { display: block !important; width: 100% !important; }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Modular Navbar Component -->
    @include('components.navbar')

    <!-- Main Centered Content Container -->
    <main class="py-4 py-lg-5 flex-shrink-0">
        <div class="container-centered">
            @yield('content')
        </div>
    </main>

    <!-- Modular Footer Component -->
    @include('components.footer')

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY31HB60NNkmXc5s9fDVZLESAAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
