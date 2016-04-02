<?php




$lesson = array(

	'html' => array(
		'tute' => 'view/admin/turtorials/lessonPreview.php',
		'vedio'=> 'view/admin/videos/videoPreview.php',
		'exam' => 'view/admin/exam/examPreview.php'
	),

	'c' => array(
		'tute' => 'view/admin/turtorials/lessonPreview.php',
		'vedio'=> 'view/admin/videos/videoPreview.php',
		'exam' => 'view/admin/exam/examPreview.php'
	),
	'java' => array(
		'tute' => 'view/admin/turtorials/lessonPreview.php',
		'vedio'=> 'view/admin/videos/videoPreview.php',
		'exam' => 'view/admin/exam/examPreview.php'
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