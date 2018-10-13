<?php
/*if payment is successful then redirect url will be open and show alert
 message or can use webhook to access entire payment data to webhook.php*/
if (isset($_GET['payment_id'])) {
	echo "<alert>payment is Sccessful!</alert>";
	echo $_GET['payment_id'].'<br>';
	echo $_GET['payment_request_id'].'<br>';
}
else{
	/*payments fails return status fail then redirect to paymet again*/
	echo "fails";
}

?>