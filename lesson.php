<?php
require_once 'core/init.php';
if (user_access($_SESSION['user_id'], 1) === true) {
	include 'view/admin/lesson.php';
}else {
	include 'view/user/lesson.php';
}


?>
