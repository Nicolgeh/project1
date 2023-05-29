<?php 
    include 'app/database/db.php';
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
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
    <!-- Header -->
    <?php include_once('assets/piece/header.php');?> 


    <!-- MAIN -->
    <div class="container">
        <div class="content row">
            <!--MAIN CONTENT-->
            <div class="main-content col-md-9 col-12">
                <h2>TITLE</h2>
                <div class="single_post row">
                    <div class="img col-12">
                        <img src="assets/images/third_image_carousel.png" alt="main-content_1" class="img-thumbnail">
                    </div>
                    <div class="single_post_text col-12">
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
                            libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend
                            leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum
                            sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt
                            condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in
                            turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor
                            neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi,
                            tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
                            libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend
                            leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum
                            sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt
                            condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in
                            turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor
                            neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi,
                            tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
                            libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend
                            leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum
                            sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt
                            condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in
                            turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor
                            neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi,
                            tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                    </div>
                </div>
            </div>
            <!--Sidebar content-->
            <div class="sidebar col-md-3 col-12">
                <div class="section search">
                    <h3>Search</h3>
                    <form action="/" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>

                <div class="section topics">
                    <h3>Topics</h3>
                    <ul>
                        <li><a href="#">Poems</a></li>
                        <li><a href="#">Quotes</a></li>
                        <li><a href="#">Fiction</a></li>
                        <li><a href="#">Biography</a></li>
                        <li><a href="#">Motivation</a></li>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="#">Life Lessons</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include_once('assets/piece/footer.php');?>

</html>