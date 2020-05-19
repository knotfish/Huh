<?php
public function sendGCM($message, $registration_ids) {
    //FCM URL
    $url = "https://fcm.googleapis.com/fcm/send";

    //prepare data
    $fields = array (
        'registration_ids' => array ($registration_ids),
        'data' => array ("message" => $message)
    );
    $fields = json_encode ( $fields ); 

    //header data
    $headers = array ('Authorization: key=<YOUR_API_KEY>', 'Content-Type: application/json');

    //initiate curl request
    $ch = curl_init ();
    curl_setopt ( $ch, CURLOPT_URL, $url );
    curl_setopt ( $ch, CURLOPT_POST, true );
    curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
    curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields );

    // execute curl request
    $result = curl_exec ( $ch );

    //close curl request
    curl_close ( $ch );

    //return output
    return $result;
}