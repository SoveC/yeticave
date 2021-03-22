<?php
require_once ('functions.php');
$page_content = compile_template('index.php',
[
    'categories' => $categories,
    'info' => $info]);


$layout_content = compile_template('layout.php',
    ['page_title' => 'Главная страница',
        'is_auth'=> $is_auth,
        'user_name'=>$user_name,
        'page_content'=>$page_content,
        'categories'=>$categories]);
    print ($layout_content);

?>
