<?php
include("Telegram.php");
date_default_timezone_set("asia/tehran");
$bot_id = '1331689088:AAG6MVWO7wG-QjVFB0sXqrs7AJXAGsPQx9M';
$telegram = new Telegram($bot_id);
$text 			 	 = $telegram->Text();	
$chat_id 		 	 = $telegram->ChatID();
$msgType		  	 = $telegram->getUpdateType();
$content = ['chat_id' => $chat_id, 'text' => $msgType.' '.$text];
$telegram->sendMessage($content);