<?php
require_once ('functions.php');
require 'data.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $required_fields = ['lot_name', 'category', 'message', 'lot_rate', 'lot_step', 'lot_date'];
    $errors = [];
    foreach( $required_fields as $field){
        if(empty($_POST[$field])){
            $errors[$field] = 'Заполните поле';
        }
        if($field == 'lot_rate'){
            if(!filter_var($_POST[$field], FILTER_VALIDATE_INT)){
                $errors[$field] = 'начальная цена должна быть корректной';
            }
            if(intval($_POST[$field]) < 0 ){
                $errors[$field] = 'начальная цена должна быть корректной';
            }
        }
        if($field == 'lot_step'){
            if(!filter_var($_POST[$field], FILTER_VALIDATE_INT)){
                $errors[$field] = 'Шаг ставки дожен быть корректным';
            }
            if(intval($_POST[$field]) < 0 ){
                $errors[$field] = 'Начальная цена должна быть корректной';
            }
        }
    }
    if(isset($_FILES['lotPhotos'])){
        $info = finfo_open(FILEINFO_MINE_TYPE);
        $file_name = $_FILES['lotPhotos']['name'];
        $file_path = __DIR__ .'/img/';
        $file_tmpname = $_FILES['lotPhotos']['tmp_name'];
        $file_type = finfo_file($finfo, $file_tmpname);
        if($file_type == '/image/gif'){
            move_uploaded_file($_FILES['lotPhotos']['tmp_name'], $file_path . $file_name);
        }
        $file_url = 'img/' . $file_name;
    }
    if(count($errors) == 0){
        $page_content =compile_template(add.php);
    } else{
        $lot = [
            "image" => $file_url ? 'img/user.jpg' : '',
            "name" => $_POST['lot_name'],
            "start_price" => $_POST['lot_rate'],
            "rate" => $_POST['lot_step'],
            "timer" => $_POST['lot_date'],
            "category" => $_POST['category'],
            "description" => $_POST['message'],
            "account_id" => $_SESSION['auth']['account_id'];
        ]

    }




}







?>
