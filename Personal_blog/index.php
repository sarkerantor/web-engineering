<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal Blog Website System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #4e73df, #1cc88a);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .main-card {
            border-radius: 15px;
        }
        .option-card {
            transition: 0.3s ease;
            border-radius: 12px;
        }
        .option-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card main-card shadow-lg p-5 text-center">
        <h2 class="fw-bold text-primary mb-3">Personal Blog Website System</h2>
        <p class="text-muted mb-4">Choose Your Category</p>
        <div class="row">
            <!-- Admin Option -->
            <div class="col-md-6 mb-4">
                <a href="admin/login.php" class="text-decoration-none">
                    <div class="card option-card shadow p-4">
                        <i class="fa-solid fa-user-shield fa-3x text-danger mb-3"></i>
                        <h4 class="fw-bold text-dark">Admin Panel</h4>
                        <p class="text-muted">Manage website content & users</p>
                        <button class="btn btn-danger px-4">Login as Admin</button>
                    </div>
                </a>
            </div>
            <!-- User Option -->
            <div class="col-md-6 mb-4">
                <a href="user/login.php" class="text-decoration-none">
                    <div class="card option-card shadow p-4">
                        <i class="fa-solid fa-user fa-3x text-primary mb-3"></i>
                        <h4 class="fw-bold text-dark">User Panel</h4>
                        <p class="text-muted">Read blogs & manage profile</p>
                        <button class="btn btn-primary px-4">Login as User</button>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
