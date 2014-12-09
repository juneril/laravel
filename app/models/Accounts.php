<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Accounts extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'accounts';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	
public static function InsertData($Data){

	$password = Hash::make($Data['password']);
// print_r($password);
// die();
$accounts=array('email'=> $Data['email'],
	'firstname' => $Data['firstname'],
	'lastname'=> $Data['lastname'],
	'password'=> $password
	);

$acc= DB::table('accounts')->insert($accounts);

if($acc){
	$result['success'] = true;
    $result['msg'] = 'Information successfully saved';
   }else{
    $result['success'] = false;
    $result['msg'] = 'WARNING: Unknown error occur while changing password!';
   }
   return $result;

}
public static function Login($Data){

// $accounts=array('email'=> $Data['emails'],
// 	'firstname' => $Data['firstname'],
// 	'lastname'=> $Data['lastname'],
// 	'password'=> $Data['password']
// 	);



 $userdata = array(
    'email'  => $Data['username'],
    'password' => $Data['password']
   
   );


 print_r($userdata);
 die;


   if (Auth::attempt($userdata)) {
    return Redirect::to('/home');
   } else {
    return Redirect::to('/jun')
     ->with('flash_error', 'Your username/password combination was incorrect.');
   }

// $acc= DB::table('accounts')->insert($Data);

// if($acc){
// 	$result['success'] = true;
//     $result['msg'] = 'Information successfully saved';
//    }else{
//     $result['success'] = false;
//     $result['msg'] = 'WARNING: Unknown error occur while changing password!';
//    }
//    return $result;

// }
	

}








}
