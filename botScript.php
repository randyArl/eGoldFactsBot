<?php
 
$botToken = "1475059231:AAGW6Q8nM5dZFAZOM0mtxDhHHdEdVtlaLJc";
$website = "https://api.telegram.org/bot".$botToken;
  
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
 
$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
 
 
switch($message) {
    
    case "/about":
        forwardMessage($chatId, 3);
        break;
    case "/egoldfacts":
        forwardMessage($chatId, rand(4,60));
        break;
    default: 
        sendMessage($chatId, "default");
    
}
 
function sendMessage ($chatId, $message) {
    
    $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
    file_get_contents($url);
    
}

function forwardMessage ($chatId, $message) {
    
    $url = $GLOBALS[website]."/forwardMessage?chat_id=".$chatId."&from_chat_id=-1001224074002&message_id=".urlencode($message));
    file_get_contents($url);
    
}
 
 
 
 
?>
