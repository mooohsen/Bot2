<?php
$MerchantID = 'a08a1332-48ef-11e7-a2ea-005056a205be';
$Description = 'خرید ربات مدیریت گروه';
$Email = 'mrjafari200079@gmail.com';
$Mobile = '09392287037';
$CallbackURL = $_GET['callback'];
$Amount = $_GET['amount']; 

$client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

$result = $client->PaymentRequest(
[
'MerchantID' => $MerchantID,
'Amount' => $Amount,
'Description' => $Description,
'Email' => $Email,
'Mobile' => $Mobile,
'CallbackURL' => $CallbackURL,
]
);

if ($result->Status == 100) {
Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result->Authority);
} else {
echo'ERR: '.$result->Status;
}
?>