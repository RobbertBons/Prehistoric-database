<?php
require_once("../classes/dbconnect.php");
require_once("../classes/items.php");


if (isset($_GET['id'])) {
    $itemId = $_GET['id'];
    $item = new Item();
    $itemData = $item->getItemById($itemId);

    if ($itemData) {
        $name = $itemData['naam'];
        $description = $itemData['beschrijving'];
        $diet = $itemData['diet'];
        $length = $itemData['lengte'];
        $lived = $itemData['geleefd'];
    } else {
        echo "Item not found.";
        exit();
    }
}


if (isset($_POST['submit'])) {
    $item = new Item();
    $item->editItem($_POST);
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
    <title>Item Updaten</title>
</head>
<body>
<div class="container">
    <h2>Update Item</h2>
    <form method="POST" action="edit.php?id=<?php echo $itemId; ?>">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="naam" id="name" value="<?php echo isset($name) ? $name : ''; ?>">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="beschrijving" id="description"><?php echo isset($description) ? htmlspecialchars($description) : ''; ?></textarea>
        </div>
        <div class="form-group">
            <label for="diet">Diet:</label>
            <input type="text" name="diet" id="diet" value="<?php echo isset($diet) ? $diet : ''; ?>">
        </div>
        <div class="form-group">
            <label for="length">Length:</label>
            <input type="text" name="lengte" id="length" value="<?php echo isset($length) ? $length : ''; ?>">
        </div>
        <div class="form-group">
            <label for="lived">Lived:</label>
            <input type="text" name="geleefd" id="lived" value="<?php echo isset($lived) ? $lived : ''; ?>">
        </div>
        <input type="hidden" value="<?php echo $itemId; ?>" name="id">
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

        .form-group input[type="text"], .form-group textarea {
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