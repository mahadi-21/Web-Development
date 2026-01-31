<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - Student Management System</title>
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
            background-color: #f4f6f9;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 260px;
            background: linear-gradient(180deg, #1e3c72 0%, #2a5298 100%);
            padding: 20px 0;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            overflow-y: auto;
            z-index: 1000;
        }

        .sidebar::-webkit-scrollbar {
            width: 6px;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: rgba(255,255,255,0.3);
            border-radius: 3px;
        }

        .sidebar-header {
            padding: 0 20px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            margin-bottom: 20px;
        }

        .sidebar-header h3 {
            color: #fff;
            font-size: 20px;
            font-weight: 600;
            margin: 0;
        }

        .sidebar-header p {
            color: rgba(255,255,255,0.7);
            font-size: 12px;
            margin: 5px 0 0;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
        }

        .sidebar-menu li {
            margin: 5px 0;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: all 0.3s;
            border-left: 3px solid transparent;
        }

        .sidebar-menu a:hover {
            background: rgba(255,255,255,0.1);
            color: #fff;
            border-left-color: #fff;
        }

        .sidebar-menu a.active {
            background: rgba(255,255,255,0.15);
            color: #fff;
            border-left-color: #ffc107;
        }

        .sidebar-menu a i {
            margin-right: 12px;
            width: 20px;
            text-align: center;
            font-size: 16px;
        }

        .main-content {
            margin-left: 260px;
            padding: 20px;
            min-height: 100vh;
        }

        .top-bar {
            background: #fff;
            padding: 15px 25px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            margin-bottom: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .top-bar h4 {
            margin: 0;
            color: #333;
            font-size: 22px;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid #1e3c72;
        }

        .content-area {
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .btn-primary {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-260px);
                transition: transform 0.3s;
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }

            .mobile-toggle {
                display: block !important;
            }
        }

        .mobile-toggle {
            display: none;
            position: fixed;
            bottom: 20px;
            left: 20px;
            z-index: 1001;
            background: #1e3c72;
            color: #fff;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: none;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
    </style>
    @yield('styles')
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h3><i class="fas fa-graduation-cap"></i> SMS Admin</h3>
            <p>Student Management System</p>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.students.index') }}" class="{{ request()->routeIs('admin.students.index') ? 'active' : '' }}">
                    <i class="fas fa-users"></i>
                    <span>All Students</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.students.manage') }}" class="{{ request()->routeIs('admin.students.manage') ? 'active' : '' }}">
                    <i class="fas fa-user-edit"></i>
                    <span>Manage Student</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.students.classwise') }}" class="{{ request()->routeIs('admin.students.classwise') ? 'active' : '' }}">
                    <i class="fas fa-layer-group"></i>
                    <span>Class Wise Students</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.students.admission') }}" class="{{ request()->routeIs('admin.students.admission') ? 'active' : '' }}">
                    <i class="fas fa-file-alt"></i>
                    <span>Admission Applications</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.students.admission.result') }}" class="{{ request()->routeIs('admin.students.admission.result') ? 'active' : '' }}">
                    <i class="fas fa-clipboard-check"></i>
                    <span>Publish Admission Results</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.students.add') }}" class="{{ request()->routeIs('admin.students.add') ? 'active' : '' }}">
                    <i class="fas fa-user-plus"></i>
                    <span>Add New Student</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.students.results.manage') }}" class="{{ request()->routeIs('admin.students.results.manage') ? 'active' : '' }}">
                    <i class="fas fa-chart-line"></i>
                    <span>Manage Results</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.students.results.send') }}" class="{{ request()->routeIs('admin.students.results.send') ? 'active' : '' }}">
                    <i class="fas fa-envelope"></i>
                    <span>Send Results via Email</span>
                </a>
            </li>
            <li>
                <a href="" class="{{ request()->routeIs('admin.login') ? 'active' : '' }}">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </aside>

    <!-- Mobile Toggle Button -->
    <button class="mobile-toggle" id="mobileToggle">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Main Content -->
    <main class="main-content">
        <div class="top-bar">
            <h4>@yield('page-title', 'Dashboard')</h4>
            <div class="user-info">
                <img src="https://ui-avatars.com/api/?name=Admin+User&background=1e3c72&color=fff" alt="Admin">
                <div>
                    <strong>Admin User</strong>
                    <small class="d-block text-muted">Administrator</small>
                </div>
            </div>
        </div>

        <div class="content-area">
            @yield('content')
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Mobile sidebar toggle
        const mobileToggle = document.getElementById('mobileToggle');
        const sidebar = document.getElementById('sidebar');

        if (mobileToggle) {
            mobileToggle.addEventListener('click', function() {
                sidebar.classList.toggle('active');
            });
        }

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            if (window.innerWidth <= 768) {
                if (!sidebar.contains(event.target) && !mobileToggle.contains(event.target)) {
                    sidebar.classList.remove('active');
                }
            }
        });
    </script>
    @yield('scripts')
</body>
</html>