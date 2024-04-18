<?php
    require_once ('partials/header.php');
?>

<head>
    <link rel="stylesheet" type="text/css" href="css/Account.css">
</head>

<article class="title">
    <?php
    // Check if the username session variable is set
    if (!empty($_SESSION['username'])) {
        // Display the welcome message
        echo 'Welkom ' . $_SESSION['username'] . ', je activiteiten worden bijgehouden.';
        // Display a form to show and edit user data
        echo '
        <form action="update_profile.php" method="POST">
            <label for="firstname">Firstname:</label>
            <input type="text" id="firstname" name="firstname" value="John"><br>

            <label for="lastname">Lastname:</label>
            <input type="text" id="lastname" name="lastname" value="Doe"><br>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" value="john@example.com"><br>

            <input type="submit" value="Save">
        </form>';
    } else {
        // If the user is not logged in, redirect them to the login page
        header("Location: login.php");
        exit; // Terminate the script to prevent further execution
    }
    ?>
    <a href="Admin.php" class="button">Admin panel</a>
</article>


<?php
    require_once ('partials/footer.php');
?>