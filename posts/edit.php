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
    <div class="container">
    <h2>Edit Post</h2>
        <form method="POST" action="edit.php?postID=">
                <h1>Oude gegevens</h1>
                Title:<br>
                <input type="text" name="title"><br><br>
                Description:<br>
                <input type="text" name="beschrijving"><br><br>
                
                <input type="hidden" value="<?php echo $_GET['postID'];?>" name="postID">

                <input type="submit" name="submit">

            <!-- <h1>Terug naar <a href="../index.php">Home</a></h1> -->
        </form>
</div>
    </body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</html>
