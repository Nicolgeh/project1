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
                    <li>
                            <a href="#">
                                <i class="fa-solid fa-user" style="color: #000000;"></i>
                                <?php echo $_SESSION['login']; ?>
                            </a>
                    </li>
                    <li>
                        <a href="../../../logout.php">Exit</a>
                    </li>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>