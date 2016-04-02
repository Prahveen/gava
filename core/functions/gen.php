<?php
function sanitize($data) {
	$data = htmlentities(strip_tags(mysql_real_escape_string($data)));
	return $data; 
}

function admin_protect(){
	global $user_data;

	if ( user_access($_SESSION['user_id'], 1) === false){
			header('Location: home.php');
			exit();
	}
}



function login_redirect(){
	if (logged_in() === false) {
		header('Location:home.php');
		exit();
	}
}

function logged_in_redirect(){
	if (logged_in() === true) {
		header('Location:home.php');
		exit();
	}
}

function email_validate($email){
	$email = sanitize($email);
	if ($email === filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return true;
	}else {
		return false;
	}
}