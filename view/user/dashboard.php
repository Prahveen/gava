<?php




$lesson = array(

	'html' => array(
		'tute' => 'view/user/turtorials/lessonPreview.php',
		'vedio'=> 'view/user/videos/videoPreview.php',
		'exam' => 'view/user/exam/examPreview.php'
	),

	'c' => array(
		'tute' => 'view/user/turtorials/lessonPreview.php',
		'vedio'=> 'view/user/videos/videoPreview.php',
		'exam' => 'view/user/exam/examPreview.php'
	),
	'java' => array(
		'tute' => 'view/user/turtorials/lessonPreview.php',
		'vedio'=> 'view/user/videos/videoPreview.php',
		'exam' => 'view/user/exam/examPreview.php'
	),
);



if (isset($_GET)) {
	foreach ($lesson as $key => $value) {
		if (isset($_GET[$key])) {
			foreach ($value as $key1 => $value1) {
				if ($_GET[$key] === $key1) {
					$sub = $key;
					include $value1;
				}
			}
		}
	}
}



?>