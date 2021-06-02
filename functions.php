<?php
function dbConnect(): PDO
{
    $db = new PDO('mysql:host=db;dbname=collection_app', 'root', 'password');
    $db->setAttribute(PDO:: ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $db;
}

function getData(PDO $db):array
{
    $query = $db->prepare('SELECT `name`, `painting_title`, `type`, `description`, `type` , `image` 
       FROM `painting` JOIN `artist` ON `painting`.`artist_name` = `artist`.`id`;');
    $query->execute();
    $result = $query->fetchAll();

    return $result;
}

function extractDataAndDisplay(array $data):string
{
    $text = '<section class="container-box">';
    foreach ($data as $row) {
        $title = $row['painting_title'];
        $name = $row['name'];
        $type = $row['type'];
        $description = $row['description'];
        $image = $row['image'];
        $text .= '<div class="sub-box">'
                    . '<img src="img/'. $image . '" alt="'. $image .'">'
                    . '<h2 class="title">' . $title . '</h2>'
                    . '<h4 class="artist">' . "Artist: " . $name . '</h4>'
                    . '<h5 class="type">' . "Type: " .$type . '</h5>'
                    . '<p class="descripton">' . "Description: </p>"  . '<p>' . $description . '</p>' .
                '</div>';
    }
    $text .= '</section>';
    return $text;
}

function insertDataIntoDataBase(PDO $db, string $title, string $name, string $type, string $description, string $image = "no image")
{
    $query = $db->prepare('INSERT INTO `painting` (`painting_title`, `artist_name` ,`type`, `description`, `image` ) VALUE ('alex', 7, 'bla', 'blibli', 'image' );';
    'INSERT INTO `artist` (`name`) VALUE ('ferreira' );');
    $query->execute();
}

