<?php
// session_start();
// if(!isset($_SESSION['ingelogd'])){
//     header("Location: ../login.php");
//         exit();
// }
if(isset($_POST['submit'])){
    require_once ("../classes/dbconnect.php");
    require_once ("../classes/items.php");
    $item = new Item();
    $item->addItem($_POST);
    header("location: show.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
        <title>items toevoegen</title>
    </head>
    <body>
    <h1>Items Toevoegen</h1>
        <form method="POST" action="add.php">
        <div id="formulier">            
            Naam:<br>
            <input type="text" name="naam"><br><br>
            
            Beschrijving:<br>
            <input type="text" name="beschrijving"><br><br>

            Diet:<br>
            <input type="text" name="diet"><br><br>

            Lengte:<br>
            <input type="text" name="lengte"><br><br>

            Geleefd:<br>
            <input type="text" name="geleefd"><br><br>
            
            <input type="submit" name="submit">    
        </div> 
        </form>
        <!-- <h2>Terug naar <a href="../index.php">Home</a></h2> -->
    </body>
</html>