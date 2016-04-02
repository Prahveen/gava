<?php
if (logged_in() == true) {
	if (user_access($_SESSION['user_id'], 1) === false) {
		include 'view/includes/user_nav.php';
	}else if (user_access($_SESSION['user_id'], 1) === true) {
		include 'view/includes/admin_nav.php';
	}
}
?>