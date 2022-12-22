<?php
// we call our file with MySQL connection
require_once('../config.php');
// create a new Object
class User{
	// filter the information from Login form.
	function filter($str){
		//convert case to lower
		$str = strtolower($str);
		//remove special characters
		$str = preg_replace('/[^a-zA-Z0-9]/i',' ', $str);
		//remove white space characters from both side
		$str = trim($str);
		return $str;
	}
	// the function for checking date
	function check_user($nickname,$password){
		$db = new Connection;
		$nickname = $this -> filter($nickname);
		$user = $db -> prepare("SELECT id FROM users WHERE nickname = :nick AND password = :pass");
		$user -> execute(array(
			'nick' => $nickname,
			'pass' => $password
		));
		if($user -> rowCount() > 0){
			$con = 'Welcome ' .$nickname.'!';
		}else{
			$con = 'The nickname or password is incorrect!';
		}
		return $con;
	}
}

$User = new User;

echo $User -> check_user($_POST['nickname'],$_POST['password']);
?>
