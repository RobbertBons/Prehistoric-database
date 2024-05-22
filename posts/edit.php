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
    $post->editPost($_POST);
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
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
        <title>Post Updaten</title>
    </head>
    <body>
        <form method="POST" action="edit.php?id=">
            <h1>Oude gegevens</h1>
            title:<br>
            <input type="text" name="title"><br><br>
            Description:<br>
            <input type="text" name="beschrijving"><br><br>
            
            <input type="hidden" value="<?php echo $_GET['id'];?>" name="id">

            <input type="submit" name="submit">

            <!-- <h1>Terug naar <a href="../index.php">Home</a></h1> -->
        </form>
    </body>
</html>