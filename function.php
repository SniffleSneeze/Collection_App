<?php
function dbConnect(): PDO
{
    $db = new PDO('mysql:host=db;dbname=Project 2 - io', 'root', 'password');
    $db->setAttribute(PDO:: ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $db;
}

function getData(PDO $db):array
{
    $query = $db->prepare('SELECT `name`, `painting_title`, `type`, `description` 
       FROM `painting` JOIN `artist` ON `painting`.`artist_name` = `artist`.`id`;');
    $query->execute();
    $result = $query->fetchAll();

    return $result;
}

function extractData(array $db):string
{
    $text = "<section class='container-box'>";
    foreach ($db as $key) {
        $title = $key['painting_title'];
        $name = $key['name'];
        $type = $key['type'];
        $description = $key['description'];
        $text .= '<div class="sub-box">'
                    . '<h2 class="title">' . $title . '</h2>'
                    . '<h4 class="artist">' . "Artist: " . $name . '</h4>'
                    . '<h5 class="type">' . "Type: " .$type . '</h5>'
                    . '<p class="descripton">' . "Description: </p>"  . '<p>' . $description . '</p>' .
                '</div>';
    }
    $text .= '</section>';
    return $text;
}

