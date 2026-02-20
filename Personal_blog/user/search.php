<?php

if(isset($_GET['search'])){
    $search = trim($_GET['search']);
    $new = strtolower($search);
    if($new == "html"){
        header("Location: forhtml.php");
        exit();
    }
    elseif($new == "css"){
        header("Location: forcss.php");
        exit();
    }
    elseif($new == "php"){
        header("Location: forphp.php");
        exit();
    }
    elseif($new == "sql" || $new == "mysql"){
        header("Location: forsql.php");
        exit();
    }
    elseif($new == "bootstrap" || $new == "bs"){
        header("Location: forbootstrap.php");
        exit();
    }
    elseif($new == "javascript" || $new == "js"){
        header("Location: forjs.php");
        exit();
    }
    else{
        header("Location: outcontent.php");
        exit();
    }
}
?>
