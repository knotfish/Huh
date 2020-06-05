
<?php


$regis = array();

$ch = curl_init();

curl_setopt( $ch, CURLOPT_URL, 'https://nursecall2-c2dea.firebaseio.com/users.json');
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
$list = curl_exec($ch);
curl_close($ch);

$userList = json_decode($list, true);

print("1");
	
foreach ($userList as $user	/*$ list(duty, $token*/){
	list($duty, $token) = $user;
	
	if ($duty){
		array_push($regis, $token);
		
		print("2");
	}
}
var_dump($regis);