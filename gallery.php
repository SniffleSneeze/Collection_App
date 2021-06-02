<?php
include "functions.php";
$db = dbConnect();
$result = getData($db);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Painting Collection</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/normalise.css" type="text/css" rel="stylesheet">
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    </head>
    <body class="table-body">
        <div class="table-title">
            <h1>Welcome In The Gallery</h1>
        </div>
        <?php echo extractDataAndDisplay($result);?>
    </body>
</html>