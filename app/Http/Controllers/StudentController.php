<?php

    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use DB;
    use Illuminate\Http\Request;

class StudentController extends Controller{

    function index(){

        $sql = "SELECT * FROM students";
        return DB::select($sql);
    }
    function insert(Request $request){

        $name = $request->input('name');
        $roll = $request->input('roll');
        $class = $request->input('class');
        $phone = $request->input('phone');
        $city = $request->input('city');

        $sql = "INSERT INTO students( `name`, `roll`, `class`, `phone`, `city`) VALUES (?,?,?,?,?)";
        $result =  DB::insert($sql,[$name, $roll, $class, $phone, $city]);

        if($result == true){
            return "success";
        }else{
            return "faild";
        }
    }
    function delete(Request $request){

        $id = $request->input('id');
       $sql = "DELETE FROM students where id =? ";
           $result =  DB::delete($sql, [$id]);

        if($result == true){
            return "delete success";
        }else{
            return "delete faild";
        }   
    }
    }
    function update(Request $request){
        $name=$request->input('name');
        $city = $request->input('city');
        
        $sql ="UPDATE students set 'name'=? where 'city'=? ";
       $result =  DB::update($sql, [$name, $city]);
        if($result == true){
            return "udpate success";
        }else{
            return "udpate faild";
        }  

    }

?>