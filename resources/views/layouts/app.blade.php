<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Modul 4 PWL' ?></title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU90FeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEWIH" crossorigin="anonymous">
    
    <!-- FontAwesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom Aesthetics CSS -->
    <style>
        :root {
            --font-main: 'Plus Jakarta Sans', sans-serif;
            --primary-gradient: linear-gradient(135deg, #4f46e5 0%, #6366f1 100%);
            --primary-color: #4f46e5;
            --primary-hover: #4338ca;
            --accent-glow: rgba(99, 102, 241, 0.15);
            --bg-canvas: #f8fafc;
        }

        body {
            font-family: var(--font-main);
            background-color: var(--bg-canvas);
            color: #1e293b;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navbar Styling */
        .custom-navbar {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
        }

        .brand-icon {
            width: 36px;
            height: 36px;
            background: var(--primary-gradient);
            color: white;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px var(--accent-glow);
        }

        .text-gradient {
            background: linear-gradient(135deg, #1e293b 0%, #475569 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .text-primary-accent {
            color: var(--primary-color);
            -webkit-text-fill-color: var(--primary-color);
        }

        .nav-link {
            font-weight: 500;
            color: #64748b;
            padding: 0.5rem 1rem !important;
            border-radius: 8px;
            transition: all 0.2s ease;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--primary-color);
            background-color: rgba(99, 102, 241, 0.08);
        }

        /* Buttons & Badges */
        .btn-gradient {
            background: var(--primary-gradient);
            color: white;
            border: none;
            transition: all 0.25s ease;
        }

        .btn-gradient:hover {
            background: linear-gradient(135deg, #4338ca 0%, #4f46e5 100%);
            color: white;
            transform: translateY(-1px);
            box-shadow: 0 6px 20px var(--accent-glow);
        }

        /* Custom Cards */
        .custom-card {
            border-radius: 16px;
            border: 1px solid rgba(226, 232, 240, 0.8);
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.04);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        /* Avatar Circle */
        .avatar-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #e0e7ff 0%, #c7d2fe 100%);
            color: #3730a3;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.95rem;
            box-shadow: inset 0 0 0 2px rgba(255,255,255,0.6);
        }

        .bg-purple-subtle {
            background-color: #f3e8ff !important;
        }
        .text-purple {
            color: #7e22ce !important;
        }
        .border-purple-subtle {
            border-color: #e9d5ff !important;
        }

        .fs-7 {
            font-size: 0.825rem;
        }

        .status-indicator {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            display: inline-block;
        }

        /* Footer */
        .custom-footer {
            background-color: white;
            border-top: 1px solid rgba(226, 232, 240, 0.8);
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Modular Navbar Component -->
    @include('components.navbar')

    <!-- Main Content Container -->
    <main class="py-4 py-lg-5 flex-shrink-0">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Modular Footer Component -->
    @include('components.footer')

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY31HB60NNkmXc5s9fDVZLESAAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
