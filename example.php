
<?php

 
function sendPushNotification($device_token = "", $data = array())
 {
            $API_ACCESS_KEY = 'AAAA4QcnW_8:APA91bEdc3LdsGOhcGrDuhalIi2apF-xg35gBZiqDD_L4PJ87iCLAgkioT0HKf7Yd_6BSr4YoikwgGxuWukQw8abcn9N0a1yinyshSmfpwS4G50oQQeG6eswTZ1FYq4-b71qhh7T4sPA'; // YOUR_FIREBASE_API_KEY
			
			$fields  = array('to' => $device_token, 'notification' => $msg);
 
            $headers = array('Authorization: key='.$API_ACCESS_KEY, 'Content-Type: application/json');
 
           
			$URL  = "https://fcm.googleapis.com/fcm/send";  //API URL of FCM
			
            
            
            #Send Reponse To FireBase Server    
            $ch = curl_init(); 
            curl_setopt($ch,CURLOPT_URL,$URL);
            curl_setopt($ch,CURLOPT_POST, true);
            curl_setopt($ch,CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
			
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($fields));
            $result = curl_exec($ch);
            curl_close($ch);
            return json_decode($result, true);
 }
  
//include PushNotifications.php file and call sendPushNotification method on your page
 
//require_once 'example.php';
$device_token    =  "fOyoviWU-EQ:APA91bFYYOot6p1I8P42pi_zPQrGf8Lmzl9tYH4YEVPF-ECmmFGe_-nKMoeVa2dzX7ikAs_OBeZXK8MoY8YhpZq0AOT0Ne47NoKHRfSz_0Etk9W-7IG0qg39UppREZoIuJbod0-mTtD6";
$data          =  array( 'body' => 'message text');

//$response        =  PushNotifications::sendPushNotification($device_token, $fields);

print_r(sendPushNotifcation($to, $data));


