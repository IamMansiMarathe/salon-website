<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow" style="width:380px">
        <div class="card-body">
            <h4 class="text-center mb-4">Admin Login</h4>

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form method="POST" action="{{ route('admin.login') }}">
                @csrf

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <button class="btn btn-dark w-100">Login</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
