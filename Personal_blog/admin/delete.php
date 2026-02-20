<?php
    include "../config/db.php";
    $id=$_GET["delid"];
    $sql="DELETE FROM comments WHERE id=$id";
    if($con->query($sql)){
        header("Location:comment.php");
        exit();
    }
    else{
        echo "Error";
    }
    $con->close();
?>