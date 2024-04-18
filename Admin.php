<?php
require_once 'partials/header.php';
?>

<head>
    <link rel="stylesheet" type="text/css" href="css/Admin.css">
</head>

<section class="title">
    <h2>Admin panel</h2>
</section>

<section class ="container">
    <section class="grid-container">
        <article class="creatures">
            <h1>Creatures or plants display</h1>
        </article>
        
        <article class="button-container">
            <a href="items/add.php" class="button">Add</a>
        </article>

        <article class="button-container">
            <a href="items/delete.php" class="button">Delete</a>
        </article>

        <article class="button-container">
            <a href="items/show.php" class="button">Show</a>
        </article>

        <article class="button-container">
            <a href="items/edit.php" class="button">Edit</a>
        </article>
    </section>

    <section class="grid-container">
        <h1>User display</h1>
    </section>
</section>

<?php
require_once 'partials/footer.php'
?>