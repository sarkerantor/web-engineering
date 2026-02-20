<?php 
include "../config/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f8f9fa;">
<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-5 text-center">
            <h1 class="mb-4 text-primary">Admin Dashboard</h1>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="logout.php" class="btn btn-danger px-4">Logout</a>
                <a href="post.php" class="btn btn-primary px-4">Add Post</a>
                <a href="comment.php" class="btn btn-success px-4">Check Comment</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
