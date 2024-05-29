<?php
// session_start();
// if( $_SESSION['ingelogd'] != true){
//     header("Location: ../login.php");
        //exit();
// }
if(isset($_POST['delete'])){
    require_once ("../classes/dbconnect.php");
    require_once ("../classes/post.php");
    $post = new post();
    $post->deletePosts($_POST['delete']);
    header("location: show.php");
    exit();
}
require_once ("../classes/dbconnect.php");
require_once ("../classes/post.php");
    $post = new post();
    $posts = $post->showPost($_POST);
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
        <title>All Post</title>
    </head>
    <body>
        <?php
        foreach( $posts as $post){
            echo $post->title. " " .$post->beschrijving. " " ."<a href='edit.php?postID =".$post->postID."'>edit</a> 
            <form method='POST'>
            <button name='delete' type='submit' value=$post->postID> Delete</button>
            </form><br>";
        }
        ?>
    </body>
</html>