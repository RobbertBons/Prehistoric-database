<?php
 require_once 'partials/AdminHeader.php';
?>

<section class="title">
    <h1>Admin panel</h1>
</section>

<section class="grid-container">
    <h2>creature/plant display</h2>  
    <div class="button-container">
        <a href="items/add.php" class="button">Add</a>
        <a href="items/delete.php" class="button">Delete</a>
        <a href="items/edit.php" class="button">Edit</a>
        <a href="items/show.php" class="button">Show</a>
    </div>
    <h2>user display</h2>
    <div class="button-container">
        <div class="button">Button 1</div>
        <div class="button">Button 2</div>
        <div class="button">Button 3</div>
        <div class="button">Button 4</div>
    </div>
    <h2>category display</h2>
    <div class="button-container">
        <div class="button">Button 1</div>
        <div class="button">Button 2</div>
        <div class="button">Button 3</div>
        <div class="button">Button 4</div>
    </div>
    <h2>posts display</h2>
    <div class="button-container">
        <div class="button">Button 1</div>
        <div class="button">Button 2</div>
        <div class="button">Button 3</div>
        <div class="button">Button 4</div>
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
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    grid-gap: 20px; /* Adjust the grid gap to add space between grid items */
}

.button-container {
    display: grid;
    grid-template-columns: repeat(2, 2fr);
    align-items: center;
    justify-items: center; /* Center horizontally */
    margin-bottom: 20px; /* Add margin to create space between button containers */
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
  }

  .button:hover {
    background-color: #808080;
  }

  /* Centering the h1 within button-container */
  .button-container h1 {
    text-align: center;
    margin: 0; /* Remove default margin */
  }
</style>