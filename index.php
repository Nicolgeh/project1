<?php 
    include 'path.php';
    include_once 'app/controllers/topics.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Blog</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/70351fc90b.js" crossorigin="anonymous"></script>
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap');
    </style>
</head>

<body>
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous">
    </script>
    <!-- Header -->
    <?php include_once('assets/piece/header.php'); ?>
    <!-- Carousel -->
    <div class="container">
        <div class="row">
            <h2 class="carousel-title">Top blogs</h2>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/first_image_carousel.jpg" class="img-fluidd-block w-100 " alt="...">
                    <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                        <h5><a href="">State 1</a></h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/second_image_carousel.jpeg" class="img-fluid d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                        <h5><a href="">State 2</a></h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/third_image_carousel.png" class="img-fluidd-block w-100 img-fluid"  alt="...">
                    <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                        <h5><a href="">State 3</a></h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</body>

<!-- MAIN -->
<div class="container">
    <div class="content row">
        <!--MAIN CONTENT-->
        <div class="main-content col-md-9 col-12">
            <h2>Latest news</h2>
            <?php foreach($posts as $key => $value): ?>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/third_image_carousel.png" alt="main-content_1" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="/single.php?id_post=<?= $value['id']; ?>"><?= $value['title']; ?></a>
                    </h3>
                    <i class="far fa-user"><?= selectOne('users', ['id' => $value['id_user']])['username']; ?></i>
                    <i class="far fa-calendar"><?= $value['created_date']; ?></i>
                    <p class="prewiew-text">
                        <?= $value['content']; ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <!--Sidebar content-->
        <div class="sidebar col-md-3 col-12">
            <div class="section search">
                <h3>Search</h3>
                <form action="/" method="post"> 
                    <input type="text" name="search-term" class="text-input" placeholder="Search...">
                </form>
            </div>

            <?php include 'assets/piece/sidebar.php'; ?>

        </div>
    </div>
</div>

<!--Footer-->
<?php include_once('assets/piece/footer.php'); ?>
</html>