<?php 
include('app/controllers/users.php');

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
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap');
    </style>
</head>

<body>
    <!-- Header -->
    <?php include_once('assets/piece/header.php'); ?>

    <!-- Main form -->
    <div class="container reg_form">
        <form class="row justify-content-center" method="post" action="reg.php">
            <h2 class="reg_from_h2" style="text-align: center; margin: 30px;">Sign Up Form</h2>
            <div class="form-group mb-3 col-12 col-md-4 err">
                <p><?= $errMsg ?></p>
            </div>
            <div class="w-100"></div>
            <div class="form-group mb-3 col-12 col-md-4">
                <label for="exampleInputEmail1">Your login</label>
                <input name="login" value="<?= $login ?>" type="text" required class="form-control" aria-describedby="emailHelp" placeholder="Enter your login">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="w-100"></div>
            <div class="form-group mb-3 col-12 col-md-4">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" value="<?= $email ?>" type="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="w-100"></div>
            <div class="form-group mb-3 col-12 col-md-4">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" required type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="w-100"></div>
            <div class="form-group mb-3 col-12 col-md-4">
                <label for="exampleInputPassword1">Repeat password</label>
                <input name="repeat_password" type="password" class="form-control" id="exampleInputPassword2" placeholder="Repeat password">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4" >
                <button type="submit" name="button-reg" class="btn btn-secondary col-12 col-md-4" style="float: left;">Sign Up</button>
                <h3><a href="/auth.php" class="col-12 col-md-4" style="float: right;">Sign In</a></h3>
            </div>

        </form>
    </div>

    <!-- Footer -->
    <?php include_once('assets/piece/footer.php'); ?>
</body>

</html>