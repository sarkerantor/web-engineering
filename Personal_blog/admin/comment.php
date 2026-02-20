<?php
include "../config/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Comments List</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f8f9fa;">
<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">
            <h3 class="mb-4 text-primary text-center">All Comments</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Comment</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM comments";
                        $res = $con->query($sql);
                        while($val = $res->fetch_assoc()){
                            echo "<tr>";
                            echo "<td>".$val["id"]."</td>";
                            echo "<td>".$val["email"]."</td>";
                            echo "<td>".$val["coment"]."</td>";
                            echo "<td><a href='delete.php?delid=".$val['id']."'
                            class='btn btn-danger btn-sm'>Delete</a></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="text-center mt-3">
                <a href="dashboard.php" class="btn btn-primary px-4">
                    Back to Dashboard
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
