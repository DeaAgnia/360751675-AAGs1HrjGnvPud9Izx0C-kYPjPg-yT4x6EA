<?php
     define('BOT_TOKEN', '360751675:AAGs1HrjGnvPud9Izx0C-kYPjPg-yT4x6EA');
     define('API_URL', 'https://api.telegram.org/bot'.BOT_TOKEN.'/');

     // read incoming info and grab the chatID
     $content = file_get_contents("php://input");
     $update = json_decode($content, true);
     //$chatID = $update["message"]["chat"]["id"];
     $chatID = "360751675";

     // compose reply
     $reply =  sendMessage();

     // send reply
     $sendto =API_URL."sendmessage?chat_id=".$chatID."&text=".$reply;
     file_get_contents($sendto);

     function sendMessage(){
     $message = "I am a baby dea agnia.";
     return $message;
}
