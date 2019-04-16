<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller{
    public function index(){
   
     $users = DB::select('select * from users');

        return view('crud/view',['users'=>$users]);

  }
  //checking
  public function check(Request $request){
  	   $username = $request->input('username');
  	   $password = $request->input('pass');
  	$users2 = DB::select("select id from users2 where username=='$username', password=='$password' " );
  	if ($users2){
  		$_SESSION['id']=$id;
  	}else{
  		echo "you have to register/login first";
  		 echo '<a href = "/">Click Here to go back.</a>';
  	}
  }
  //registering
  public function register(Request $request){
  	   $username = $request->input('username');
  	   $password = $request->input('pass');
      DB::insert('insert into users2 (username,password) values(?,?)',[$username,$password]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/">Click Here to go back.</a>';
  }
//inserting data
  public function create(Request $request){
  	   $name = $request->input('name');
  	   $age = $request->input('age');
  	   $address = $request->input('addr');
      DB::insert('insert into users (name,age,address) values(?,?,?)',[$name,$age,$address]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/">Click Here to go back.</a>';
   }
//updating
  public function update(Request $request){
  	$name = $request->input('name');
  	$age = $request->input('age');
    $address = $request->input('addr');
    $id = $request->input('id');

  	DB::update('update users set name = ?,age=?,address=? where id = ?',[$name,$age,$address,$id]);
  	echo "Record updated successfully.<br/>";
    echo '<a href = "/">Click Here to go back.</a>';
  }
//deleting
  public function delete(Request $request){
  	$num = $request->input('num');
		DB::delete('delete from users where id=?',[$num]);
	  echo "Record deleted successfully.<br/>";
      echo '<a href = "/">Click Here to go back.</a>';
  }

}

?>
