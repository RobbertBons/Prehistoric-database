<?php
// session_start();
// if( $_SESSION['ingelogd'] != true){
//     header("Location: ../login.php");
        //exit();
// }
if(isset($_POST['delete'])){
    require_once ("../classes/dbconnect.php");
    require_once ("../classes/items.php");
    $item = new Item();
    $item->deleteItem($_POST['delete']);
    header("location: show.php");
    exit();
}
require_once ("../classes/dbconnect.php");
require_once ("../classes/items.php");
    $item = new Item();
    $items = $item->showItem($_POST);
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
        <title>Alle Items</title>
    </head>
    <body>
        <?php
        foreach($items as $item){
            echo $item->naam. " " .$item->beschrijving. " ". $item->diet. " ". $item->lengte. " ". $item->geleefd. " " ."<a href='edit.php?id=".$item->id."'>Bewerk</a> 
            <form method='POST'>
            <button name='delete' type='submit' value=$item->id> Verwijderen</button>
            </form><br>";
        }
        ?>
    </body>
</html>