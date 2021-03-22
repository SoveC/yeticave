<?php


$is_auth = rand(0, 1);
$user_name = 'Dimas'; // укажите здесь ваше имя
/*$categories = [
    'board' => "Доски и лыжи",
    'kreps' => "Крепления",
    'boots' => "Ботинки",
    'clothes' => "Одежда",
    'tools' => "Инструменты",
    'misc' => "Разное"
];
$info = [
    [
        "name" => "2014 Rossignol District Snowboard",
        "category"=> "Доски и лыжи",
        "prise"=>"10999",
        "gif"=>"img/lot-1.jpg"
    ],
    [
        "name"=> "DC Ply Mens 2016/2017 Snowboard ",
        "category"=> "Доски и лыжи",
        "prise"=>"159999",
        "gif"=>"img/lot-2.jpg "
    ],
    [
        "name"=> "Union Contact Pro 2015 года размер L/XL",
        "category"=> "Крепления",
        "prise"=>"8000",
        "gif"=>"img/lot-3.jpg "
    ],
    [
        "name"=> "Ботинки для сноуборда DC Mutiny Charocal",
        "category"=> "Ботинки",
        "prise"=>"10999",
        "gif"=>"img/lot-4.jpg "
    ],
    [
        "name"=> "Куртка для сноуборда DC Mutiny Charocal",
        "category"=> "Одежда",
        "prise"=>"7500",
        "gif"=>"img/lot-5.jpg "
    ],
    [
        "name"=> "Маска Oakley Canopy",
        "category"=> "Разное",
        "prise"=>"5400",
        "gif"=>"img/lot-6.jpg "
    ]
];
*/

$con = mysqli_connect('127.0.0.1', 'root', '', 'schema2');
$sql = 'SELECT * FROM lots';
$info = mysqli_query($con, $sql);
if($info){
    echo mysqli_error($con);
}

$info = mysqli_fetch_all($info, MYSQLI_ASSOC);

$sql2 = 'SELECT * FROM categories';
$categories = mysqli_query($con, $sql2);
if($categories){
    echo mysqli_error($con);
}

$categories = mysqli_fetch_all($categories, MYSQLI_ASSOC);



?>

