<?php
namespace App\Http\Controllers;
use App\User;


Class MyController extends Controller{

    
    public function person(){
        $myArray = array('name'=>'md.azad hsoen', 'age'=> 23, 'roll'=> 11);
        return response()->json($myArray);
    }
}
?>