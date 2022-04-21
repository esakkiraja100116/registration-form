<?php
echo "<pre>";

include_once("_backend_.php");

$db = new user();

$result = $db->get_all();
print_r($result);

foreach($result as $key => $info){
    echo $info['name'];
}
echo "</pre>";