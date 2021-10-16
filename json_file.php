<?php
$json = '{
    "Numder":{
        "ali":10,
        "reza":21
    },
    "Name":["Amir","Reza"],
    "Admin":"Amir"
}';
$my_object_1 = json_decode($json);
var_dump($my_object_1);


$array = [24, 5, 45, 54, 458, 6];
$en_json = json_encode($array);
$my_object_2 = json_decode($en_json);
var_dump($my_object_2);
