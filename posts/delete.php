<?php
// session_start();
// if( $_SESSION['ingelogd'] != true){
//     header("Location: ../login.php");
        //exit();
// }
if(isset($_POST['submit'])){
    require_once ("../classes/dbconnect.php");
    require_once ("../classes/post.php");
    $post = new post();
    echo $item->deletePosts($_POST['id']);
}
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
        <title>Post Verwijderen</title>
    </head>
    <body>
        <?php
        ?>
        <form method="POST" action="delete.php">
            <h1>Post verwijderen</h1>
            Title<br>
            <input type="text" name="title"><br><br>
            
            Beschrijving:<br>
            <input type="text" name="beschrijving"><br><br>

            Id:<br>
            <input type="text" value="<?php echo $_POST['id'];?>" name="id"><br><br>
            
            <input type="submit" name="submit">
        </div> 
        </form>
        <h1>Terug naar <a href="../index.php">Home</a></h1>
    </body>
</html>