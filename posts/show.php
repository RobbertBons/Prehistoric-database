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
        <title>Post</title>
    </head>

    <body>
        <header>
            <h1>Posts</h1>
        </header>

       <main> 
            <ul class="post-list">
                <?php foreach ($posts as $post): ?>
                    <li class="post-item">
                        <div class="post-title"><?php echo htmlspecialchars($post->title); ?></div>
                        <div class="post-description"><?php echo htmlspecialchars($post->beschrijving); ?></div>
                        <div class="post-actions">
                            <a href="edit.php?postID=<?php echo htmlspecialchars($post->postID); ?>">Edit</a>
                            <form method="POST">
                                <button name="delete" type="submit" value="<?php echo htmlspecialchars($post->postID); ?>">Delete</button>
                            </form>
                        </div>
                    </li>
                <?php endforeach; ?>
                    <div class="button-container">
                        <a href="add.php" class="button">add post</a>
                        <a href="../Admin.php" class="button">back to admin panel</a>
                    </div>
            </ul>
        </main>
    </body>

    <style>
        body {
            font-family: 'Roboto Mono', monospace;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        header {
            background-color: #fed684;
            color: white;
            padding: 20px;
            text-align: center;
        }
        h1 {
            margin: 0;
            font-size: 2.5em;
            text-align: center;
        }
        .button-container {
            text-align: center;
            margin: 20px 0;
        }
        .button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
        }
        .button:hover {
            background-color: #218838;
        }
        .post-list {
            list-style-type: none;
            padding: 0;
            max-width: 800px;
            margin: 20px auto;
        }
        .post-item {
            background-color: #fff;
            margin: 10px 0;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .post-title {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .post-description {
            margin-bottom: 20px;
        }
        .post-actions {
            display: flex;
            gap: 10px;
        }
        .post-actions form {
            display: inline;
        }
        .post-actions a, .post-actions button {
            background-color: #007BFF;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            text-decoration: none;
            cursor: pointer;
            font-size: 1em;
        }
        .post-actions button {
            background-color: #DC3545;
        }
        .post-actions a:hover, .post-actions button:hover {
            opacity: 0.8;
        }
    </style>
</html>