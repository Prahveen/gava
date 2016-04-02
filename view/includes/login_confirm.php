<?php

if (logged_in() == false) {
	echo "<a href='signin.php'> <button type='submit' class='btn btn-success' >Sign in</button></a>";
}else if (logged_in() == true) {
	echo "<a href='logout.php'> <button type='submit' class='btn btn-primary'>Logout</button></a>";
}
?>