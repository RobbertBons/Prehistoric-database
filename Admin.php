<?php
require_once 'partials/header.php';
?>

<head>
    <link rel="stylesheet" type="text/css" href="css/Admin.css">
</head>

<section class="title">
    <h2>Admin panel</h2>
</section>

<section class="grid-container">
    <h1>Creatures or plants display</h1>
    <article class="button-container">
        <a href="items/add.php" class="button">Add a plant or creature</a>
    </article>

    <article class="button-container">
         <a href="items/delete.php" class="button">Delete a plant or creature</a>
    </article>

    <article class="button-container">
         <a href="items/show.php" class="button">Show a plant or creature</a>
    </article>

    <article class="button-container">
         <a href="items/edit.php" class="button">Edit a plant or creature</a>
    </article>
</section>

<?php
require_once 'partials/footer.php'
?>