<?php
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
                    <input  type="text" id="name">
                </div>
                <div>
                    <label for="name">Artist name: </label>
                    <input  type="text" id="name">
                </div>
                <div>
                    <label for="type">Type Of Painting: </label>
                    <input  type="text" id="typ">
                </div>
                <div>
                    <label for="description">Description for the painting: </label>
                    <br>
                    <textarea id="description" rows="5" cols="50"></textarea>
                </div>
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

