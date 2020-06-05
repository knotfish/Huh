
<?php

$title = $_GET['title'];
$msg = $_GET['msg'];

$regis = array();

$ch = curl_init();

curl_setopt( $ch, CURLOPT_URL, 'https://nursecall2-c2dea.firebaseio.com/users.json');
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
$userList = curl_exec($cURLConnection);
curl_close($ch);
	
foreach ($userList as $user){
	if ($user("duty")){
		array_push($regis, $user("token)"));
	}
}
//$jsonArrayResponse - json_decode($userList);




	function sendPushNotification($to = '', $data = array()){
	
		
	
		$apiKey = 'AAAA2eQqZ-s:APA91bE2sES__AiazY_dMmpw90hFdLXMyfhgFkuO0ExK6pYdOJUxHV4A9U7PA3DhBxswPqMnKbKeMGDkastP-YaUe-Juuxz2Wqa0fHCLRHDUcqGz9q_9zjrRfGsIB7rVK54pu5Hxx5Ff'; 
		$fields = array('to' => $to, 'notification' => $data);
		
		$headers = array('Authorization: key='.$apiKey, 'Content-Type: application/json');

		$url = "https://fcm.googleapis.com/fcm/send";
 
		$ch = curl_init(); 
		
		
		
		
		
		curl_setopt( $ch, CURLOPT_URL,$url);
		
		curl_setopt( $ch, CURLOPT_POST, true);

		curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);

		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);

		curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false);

		curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode($fields));

		//curl_setopt( $ch, CURLOPT_POSTFIELDS, $fields);

		$result = curl_exec($ch);
		curl_close($ch);
		return json_decode($result, true);
	

	}
	//$token1 = "e3xqFEJIREE:APA91bGkT9lPMy0hmUxm0-mE8TD19aIbQ-6NHAi2ba2R0OF3ZRP6TnLOQe3QFr9GVDIvHzPdcZJMWcB83df2eIv6PicWDyX7jf52eaGrTspiBZHVs63sz1CZMwrnsXl4jaVrqI4vMGiZ";
	//$token2 = "c903y31E3fQ:APA91bHJzXoLkizD4W3gRGbPMg3UFCEWu2FS4XdsNf7nrAOEBadk0Sbop1QnNEleAMuE4Gou7nfRpchmdbzB0z1nk2m-Z_Rbw-f6Ehr0RIiZVx6I_VEMO68iiiQgkJsbSXI_kNbOJ_in";
	//$to = "APA91bHJGdOmaj5n2hBqSHxmpdPeOJSJNDt9SrK7mEMKr-oYFYJjUvCotKn734FBivReLnj2G8-MavHtz9ZtIv2hJz_u4FkhazYJl74fomPxu5cqPgUTmTc";
	//$regis = array($token1, $token2);
	$length = count($regis);
	$data = array(
		"title" => $title,//"letsGrooveTonight", 
		"body" => $msg //"ifYouSaidGoodbyeToMeTonight"//
		//"icon" => "https://example.com/icon.png",  
		//"click_action" => "Nil"
	);
	for($i=0;$i<$length;$i++){
		$to = $regis[$i];
		print_r(sendPushNotification($to, $data));
	}
	
	//	APA91bHJGdOmaj5n2hBqSHxmpdPeOJSJNDt9SrK7mEMKr-oYFYJjUvCotKn734FBivReLnj2G8-MavHtz9ZtIv2hJz_u4FkhazYJl74fomPxu5cqPgUTmTc

