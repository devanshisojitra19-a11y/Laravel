<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MediNest Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --accent-color: #099aa7;
            --sidebar-bg: #1f2f31;
        }
        body {
            background-color: #f7f9f9;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            width: 100%;
            max-width: 400px;
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-radius: 15px;
        }
        .btn-primary {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            padding: 12px;
            font-weight: bold;
        }
        .btn-primary:hover {
            background-color: #088a96;
            border-color: #088a96;
        }
        .brand-logo {
            color: var(--sidebar-bg);
            font-weight: bold;
            font-size: 2rem;
            text-align: center;
            margin-bottom: 30px;
        }
        .brand-logo span {
            color: var(--accent-color);
        }
    </style>
</head>
<body>
    <div class="login-card card p-4">
        <div class="brand-logo">MediNest <span>Admin</span></div>
        
        <form action="<?php echo e(url('/login')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('email')); ?>" required autofocus>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login to Dashboard</button>
        </form>
        
        <div class="text-center mt-4">
            <a href="<?php echo e(url('/')); ?>" class="text-muted text-decoration-none small">← Back to Website</a>
        </div>
    </div>
</body>
</html>
<?php /**PATH /var/www/laravel-implementation/resources/views/auth/login.blade.php ENDPATH**/ ?>