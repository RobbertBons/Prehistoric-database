
<head>
<link rel="stylesheet" type="text/css" href="css/header.css">
</head>

<header class="header">
    <img src="img/image2.png" class="logo" alt="">
        <ul class ="nav">
            <a href="index.php">Home</a>
            <a href="">About</a>
            <a href="">Forum</a>
            <a href="">Games</a>
            <a href="">Paleo+</a>

        </ul>
            <input type="text" class="search-bar" placeholder="Search">
        <ul>
            <?php
            session_start();
            if (!empty($_SESSION['username'])) {
                // If the user is logged in, show the logout button
                echo '<a href="Account.php" class="button"><i class="fas fa-user"></i></a>';
                echo '<a href="logout.php" class="button">Logout</a>';
               
               
            } else {
                echo '<a href="login.php" class="button">Login</a>';
            }
            ?>
        </ul>
</header>
