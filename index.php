<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_6fdd4d74ccecd45d62b5632b5b2",
                  "X-Auth-Token:test_368ad7bb24f0143af33d9174a4c"));
$name="sangram";
$tel="9999999999";
$payload = Array(
    'purpose' => 'Cloths',
    'amount' => '100',
    'phone' => $tel,
    'buyer_name' => $name,
    'redirect_url' => 'http://localhost/sangram/pay/success.php',
    'send_email' => true,
    'webhook' => '',
    'send_sms' => true,
    'email' => 'foo@example.com',
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

$json_decode =json_decode($response,true);
$long_yrl =$json_decode['payment_request']['longurl'];

echo $long_yrl;
print_r($json_decode);

/* redirect to payment getway in long url  */
//header('Location:'.$long_yrl);

?>