<?php
require "functions.php";

if (isset($_GET)) {
    $db = dbConnect();
    insertDataIntoDataBase();

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

        <div>
            <form class="form-box">
                <div>
                    <label for="title">Painting Title: </label>
                    <input  type="text" id="title" name="title">
                </div>
                <div>
                    <label for="artist_name">Artist name: </label>
                    <select>
                        <option value="1" name="artist_name">Salvador Dali</option>
                        <option value="2" name="artist_name">Gustav Klimt</option>
                        <option value="3" name="artist_name">James Abbott McNeill Whistler</option>
                        <option value="4" name="artist_name">Rene Magritte</option>
                        <option value="5" name="artist_name">Sandro Botticelli</option>
                        <option value="6" name="artist_name">Leonardo da Vinci</option>
                    </select>

                </div>
                <div>
                    <label for="type">Type Of Painting: </label>
                    <input  type="text" id="type" name="type">
                </div>
                <div>
                    <label for="description">Description for the painting: </label>
                    <br>
                    <textarea id="description" rows="5" cols="50" name="description"></textarea>
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

