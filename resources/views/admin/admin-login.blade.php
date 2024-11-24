<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #d9f2d9, #bde4bd);
            font-family: 'Roboto Slab', serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .form-signin {
            width: 100%;
            max-width: 500px;
            padding: 40px;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }
        .form-signin h2 {
            font-weight: 500;
            color: #4CAF50;
        }
        .form-signin .form-control {
            padding-left: 45px;
            height: 50px;
            font-size: 16px;
        }
        .form-signin .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #4CAF50;
            font-size: 20px;
        }
        .form-group {
            position: relative;
        }
        .btn-custom {
            background-color: #4CAF50;
            color: #fff;
            font-weight: bold;
            border: none;
            height: 50px;
            font-size: 18px;
            transition: all 0.3s ease-in-out;
        }
        .btn-custom:hover {
            background-color: #3e8e41;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        .alert {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <form action="/adminlogin" method="POST" class="form-signin">
        @csrf
        <h2 class="text-center mb-4">Login</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group mb-4">
            <i class="bi bi-person-fill input-icon"></i>
            <input type="text" name="username" id="nipUsername" class="form-control" placeholder="Username" required>
        </div>
        <div class="form-group mb-4">
            <i class="bi bi-lock-fill input-icon"></i>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-custom w-100">Login</button>
    </form>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
