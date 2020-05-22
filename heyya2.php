<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n  \"data\" : {\n    \"name\" : \"Goku\",\n    \"power_level\" : \"Over 9000\",\n    \"fighting_skill\" : \"excellent\"\n  },\n  \"to\" : \"e3xqFEJIREE:APA91bGkT9lPMy0hmUxm0-mE8TD19aIbQ-6NHAi2ba2R0OF3ZRP6TnLOQe3QFr9GVDIvHzPdcZJMWcB83df2eIv6PicWDyX7jf52eaGrTspiBZHVs63sz1CZMwrnsXl4jaVrqI4vMGiZ"\"\n}",
  CURLOPT_HTTPHEADER => array(
    "authorization: key=AAAA2eQqZ-s:APA91bE2sES__AiazY_dMmpw90hFdLXMyfhgFkuO0ExK6pYdOJUxHV4A9U7PA3DhBxswPqMnKbKeMGDkastP-YaUe-Juuxz2Wqa0fHCLRHDUcqGz9q_9zjrRfGsIB7rVK54pu5Hxx5Ff",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}