<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Portal') - Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            padding-top: 70px;
        }

        .navbar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 15px 0;
        }

        .navbar-brand {
            color: #fff !important;
            font-weight: 600;
            font-size: 24px;
        }

        .navbar-brand i {
            margin-right: 8px;
        }

        .navbar-nav .nav-link {
            color: rgba(255,255,255,0.9) !important;
            margin: 0 10px;
            padding: 8px 16px !important;
            border-radius: 6px;
            transition: all 0.3s;
            font-weight: 500;
        }

        .navbar-nav .nav-link:hover {
            background: rgba(255,255,255,0.1);
            color: #fff !important;
        }

        .navbar-nav .nav-link.active {
            background: rgba(255,255,255,0.2);
            color: #fff !important;
        }

        .navbar-nav .nav-link i {
            margin-right: 6px;
        }

        .user-dropdown {
            background: rgba(255,255,255,0.1);
            border-radius: 25px;
            padding: 5px 15px 5px 5px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #fff;
        }

        .user-dropdown img {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            border: 2px solid #fff;
        }

        .main-container {
            padding: 30px 0;
        }

        .content-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            padding: 30px;
            margin-bottom: 30px;
        }

        .page-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            padding: 40px 0;
            margin-bottom: 30px;
            border-radius: 12px;
        }

        .page-header h1 {
            margin: 0;
            font-size: 32px;
            font-weight: 600;
        }

        .page-header p {
            margin: 10px 0 0;
            opacity: 0.9;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            padding: 10px 24px;
            border-radius: 6px;
            font-weight: 500;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(102, 126, 234, 0.3);
        }

        .stat-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .stat-card h3 {
            font-size: 32px;
            font-weight: 600;
            margin: 10px 0;
        }

        .stat-card p {
            margin: 0;
            opacity: 0.9;
        }

        .footer {
            background: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            margin-top: 50px;
        }

        @media (max-width: 991px) {
            .navbar-nav {
                background: rgba(0,0,0,0.1);
                padding: 15px;
                border-radius: 8px;
                margin-top: 10px;
            }

            .navbar-nav .nav-link {
                margin: 5px 0;
            }
        }
    </style>
    @yield('styles')
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('student.profile') }}">
                <i class="fas fa-graduation-cap"></i>
                Student Portal
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" style="border: 1px solid #fff;">
                <span style="color: #fff;"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('student.profile') ? 'active' : '' }}" href="{{ route('student.profile') }}">
                            <i class="fas fa-user"></i> Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('student.results') ? 'active' : '' }}" href="{{ route('student.results') }}">
                            <i class="fas fa-chart-bar"></i> Results
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('student.apply') ? 'active' : '' }}" href="{{ route('student.apply') }}">
                            <i class="fas fa-file-alt"></i> Apply for Class
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('student.contact') ? 'active' : '' }}" href="{{ route('student.contact') }}">
                            <i class="fas fa-envelope"></i> Contact Admin
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle user-dropdown" href="#" role="button" data-bs-toggle="dropdown">
                            <img src="https://ui-avatars.com/api/?name=John+Doe&background=667eea&color=fff" alt="Student">
                            <span>John Doe</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('student.profile') }}"><i class="fas fa-user me-2"></i> My Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href=""><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-container">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Student Management System. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>