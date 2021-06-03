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

function executeFormCheckAndDataInsert(array $get): string
{
    $message = '';
    if (empty($get)) {
        $message = '' ;
    } else {
        $title = $get['title'];
        $artist_name = $get['artist_name'];
        $type = $get['type'];
        $description = $get['description'];
        $message .= isFormCorrect($title, $artist_name, $type, $description);
        if ($message === '') {
            $db = dbConnect();
            $message .= isInDataBase($db,$title);
            if ($message === '') {
                $message .= insertDataIntoDataBase($db, $title, $artist_name, $type, $description);
            }
        }
    }
    return $message;
}

function isFormCorrect(string $title, string $artist_name, string $type, string $description): string
{
    if (empty($title) || empty($type) || empty($description) || ($artist_name == '0')) {

        return '<div class="message">Please make sure to fill all the field in the form. Thanks you</div>';
    } else {
        return '';
    }
}

function isInDataBase(PDO $db, string $title): string
{
    $query = $db->prepare('SELECT `painting_title` FROM `painting` WHERE `painting_title` = :title ');
    $query->execute(
        [
        ':title' => $title,
        ]
    );
    $result = $query->fetch();

    if ($result == true) {
        return '<div class="message">' .
            'You already Own that paint in your gallery, be nice and give this copy to a commoner' . '</div>';
    } else {
        return '';
    }
}

function insertDataIntoDataBase(PDO $db, string $title, string $artist_name, string $type, string $description, string $image = "no-image.png"): string
{
    $query = $db->prepare('INSERT INTO `painting` (`painting_title`, `artist_name` ,`type`, `description`, `image` ) VALUES (:title, :artist_name, :type, :description, :image);');
    $query->execute(
        [
            ':title' => $title,
            ':artist_name' => $artist_name,
            ':type' => $type,
            ':description' => $description,
            ':image' => $image,
        ]
    );
    return '<div class="message">The new painting has been move into the gallery</div>';
}