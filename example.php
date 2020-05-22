
<?php

	function sendPushNotification($to = '', $data = array()){
	
		$apiKey = 'AAAA2eQqZ-s:APA91bE2sES__AiazY_dMmpw90hFdLXMyfhgFkuO0ExK6pYdOJUxHV4A9U7PA3DhBxswPqMnKbKeMGDkastP-YaUe-Juuxz2Wqa0fHCLRHDUcqGz9q_9zjrRfGsIB7rVK54pu5Hxx5Ff'; 
		$fields = array('registration_ids' => $to, 'notification' => $msg);

		$headers = array('Authorization: key='.$apiKey, 'Content-Type: application/json');

		$url = "https://fcm.googleapis.com/fcm/send";
 
		$ch = curl_init(); 
		curl_setopt( $ch, CURLOPT_URL,$url);
		
		curl_setopt( $ch, CURLOPT_POST, true);

		curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);

		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);

		curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false);

		curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode($fields));

		$result = curl_exec($ch);
		curl_close($ch);
		return json_decode($result, true);
	

	}
	$to = "ceFxpyQ2MMQ:APA91bHJA0hf8bipXLaoeEWEWZ9RoeGhZxZCZWqhBY0uAe33kDpAszJO-o7La07wSEQvTHEm9Of-XWjKyeDae5cg9hi3ay-tyKHsFpZvNf291fif4BXPp8uRbc6MVEVSaZu87TiHASlP";
	$data = array( 
		'body' => 'message text'
	);
	print_r(sendPushNotification($to, $data));
	

