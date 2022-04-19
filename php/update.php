<?php
include '../database/db_process.php' ;

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if( isset($_POST['update']) ) {
    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $paswd = validate($_POST['paswd']);

    $query = "UPDATE users
            SET u_name='$name', u_email='$email', u_password='$paswd'
            WHERE u_id= $id
            ";
    dbProcess($query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
    <div class="container">
        <form action="update.php" method="POST">
            <h4 class="display-4 text-center">Update</h4><hr><br>

            <?php if(isset($_GET['error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error']; ?>
            </div> 
            <?php } ?>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text"
                       class="form-control"
                       id="name"
                       name="name"
                       placeholder="Enter name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email"
                       class="form-control"
                       id="email"
                       name="email"
                       placeholder="Enter email">
            </div>

            <div class="mb-3">
                <label for="paswd" class="form-label">Password</label>
                <input type="password" class="form-control" id="paswd"
                       name="paswd" placeholder="Enter password">
            </div>

            <button type="submit" class="btn btn-primary" name="update">Update</button>
            <a href="read.php" class="link-primary">View</a>
        </form>
    </div>
</body>
</html>