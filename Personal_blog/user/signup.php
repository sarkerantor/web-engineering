<?php 
include "../config/db.php";

if(isset($_POST['signup'])){
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $password=$_POST['password'];
    $check = $con->query("SELECT * FROM user WHERE email='$email'");
    if($check->num_rows > 0){
        $error = "Email already exists!";
    } else {
        $sql="INSERT INTO user(name,email,password) VALUES('$name','$email','$password')";
        if($con->query($sql)){
            header("Location: login.php");
            exit();
        }
    }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: linear-gradient(135deg,#4e73df,#1cc88a);">

<div class="container">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-5">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-5">
                    <h2 class="text-center mb-4 text-primary">Create Account</h2>

                    <?php if(isset($error)): ?>
                        <div class="alert alert-danger text-center">
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>

                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control rounded-3" placeholder="Enter your name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control rounded-3" placeholder="Enter your email" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control rounded-3" placeholder="Enter password" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" name="signup" class="btn btn-success rounded-3">
                                Sign Up
                            </button>
                        </div>
                    </form>

                    <p class="text-center mt-3">
                        Already have an account? 
                        <a href="login.php" class="text-decoration-none">Login here</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
