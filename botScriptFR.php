<?php
 
$botToken = "1487255129:AAGIXU2v7YaXu98TJoIU3fC81bTRHkqFovM";
$website = "https://api.telegram.org/bot".$botToken;
 
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
 
 
$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
 
 
switch($message) {
    
    case "/about@eGoldFacts_FR_bot":
        forwardMessage($chatId,4);
        break;
    case "/facts@eGoldFacts_FR_bot":
        forwardMessage($chatId,mt_rand(5,97));
        break;   
}
 
function forwardMessage ($chatId, $message) {
    
    $url = $GLOBALS[website]."/forwardMessage?chat_id=".$chatId."&from_chat_id=-1001304090532&message_id=".$message;
    file_get_contents($url);
    
} 
 
 
 
?>
