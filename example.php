
<?php
print('z');
 
function sendPushNotification(){
	
	$API_ACCESS_KEY = 'AIzaSyCypTohpSRrCDlCnlA5QtYbyFlQFQj1ib8'; // YOUR_FIREBASE_API_KEY
	
	print('1');		
	
	$fields  = array('to' => $to, 'notification' => $msg);
	
	print('2');
	
    $headers = array('Authorization: key='.$API_ACCESS_KEY, 'Content-Type: application/json');
	
	print('3');
           
	$URL  = "https://fcm.googleapis.com/fcm/send";  //API URL of FCM
	
	print('4');	
            
    $to    =  " fOyoviWU-EQ:APA91bFYYOot6p1I8P42pi_zPQrGf8Lmzl9tYH4YEVPF-ECmmFGe_-nKMoeVa2dzX7ikAs_OBeZXK8MoY8YhpZq0AOT0Ne47NoKHRfSz_0Etk9W-7IG0qg39UppREZoIuJbod0-mTtD6";
	$data          =  array( 'body' => 'message text');        
            
	$ch = curl_init(); 
	curl_setopt($ch,CURLOPT_URL,$URL);
	curl_setopt($ch,CURLOPT_POST, true);
	curl_setopt($ch,CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
	
	print('5');
			
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($fields));
	$result = curl_exec($ch);
	curl_close($ch);
	return json_decode($result, true);
	
	print('6');
}
  
sendPushNotification();  

print('abcd');


