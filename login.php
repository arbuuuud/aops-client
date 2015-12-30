<?php
session_start();
include_once 'apicaller.php';

$apicaller = new ApiCaller('APP001', '28e336ac6c9423d946ba02d19c6a2632','http://localhost/gnt-aops/public/api');

$data = $apicaller->sendRequest(array(
	'action' => 'login', 		//function name
	'apiname' => 'aops', 		//must have
	'apipass' => 'password',	//must have
	'member_id' => 2, 			//requirement for login function
	'username' => 'arbud',		//requirement for login function
	'name' => 'arief setiabudi',		//requirement for login function
	'tgllahir' => '09101987',	//requirement for login function
	'tglaplikasi' => '09101987',	//requirement for login function
	'sponsor_id' => 0,			//requirement for login function
	'introducer_id' => 0 		//requirement for login function
));

echo '<a href="http://localhost/gnt-aops/public/loginapi/'.$data.'">testtt</a>';

?>
