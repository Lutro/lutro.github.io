<?php

$keys = array_keys($_POST);

foreach($keys as $key){
    $value = $_POST[$key];
    echo "Key: $key value: $value <br>" ;
}