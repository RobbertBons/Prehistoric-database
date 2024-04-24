<?php
 require_once 'partials/AdminHeader.php';
?>

<section class="title">
    <h1>Admin panel</h1>
</section>

<div class="button-container">
    <h2>creature/plant display</h2>  
      <a href="items/add.php" class="button">Add</a>
      <a href="items/delete.php" class="button">Delete</a>
      <a href="items/edit.php" class="button">Edit</a>
      <a href="items/show.php" class="button">show</a>
</div>
<div class="button-container">
    <h2>user display</h2>
    <div class="button">Button 1</div>
    <div class="button">Button 2</div>
    <div class="button">Button 3</div>
    <div class="button">Button 4</div>
</div>
<div class="button-container">
    <h2>category display</h2>
    <div class="button">Button 1</div>
    <div class="button">Button 2</div>
    <div class="button">Button 3</div>
    <div class="button">Button 4</div>
</div>
<div class="button-container">
    <h2>posts display</h2>
    <div class="button">Button 1</div>
    <div class="button">Button 2</div>
    <div class="button">Button 3</div>
    <div class="button">Button 4</div>
</div>

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

  .button-container {
    display: grid;
    grid-template-columns: repeat(6, 3fr);
    grid-template-rows: auto auto; /* Each row will adjust to its content */
    grid-gap: 10px; /* Adjust the gap as needed */
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


