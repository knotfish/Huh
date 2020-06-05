
<?php


$regis = array();

$ch = curl_init();

curl_setopt( $ch, CURLOPT_URL, 'https://nursecall2-c2dea.firebaseio.com/users.json');
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
$list = curl_exec($ch);
curl_close($ch);

$userList = json_decode($list);

print("1");
	
foreach ($userList as $user){
	if ($user("duty")=true){
		array_push($regis, $user("token)"));
		print("2");
	}
}