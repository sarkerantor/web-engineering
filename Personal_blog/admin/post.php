<?php
    include "../config/db.php";
    if(isset($_POST["submit"])){
        $title = $_POST["title"];
        $topic = $_POST["topic"];
        $descr = $_POST["descr"];
        $stmt1 = $con->prepare("SELECT id FROM posts WHERE title=?");
        $stmt1->bind_param("s", $title);
        $stmt1->execute();
        $res1 = $stmt1->get_result();
        if($res1->num_rows > 0){
            $val1 = $res1->fetch_assoc();
            $id = $val1['id'];
            $stmt2 = $con->prepare("UPDATE posts SET topic=?, descr=? WHERE id=?");
            $stmt2->bind_param("ssi", $topic, $descr, $id);
            if($stmt2->execute()){
                header("Location: post.php");
                exit();
            } else {
                $error = "Update Failed!";
            }

        } else {
            $error = "Post Not Found!";
        }
        $con->close();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Post</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f4f6f9;">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-4">
                    <h3 class="text-center text-primary mb-4">Update Post</h3>
                    <?php if(isset($error)): ?>
                    <div class="alert alert-danger text-center">
                        <?php echo $error; ?>
                    </div>
                    <?php endif; ?>
                    <form method="post">
                        <div class="mb-3">
                            <label class="form-label">Topic Name</label>
                            <input type="text" name="topic" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Select Title</label>
                            <select name="title" class="form-select" required>
                                <option value="">Choose Title</option>
                                <option value="html">HTML</option>
                                <option value="css">CSS</option>
                                <option value="bootstrap">Bootstrap</option>
                                <option value="sql">MySQL</option>
                                <option value="php">PHP</option>
                                <option value="javascript">Javascript</option>
                            </select>
                        </div>
                        <div class="mb-4">
                        <label class="form-label">Description</label>
                        <textarea name="descr" rows="4" class="form-control" required></textarea>
                        </div>
                        <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-primary">
                        Update Post
                        </button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                    <a href="dashboard.php" class="btn btn-secondary">
                    Back To Dashboard
                    </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
