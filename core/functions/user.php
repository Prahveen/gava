<?php
function user_exists($username) {
	$username = sanitize($username);
	return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username'"), 0) == 1) ? true:false;
}

function user_logging($username , $password){
	$user_id = user_id_from_username($username);
	$username = sanitize($username);
	$password = md5($password);
	return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username' AND `password` = '$password'"),0) == 1) ? $user_id :  false ;
}


function user_id_from_username($username){
	$username = sanitize($username);
	return mysql_result(mysql_query("SELECT `user_id` from `users` where `username` = '$username'"),0 ,'user_id') ;
}


function user_access($user_id , $type){
	$user_id 	= (int)$user_id;
	$type			= (int)$type;
	return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `user_id` = $user_id AND `type` = $type"),0)==1) ? true:false ;
}


function logged_in(){
	return(isset($_SESSION['user_id'])) ? true : false;
}

?>