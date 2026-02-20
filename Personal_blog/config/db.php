<?php
        $server="localhost";
        $user="root";
        $password="";
        $dbname="blogdb";
        $con = new mysqli($server,$user,$password,$dbname);
        if($con->connect_error){
            die("Database Error");
        }
?>
