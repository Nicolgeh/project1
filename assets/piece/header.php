<?php  ?>
<!-- Header -->
    <header class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h1>
                        <a href="/">My blog</a> <!-- Logo -->
                    </h1>
                </div>
                <nav class="col-8"> <!-- Menu -->
                    <ul>
                        <li><a href="#">Main</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Service</a></li>

                        <li>
                            <?php if (isset($_SESSION['id'])) : ?>
                                <a href="#">
                                    <i class="fa-solid fa-user" style="color: #000000;"></i>
                                    <?php echo $_SESSION['login']; ?>
                                </a>
                                <ul>
                                    <?php if($_SESSION['admin']): ?>
                                        <li><a href="../admin/posts/index.php">Admin</a></li>
                                    <?php endif ?>
                                    <li><a href="../logout.php">Exit</a></li>
                                </ul>
                            <?php else : ?>
                                <a href="#">
                                    <i class="fa-solid fa-user" style="color: #000000;"></i>
                                    My cabinet
                                </a>
                                <ul>
                                    <li><a href="../auth.php">Sign In</a></li>
                                    <li><a href="../reg.php">Sign Up</a></li>
                                </ul>
                            <?php endif; ?>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>