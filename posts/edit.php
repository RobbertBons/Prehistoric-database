<?php
require_once ("../classes/dbconnect.php");
require_once ("../classes/post.php");

// Retrieve post data if postID is set in the query string
if (isset($_GET['postID'])) {
    $postID = $_GET['postID'];
    $post = new Post();
    $postData = $post->getPostById($postID);

    if ($postData) {
        $title = $postData['title'];
        $beschrijving = $postData['beschrijving'];
    } else {
        echo "Post not found.";
        exit();
    }
}

// Handle form submission
if (isset($_POST['submit'])) {
    $post = new Post();
    $post->editPost($_POST);
    header("Location: show.php");
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
            <form method="POST" action="edit.php?postID=<?php echo $postID; ?>">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" value="<?php echo isset($title) ? $title : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="beschrijving">Description:</label>
                    <input type="text" name="beschrijving" id="beschrijving" value="<?php echo isset($description) ? $description : ''; ?>">
                </div>
                <input type="hidden" value="<?php echo $postID; ?>" name="postID">
                <div class="form-group">
                    <input type="submit" name="submit" value="Submit">
                </div>
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
            padding: 50px;
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
        .form-desc input[type="text"] {
            width: 100%;
            padding: 10px;
            height: 50vh;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-desc input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        .form-desc label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-desc {
            margin-bottom: 20px;
        }
        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</html>
