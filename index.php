<?php
 
$botToken = "1475059231:AAGW6Q8nM5dZFAZOM0mtxDhHHdEdVtlaLJc";
$website = "https://api.telegram.org/bot".$botToken;
 
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
 
 
$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
 
 
switch($num) {
    
    case "/about":
        forwardMessage($chatId, "3");
        break;
    case "/egoldfacts":
        forwardMessage($chatId, "5");
   
    
}
 
function forwardMessage ($chatId, $message) {
    
    $url = $GLOBALS[website]."/forwardMessage?chat_id=".$chatId."&from_chat_id=@eGoldFacts"."&message_id=".$num);
    file_get_contents($url);
    
}
 
 
 
 
 
?>
