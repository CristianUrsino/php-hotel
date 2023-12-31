<?php
include __DIR__ . '/../Model/db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://kit.fontawesome.com/42b6da10cf.js" crossorigin="anonymous"></script>
    <title>PHP-HOTEL</title>
</head>
<body>
    <header >
        <form action="index.php" method="GET" class="d-flex justify-content-between container my-3">
            <select name="parking">
                <option value="">with/without parking</option>
                <option value="2">with parking</option>
                <option value="1">without parking</option>
            </select>
            <div>
                <label for="minVote">minimum vote</label>
                <input type="number" min="0" max="5" name="minVote">
            </div>
            <input type="submit">
        </form>
    </header>
</body>