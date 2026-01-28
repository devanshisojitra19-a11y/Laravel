<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - <?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        :root {
            --accent-color: #099aa7;
            --sidebar-bg: #1f2f31;
            --sidebar-hover: #099aa7;
            --text-color: #363f40;
        }
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f7f9f9;
        }
        .sidebar {
            height: 100vh;
            background-color: var(--sidebar-bg);
            color: white;
            width: 250px;
            position: fixed;
            transition: all 0.3s;
            display: flex;
            flex-direction: column;
        }
        .sidebar .nav-link {
            color: rgba(255,255,255,0.8);
            padding: 15px 20px;
            border-radius: 0;
            transition: all 0.3s;
        }
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            color: white;
            background-color: var(--sidebar-hover);
        }
        .sidebar .nav-link i {
            margin-right: 10px;
        }
        .sidebar-menu {
            flex-grow: 1;
        }
        .logout-container {
            padding: 20px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }
        .main-content {
            margin-left: 250px;
            padding: 30px;
        }
        .navbar-admin {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 15px 30px;
        }
        .card {
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border-radius: 10px;
        }
        .btn-primary {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
        }
        .btn-primary:hover {
            background-color: #088a96;
            border-color: #088a96;
        }
        .text-accent {
            color: var(--accent-color);
        }
        .action-btn {
            margin-right: 8px;
        }
        .btn-edit {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #000;
        }
        .btn-edit:hover {
            background-color: #e0a800;
            border-color: #e0a800;
            color: #000;
        }
        .btn-delete {
            background-color: #dc3545;
            border-color: #dc3545;
            color: #fff;
        }
        .btn-delete:hover {
            background-color: #c82333;
            border-color: #bd2130;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="p-4">
            <h4 class="text-white fw-bold">MediNest <span class="text-accent">Admin</span></h4>
        </div>
        <div class="sidebar-menu">
            <nav class="nav flex-column mt-3">
                <a class="nav-link <?php echo e(request()->routeIs('admin.dashboard') ? 'active' : ''); ?>" href="<?php echo e(route('admin.dashboard')); ?>">
                    <i class="bi bi-speedometer2"></i> Dashboard
                </a>
                <a class="nav-link <?php echo e(request()->routeIs('admin.settings*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.settings')); ?>">
                    <i class="bi bi-gear"></i> Settings
                </a>
                <a class="nav-link <?php echo e(request()->routeIs('admin.contact-us*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.contact-us')); ?>">
                    <i class="bi bi-envelope"></i> Contact Us
                </a>
            </nav>
        </div>
        <div class="logout-container">
            <form action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-outline-light w-100">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </form>
        </div>
    </div>

    <div class="main-content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold"><?php echo $__env->yieldContent('title'); ?></h2>
            <div class="user-info">
                <span class="text-muted">Welcome, </span>
                <span class="fw-bold"><?php echo e(auth()->user()->name); ?></span>
            </div>
        </div>

        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH /var/www/laravel-implementation/resources/views/admin/layout.blade.php ENDPATH**/ ?>