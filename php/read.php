<?php

include '../database/db_process.php' ;

$query = "SELECT * FROM users ORDER BY u_id DESC" ;

$res = dbSelect($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/readStyle.css">
</head>
<body>
    
    <div class="container">
        <div class="box">
            <h4 class="display-4 text-center">Read</h4><br>

            <?php if(isset($_GET['success'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_GET['success']; ?>
            </div> 
            <?php } ?>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    while ($data = $res->fetch()) {
                    ?>
                    <tr>
                        <th scope="col"><?php echo ++$i ; ?></th>
                        <td><?php echo $data['u_name']; ?></td>
                        <td><?php echo $data['u_email']; ?></td>
                        <td><?php echo $data['u_password']; ?></td>
                        <td><a href="update.php?id=<?=$data['u_id']?>"
                               class="btn btn-success">Update</a></td>
                    </tr>
                    <?php
                    }
                    $res->closeCursor();
                    ?>
                </tbody>
            </table>

            <div class="link-right">
                <a href="../index.php" class="link-primary">Create</a>
            </div>
        </div>
    </div>

</body>
</html>