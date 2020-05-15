<?php

function sendPushNotification($to = '', $data = array()){
	$apiKey = '';
	$fields = array( 'to' => $to,	'notfication' => $data );
	
	$headers = array( 'Authorization: keys='.$apiKey, 'Content-Type: application/json');
	
	$url = 'https://fcm.googleapis.com/fcm/send';
	
	$ch = curl_init();
	curl_setopt( $ch, CURLOPT_URL, $url);
	curl_setopt( $ch, CURLOPT_POST, true):
	curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt( $ch, CURLOPT_RETURNTRANSEFER, true);
	
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode($fields));
	$result = curl_exec($ch);
	return json_decode($result, true);
}
$to ="";
$data = array(
	'body' => 'New message'
);
print_r(sendPushNotification($to, $data));	