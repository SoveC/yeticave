<?php
require_once ('functions.php');
require 'data.php';

$currentLot = null;
if(isset($_GET['id'])){
    $lotID = intval($_GET['id']);
    foreach ($info as $lot){
        if (intval($lot['lot_id']) == $lotID){
            $currentLot = $lot;
            break;
        }
    }
}


if(!$info[$lotID]){
    http_response_code(404);
    exit;
}

$page_content = compile_template('lot.php',
['categories' =>  $categories,
    'lot' => $currentLot,
    'lotID' => $lotID,
    'info'=> $info,
    'lot_time_remaining' => $lot_time_remaining]);


$layout_content = compile_template('layout.php',
['page_title' => 'Главная страница',
    'is_auth' => $is_auth,
    'user_name' => $user_name,
    'user_avatar' => $user_avatar,
    'page_content' => $page_content,
    'categories' => $categories

]);


print($layout_content);










?>
