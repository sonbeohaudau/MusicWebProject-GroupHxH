<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once('../Model/M_Account.php');
include_once('../Model/E_Account.php');
class Ctrl_Account{
	public function signupAction($username,$pass){
		$model = new Model_Account();
		if($model->checkUserforSignup($username)){
			$model->insertAccount($username,$pass,'');
		}else{
			echo 'Username is already used';
		}
	}
	
	public function signinAction($username, $pass){
		$model = new Model_Account();
		if($model->checkUserforSignin($username, $pass)){
			return $_SESSION['logedName'] = $username;
		}else{
			echo 'User not exist';
		}
	}
	
}

?>