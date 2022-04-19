<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="container">
        <form action="php/create.php" method="POST">
            <h4 class="display-4 text-center">Create</h4><hr><br>

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
                       value="<?php
                                if(isset($_SESSION['name']))
                                echo $_SESSION['name'];
                              ?>"
                       placeholder="Enter name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email"
                       class="form-control"
                       id="email"
                       name="email"
                       value="<?php
                                if(isset($_SESSION['email']))
                                echo $_SESSION['email'];
                              ?>"
                       placeholder="Enter email">
            </div>

            <div class="mb-3">
                <label for="paswd" class="form-label">Password</label>
                <input type="password" class="form-control" id="paswd"
                       name="paswd" placeholder="Enter password">
            </div>

            <button type="submit" class="btn btn-primary" name="create">Create</button>
            <a href="php/read.php" class="link-primary">View</a>
        </form>
    </div>
</body>
</html>

<?php
session_destroy();
?>