<?php
// session_start();
// if(!isset($_SESSION['ingelogd'])){
//     header("Location: ../login.php");
//         exit();
// }
if(isset($_POST['submit'])){
    require_once ("../classes/dbconnect.php");
    require_once ("../classes/post.php");
    $post = new Post();
    $post->addPost($_POST);
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
        <title>Post toevoegen</title>
    </head>
    <body>
        <div class="container">
            <h1>Post aanmaken</h1>
            <form method="POST" action="add.php">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="beschrijving">Description:</label>
                    <textarea id="beschrijving" name="beschrijving" required></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </form>
            <!-- <h2>Terug naar <a href="../index.php">Home</a></h2> -->
        </div>
    </body>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Roboto Mono', monospace;
            background-color: #f4f4f9;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 50px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input[type="text"],
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            }

        .form-group textarea {
            resize: vertical;
            height: 100px;
        }

        .form-group input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }

    @media (max-width: 600px) {
        .container {
            margin: 20px;
            padding: 15px;
        }

        h1 {
            font-size: 24px;
        }
    }
    </style>
</html>
