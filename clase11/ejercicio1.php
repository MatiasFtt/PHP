<?php
class Cliente{
var $name;
var $age;
var $city;
public function __construct(){}
}

#objeto a json
$client = new Cliente();
$client->name= "Carlitos";
$client->age=45;
$client->city="Itaugua";

$code_json = json_encode($client);

echo $code_json;
?>