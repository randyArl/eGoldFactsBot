<?php
 
$botToken = "1475987782:AAEjLA6sYZMRwE2-Qi6HHLMkASm0l47Gwog";
$website = "https://api.telegram.org/bot".$botToken;
 
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
 
 
$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
 
 
switch($message) {
    
    case "/about@eGoldFactsDEBot":
        forwardMessage($chatId,2);
        break;
    case "/facts@eGoldFactsDEBot":
        forwardMessage($chatId,mt_rand(3,93));
        break;   
}
 
function forwardMessage ($chatId, $message) {
    
    $url = $GLOBALS[website]."/forwardMessage?chat_id=".$chatId."&from_chat_id=@EGoldFactsDE&message_id=".$message;
    file_get_contents($url);
    
} 
 
 
 
?>
