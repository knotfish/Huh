
<?php

	function sendPushNotification($to = '', $data = array()){
	
		$apiKey = 'AAAA2eQqZ-s:APA91bE2sES__AiazY_dMmpw90hFdLXMyfhgFkuO0ExK6pYdOJUxHV4A9U7PA3DhBxswPqMnKbKeMGDkastP-YaUe-Juuxz2Wqa0fHCLRHDUcqGz9q_9zjrRfGsIB7rVK54pu5Hxx5Ff'; 
		$fields = array('to' => $to, 'notifiction' => $msg);

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
	$to = "e3xqFEJIREE:APA91bGkT9lPMy0hmUxm0-mE8TD19aIbQ-6NHAi2ba2R0OF3ZRP6TnLOQe3QFr9GVDIvHzPdcZJMWcB83df2eIv6PicWDyX7jf52eaGrTspiBZHVs63sz1CZMwrnsXl4jaVrqI4vMGiZ";
	$data = array( 
		'body' => 'message text'
	);
	print_r(sendPushNotification($to, $data));

