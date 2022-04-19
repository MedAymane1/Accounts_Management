<?php

session_start();

if(isset($_POST['create'])) {

    include '../database/db_process.php' ;
    include 'methods.php' ;

    $_SESSION['name'] = $name = validate($_POST['name']);
    $_SESSION['email'] = $email = validate($_POST['email']);
    $paswd = validate($_POST['paswd']);

    if(empty($name))
        header("location: ../index.php?error=Name is required");

    elseif(empty($email))
        header("location: ../index.php?error=Email is required");

    elseif(empty($paswd))
        header("location: ../index.php?error=Password is required");
        
    else {
        $query = "INSERT INTO users(u_name, u_email, u_password)
                  VALUES ('$name', '$email', '$paswd')" ;
        dbProcess($query);
        header("location: read.php?success=Successfully Created");
    }
}