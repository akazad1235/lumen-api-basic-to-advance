<?php
namespace App\Http\Controllers;
use App\User;

Class MyController extends Controller{

    public function myMethod($country){
        return response($country)
        ->withHeaders([
            'name' => $country,
            'age' => 23,
            'dept' => 'cse',
        ]);
    }
}
?>