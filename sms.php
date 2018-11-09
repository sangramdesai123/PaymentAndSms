<?php
if(isset($_GET['btn']))
{
$mobileNo=88779217944;//
$message = urlencode('hi from sangram ');//your message
$authKey = "XXXXXXXXXXXXXXXXXXXXXXXXXx";//your api key
$senderId = "SDesai";//shold be less than 6 char
$route = "4";
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNo,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route,
    'country'=>'0'
);
$url="https://control.msg91.com/api/sendhttp.php";
$ch = curl_init();
    curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
));
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$output = curl_exec($ch);
 if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}
curl_close($ch);
echo '<script>alert("Message sent Successfully")</script>';
}
else{
    echo "string";
}
?>

