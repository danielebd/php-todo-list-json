<?php

$todo = file_get_contents(__DIR__.'/todo.json');


$todo = json_decode($todo, true);

$todo[0]['done'] = false;

$todo = json_encode($todo);

//var_dump($todo);

file_put_contents(__DIR__.'/todo.json', $todo);

header('Content-Type: application/json');

echo $todo;
?>