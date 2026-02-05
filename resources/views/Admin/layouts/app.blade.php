<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            overflow: hidden;
        }
        .sidebar {
            width: 260px;
            height: 100vh;
            overflow-y: auto;
        }
        .content {
            height: calc(100vh - 60px);
            overflow-y: auto;
            background: #f8f9fa;
        }
        .topbar {
            height: 60px;
        }
        .nav-link:hover {
            background: rgba(255,255,255,0.1);
        }
    </style>
</head>
<body>

<div class="d-flex">

    <!-- SIDEBAR -->
    <aside class="sidebar bg-dark text-white p-3">
        <h4 class="text-center mb-4">Admin Panel</h4>

        <ul class="nav flex-column gap-1">
            <li><a href="{{ route('admin.dashboard') }}" class="nav-link text-white"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a></li>
            <li><a href="{{ route('admin.hero.index') }}" class="nav-link text-white"><i class="bi bi-image me-2"></i>Hero Section</a></li>
            <li><a href="{{ route('admin.about.index') }}" class="nav-link text-white"><i class="bi bi-info-circle me-2"></i>About Us</a></li>
            <li><a href="{{ route('admin.services.index') }}" class="nav-link text-white"><i class="bi bi-list-check me-2"></i>Services</a></li>
            <li><a href="{{ route('admin.pricing.index') }}" class="nav-link text-white"><i class="bi bi-currency-rupee me-2"></i>Pricing</a></li>
            <li><a href="{{ route('admin.gallery.index') }}" class="nav-link text-white"><i class="bi bi-images me-2"></i>Gallery</a></li>
            <li><a href="{{ route('admin.teams.index') }}" class="nav-link text-white"><i class="bi bi-people me-2"></i>Team Member</a></li>
            <li><a href="{{ route('admin.testimonials.index') }}" class="nav-link text-white"><i class="bi bi-chat-quote me-2"></i>Testimonial</a></li>
            <li><a href="{{ route('admin.blogs.index') }}" class="nav-link text-white"><i class="bi bi-journal-text me-2"></i>Beauty Blog</a></li>
            <li><a href="{{ route('admin.contacts.index') }}" class="nav-link text-white"><i class="bi bi-envelope me-2"></i>Contact</a></li>
            <li><a href="{{ route('admin.footer.index') }}" class="nav-link text-white"><i class="bi bi-grid me-2"></i>Footer-content</a></li>
        </ul>
        </ul>
    </aside>

    <!-- MAIN AREA -->
    <div class="flex-grow-1">

        <!-- TOP BAR -->
        <nav class="topbar d-flex justify-content-between align-items-center px-4 border-bottom bg-white">
            <h5 class="mb-0 fw-semibold">Admin Dashboard</h5>

            <a href="{{ route('admin.logout') }}" class="btn btn-outline-danger btn-sm">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
        </nav>

        <!-- PAGE CONTENT -->
        <main class="content p-4">
            @yield('content')
        </main>

    </div>
</div>

</body>
</html>
