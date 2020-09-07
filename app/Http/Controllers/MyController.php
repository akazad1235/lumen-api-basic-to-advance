<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

Class MyController extends Controller{

    
    public function person(){
        $myArray = array('name'=>'md.azad hsoen', 'age'=> 23, 'roll'=> 11);
        return response()->json($myArray);
    }

    //data input from body, header & parames 
    public function InputPerson(Request $request){

        return $request;

    }
}
?>