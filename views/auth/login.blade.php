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
        
        <form action="{{ url('/login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus>
                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login to Dashboard</button>
        </form>
        
        <div class="text-center mt-4">
            <a href="{{ url('/') }}" class="text-muted text-decoration-none small">← Back to Website</a>
        </div>
    </div>
</body>
</html>
