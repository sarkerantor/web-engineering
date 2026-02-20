<?php
    include "../config/db.php";
    if(isset($_POST["submit"])){
        $email = $_POST['email'];
        $pass  = $_POST['password'];
        $sql="SELECT * FROM admin WHERE email='$email' AND password='$pass'";
        $result=$con->query($sql);
        if($result->num_rows>0){
            $row=$result->fetch_assoc();
            session_start();
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            header("Location:dashboard.php");
             exit();
        } else {
            $error = "Invalid Email or Password!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: linear-gradient(135deg,#667eea,#764ba2);">
<div class="container">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-5">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-5">
                    <h2 class="text-center mb-4 text-primary">Admin Login</h2>
                    <form method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" name="email" id="email" 
                                   class="form-control rounded-3" 
                                   placeholder="Enter admin email" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" 
                                   class="form-control rounded-3" 
                                   placeholder="Enter password" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg rounded-3">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
