<?php

// $router->get("/{country}", 'myController@myMethod');
$router->get("/person", "myController@person");

$router->post('person','myController@InputPerson');

