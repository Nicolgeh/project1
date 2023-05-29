<?php
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
                    <a href="create.php" class="col-2 btn btn-success">Add user</a>
                    <span class="col-1"></span>
                    <a href="index.php" class="col-3 btn btn-warning">Manage users</a>
                </div>
                <div class="row title-table">
                    <h2>Manage users</h2>
                    <div class="col-1">ID</div>
                    <div class="col-5">Login</div>
                    <div class="col-2">Role</div>
                    <div class="col-4">Manage</div>
                </div>
                <?php foreach($allUsers as $key => $value):  ?>
                <div class="row post">
                    <div class="id col-1"><?= $key + 1; ?></div>
                    <div class="title col-5"><?= $value['username']; ?></div>
                    <div class="author col-2"><?php if($value['admin'] == 0): echo "User"; else: echo  "Admin"; endif; ?></div>
                    <div class="edit col-2"><a href="edit.php?id=<?=$value['id']; ?>">Edit</a></div>
                    <div class="del col-2"><a href="edit.php?del_id=<?=$value['id']; ?>">Delete</a></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!--Footer-->
    <?php include_once('../../assets/piece/footer.php'); ?>

</html>