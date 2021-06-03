<?php
require_once "functions.php";

$message = '';
if (empty($_GET)) {
    $message = '' ;
} else {
    $title = $_GET['title'];
    $artist_name = $_GET['artist_name'];
    $type = $_GET['type'];
    $description = $_GET['description'];
    $message .= isFormCorrect($title, $artist_name, $type, $description);
    if ($message === '') {
        $db = dbConnect();
        $message .= isInDataBase($db,$title);
        if ($message === '') {
            $db = dbConnect();
            $message .= insertDataIntoDataBase($db, $title, $artist_name, $type, $description);
        }
    }
}
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
    <body class="form-body">
        <div class="form-title">
            <h1>Add Painting To The Collection</h1>
        </div>
        <nav class="navbar form-nav">
            <div>
                <a href="index.php" class="">Back To Front Door</a>
            </div>
            <div>
                <a href="gallery.php" class="">Explore Your Gallery</a>
            </div>
        </nav>
        <?php echo $message ?>
        <div>
            <form class="form-box">
                <div>
                    <label for="title">Painting Title: </label>
                    <input  type="text" id="title" name="title">
                </div>
                <div>
                    <label for="artist_name">Artist name: </label>
                    <select name="artist_name">
                        <option value="0" >-Select Artist-</option>
                        <option value="1" >Salvador Dali</option>
                        <option value="2" >Gustav Klimt</option>
                        <option value="3" >James Abbott McNeill Whistler</option>
                        <option value="4" >Rene Magritte</option>
                        <option value="5" >Sandro Botticelli</option>
                        <option value="6" >Leonardo da Vinci</option>
                    </select>
                </div>
                <div>
                    <label for="type">Type Of Painting: </label>
                    <input  type="text" id="type" name="type">
                </div>
                <div>
                    <label for="description">Description for the painting: </label>
                    <br>
                    <br>
                    <textarea id="description" rows="20" cols="66" name="description"></textarea>
                </div>
                <button class="button">Add Painting</button>
            </form>
        </div>
        <footer class="footer">
            <div>
                <p>
                    &copy - Alexander Ferreira 2021
                </p>
            </div>
        </footer>
    </body>
</html>