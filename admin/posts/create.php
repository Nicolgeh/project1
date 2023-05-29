<?php
//include '../../app/database/db.php';
include '../../app/controllers/posts.php';
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
                    <a href="create.php" class="col-2 btn btn-success">Add post</a>
                    <span class="col-1"></span>
                    <a href="index.php" class="col-3 btn btn-warning">Manage post</a>
                </div>
                <div class="row title-table">
                    <h2>Add post</h2>
                </div>
                <div class="row add-post">
                    <div class="err">
                        <?= $errMsg; ?>
                    </div>
                    <form action="create.php" method="post" enctype="multipart/form-data">
                        <div class="col mb-4">
                            <input name="title" type="text" class="form-control" placeholder="Title" aria-label="Name state">
                        </div>
                        <div class="col mb-4">
                            <label for="editor" class="form-label">Text</label>
                            <textarea name="content" id="editor" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                        </div>
                        <div class="input-group col mb-4">
                            <input name="img" type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <select name="status" class="form-select mb-4" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <?php foreach($topics as $key => $value): ?>
                            <option value="<?= $value['id']; ?>"><?= $value['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="col-12">
                            <button name="create-post" class="btn btn-primary" type="submit">Save post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <?php include_once('../../assets/piece/footer.php'); ?>
    <!-- Visual editor to text area -->
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
    <script src="../../assets/js/scripts.js"></script>
</html>