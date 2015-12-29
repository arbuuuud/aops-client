<?php
session_start();
include_once 'apicaller.php';
/*ApiCaller(<API NAME>,<API KEY>,<URL SERVER>)*/
$apicaller = new ApiCaller('APP001', '28e336ac6c9423d946ba02d19c6a2632','http://localhost/gnt-aops/public/api');

$data = $apicaller->sendRequest(array(
	'action' => 'logout', 		//function name
	'apiname' => 'aops', 		//must have
	'apipass' => 'password',	//must have
	'member_id' => 3, 			//requirement for logout function
));

?>
