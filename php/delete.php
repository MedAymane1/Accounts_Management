<?php

if(isset($_GET['id'])) {
    include '../database/db_process.php' ;
    include 'methods.php' ;

    $id = validate($_GET['id']);

    $query = "DELETE FROM users WHERE u_id=$id";
    $result = dbProcess($query);
    
    if($result)
        header("location: read.php?success=Successfully Deleted");
}
?>