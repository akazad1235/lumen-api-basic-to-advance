<?php

// $router->get("/{country}", 'myController@myMethod');
$router->get("/person", "myController@person");

//data input sing post method
$router->post('person','myController@InputPerson');

$router->get("/students", "StudentController@index");
$router->post("/students", "StudentController@insert");
$router->delete("/students", "StudentController@delete");
$router->put("/students", "StudentController@update");