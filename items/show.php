<?php
// session_start();
// if( $_SESSION['ingelogd'] != true){
//     header("Location: ../login.php");
//     exit();
// }

if(isset($_POST['delete'])){
    require_once ("../classes/dbconnect.php");
    require_once ("../classes/item.php");
    $item = new Item();
    $item->deleteItem($_POST['delete']);
    header("location: show.php");
    exit();
}

require_once ("../classes/dbconnect.php");
require_once ("../classes/items.php");
$item = new Item();
$items = $item->showItems();
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
        <title>Creatures and Plants</title>
        <script>
            function confirmDelete(id) {
                if (confirm("Weet je zeker dat je dit post wilt verwijderen?")) {
                    document.getElementById('deleteForm_' + id).submit();
                }
            }
        </script>
    </head>
    <body>
        <header>
            <h1>Creatures and Plants</h1>
        </header>
        <main>
            <ul id="item-list" class="item-list">
                <?php 
                $itemCount = 0; 
                foreach ($items as $item): 
                ?>
                    <li class="item">
                        <div class="item-title"><?php echo htmlspecialchars($item->naam); ?></div>
                        <div class="item-description"><?php echo htmlspecialchars($item->beschrijving); ?></div>
                        <div class="item-diet"><?php echo htmlspecialchars($item->diet); ?></div>
                        <div class="item-lengte"><?php echo htmlspecialchars($item->lengte); ?></div>
                        <div class="item-geleefd"><?php echo htmlspecialchars($item->geleefd); ?></div>
                        <div class="item-actions">
                            <a href="edit.php?id=<?php echo htmlspecialchars($item->id); ?>">Edit</a>
                            <form method="POST" id="deleteForm_<?php echo htmlspecialchars($item->id); ?>">
                                <button type="button" onclick="confirmDelete(<?php echo htmlspecialchars($item->id); ?>)">Delete</button>
                                <input type="hidden" name="delete" value="<?php echo htmlspecialchars($item->id); ?>">
                            </form>
                        </div>
                    </li>
                    <?php 
                    $itemCount++;
                    if ($itemCount >= 12) break; // Limit to 12 items
                    ?>
                <?php endforeach; ?>
            </ul>
            <div class="button-container">
                <a href="add.php" class="button">Add Creature or plant</a>
                <a href="../Admin.php" class="button">Back to Admin Panel</a>
                <?php if ($itemCount >= 12): ?>
                    <button id="next-btn" class="button" onclick="loadNextPage()">Next</button>
                <?php endif; ?>
            </div>
        </main>
    </body>
</html>
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

    .item-list {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
        padding: 0;
        max-width: 1200px;
        margin: 20px auto;
        list-style-type: none;
    }

    .item {
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .item-title {
        font-size: 1.5em;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .item-description {
        margin-bottom: 20px;
    }

    .item-actions {
        display: flex;
        gap: 10px;
    }

    .item-actions form {
        display: inline;
    }

    .item-actions a, .item-actions button {
        background-color: #007BFF;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 3px;
        text-decoration: none;
        cursor: pointer;
        font-size: 1em;
    }

    .item-actions button {
        background-color: #DC3545;
    }

    .item-actions a:hover, .item-actions button:hover {
        opacity: 0.8;
    }

    @media (max-width: 768px) {
        .item-title {
            font-size: 1.3em;
        }

        .item-description {
            font-size: 0.9em;
        }

        .item-actions a, .item-actions button {
            padding: 8px 5px;
            font-size: 0.9em;
        }

        .button {
            padding: 4px 5px;
            font-size: 0.9em;
        }
    }

    @media (max-width: 480px) {
        .item-title {
            font-size: 1.1em;
        }

        .item-description {
            font-size: 0.8em;
        }

        .item-actions {
            flex-direction: column;
        }

        .item-actions a, .item-actions button {
            width: 100%;
            text-align: center;
        }

        .button {
            padding: 8px 12px;
            font-size: 0.8em;
        }
    }
</style>