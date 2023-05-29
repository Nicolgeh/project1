<?php
//
//session_start();
include '../../app/controllers/usersShow.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Blog</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/70351fc90b.js" crossorigin="anonymous"></script>
    <!-- Main CSS -->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap');
    </style>
</head>

<body>
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <!-- Header -->
    <?php include_once('../../assets/piece/header-admin.php'); ?>

    <div class="container">
        <div class="row">
        <?php include '../../assets/piece/sidebar-admin.php' ?>

            <div class="posts col-9">
                <div class="button row">
                    <a href="create.php" class="col-3 btn btn-success">Add categorie</a>
                    <span class="col-1"></span>
                    <a href="index.php" class="col-3 btn btn-warning">Manage categorie</a>
                </div>
                <div class="row title-table">
                    <h2>Update categorie</h2>
                </div>
                <div class="row add-post">
                    <div class="err" style="color: red;">
                        <?php echo $errMsg; ?>
                    </div>
                    <form action="create.php" method="post">
                    <input type="hidden" name="id" value="<?= $id;?>">
                        <div class="col">
                            <label for="exampleInputEmail1">Your login</label>
                            <input name="login" value="<?= $username; ?>" type="text" required class="form-control" aria-describedby="emailHelp" placeholder="Enter your login">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>

                        <div class="col">
                            <label for="exampleInputEmail1">Email address</label>
                            <input name="email" value="<?= $email; ?>" type="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>

                        <div class="col">
                            <label for="exampleInputPassword1">Password</label>
                            <input name="password" required type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="col">
                            <label for="exampleInputPassword1">Repeat password</label>
                            <input name="repeat_password" type="password" class="form-control" id="exampleInputPassword2" placeholder="Repeat password">
                        </div>
                        <select name="admin" class="form-select" aria-label="Default select example">
                            <option selected>Select Role</option>
                            <option value="0">User</option>
                            <option value="1">Admin</option>
                        </select>
                        <div class="col-12">
                            <button name="update-user" class="btn btn-primary" type="submit">Create user</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <?php include_once('../../assets/piece/footer.php'); ?>

</html>