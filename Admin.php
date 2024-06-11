<?php
 require_once 'partials/AdminHeader.php';
?>

<section class="title">
    <h1>Admin panel</h1>
</section>

<section class="grid-container">
    <div class="button-container">
        <a href="items/show.php" class="button">Creatures or plants</a>
    </div>
    <div class="button-container">
        <div class="button">User display</div>
    </div>
    <div class="button-container">
        <div class="button">Category</div>
    </div>
    <div class="button-container">
        <a href="posts/show.php" class="button">Posts</a>
    </div>

</section>

<style>
.title {
    display: flex;
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
    height: 100px; /* Set a specific height for the title section */
}

.title h1 {
    margin: 0; /* Remove default margin */
}
.grid-container {
    display: grid;
    grid-gap: 5px; /* Adjust the grid gap to add space between grid items */
}

.button-container {
    display: grid;
    grid-template-columns: repeat(1, 2fr);
    align-items: center;
    justify-items: center; /* Center horizontally */
    margin-bottom: 10px; /* Add margin to create space between button containers */
}

.button-container h2 {
    text-align: center; /* Center the text horizontally */
}

.button-container:nth-child(2n) {
    grid-row: 2;
}

.button {
    background-color: green;
    color: #fff;
    text-align: center;
    padding: 20px;
    cursor: pointer;
    transition: background-color 0.3s;
    border-radius: 10px;
  }

.button:hover {
    background-color: #808080;
  }

  /* Centering the h1 within button-container */
  .button-container h2 {
    text-align: center;
    margin: 0; /* Remove default margin */
  }
  h2 {
    align-items: center;
  }
</style>