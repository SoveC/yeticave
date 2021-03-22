<?php
require_once ('data.php');

function format_sum($number){
    $withRub = true;
    $number = ceil($number);
    if ($number >= 1000){
        $result = number_format($number, 0, ".", " ");
    }
    else{
        $result = $number;
    }
    if ($withRub == true){
        return $result . '<b class=\"rub\"> ₽ </b>';
    }
    else{
        return $result;
    }

}


function time_lots (){
$time1 =strtotime('now');
$time2 =strtotime('tomorrow');
$time3 = $time2 - $time1;
$time_minutes = floor($time3/60);
$time_hours = floor($time_minutes/60);
$time_minutes = ($time_minutes - $time_hours*60);
$lot_time_now = sprintf('%02d:%02d', $time_hours, $time_minutes );
return $lot_time_now;
}




function compile_template($name, $data) {
    $name = 'templates/' . $name;
    $result = '';
 if (!file_exists($name)) {
     return $result;
 }
 ob_start();
 extract($data);
 require($name);
 $result = ob_get_clean();
    return $result;
}



?>

