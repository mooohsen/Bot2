<?php
/**
 * Telegram Bot example.
 * @author Gabriele Grillo <gabry.grillo@alice.it>
 * https://github.com/Eleirbag89/TelegramBotPHP
 * https://t.me/howCreateBot
 */
include("Telegram.php");

// Set the bot TOKEN
$bot_id = "Your_Token";
// Instances the class
$telegram = new Telegram($bot_id);


// Take text and chat_id from the message
$text 			  = $telegram->Text();
$chat_id 		  = $telegram->ChatID();

$msgType = $telegram->getUpdateType();

if($msgType=='photo'){
	$file_id = $telegram->bigPhotoFileID();
	
	$file = $telegram->getFile($file_id);
	$file_path = $file['result']['file_path'];
	
	$full_path ='https://api.telegram.org/file/bot'.$bot_id.'/'.$file_path;
	file_put_contents('files/image.jpg',file_get_contents($full_path));
	
	$content = array('chat_id' => $chat_id, 'text' => 'photo saved SuccessFully :)');
	$telegram->sendMessage($content);
}

if($msgType=='voice'){
	$file_id = $telegram->voiceFileID();
	
	$file = $telegram->getFile($file_id);
	$file_path = $file['result']['file_path'];
	
	$full_path ='https://api.telegram.org/file/bot'.$bot_id.'/'.$file_path;
	file_put_contents('files/voice.ogg',file_get_contents($full_path));
	
	$content = array('chat_id' => $chat_id, 'text' => 'yes'.$file_id);
	$telegram->sendMessage($content);
}

if($msgType=='audio'){
	$file_id = $telegram->audioFileID();
	
	$file = $telegram->getFile($file_id);
	$file_path = $file['result']['file_path'];
	
	$full_path ='https://api.telegram.org/file/bot'.$bot_id.'/'.$file_path;
	file_put_contents('files/audio.mp3',file_get_contents($full_path));
	
	$content = array('chat_id' => $chat_id, 'text' => 'yes'.$file_id);
	$telegram->sendMessage($content);
}

if($msgType=='video'){
	$file_id = $telegram->videoFileID();
	
	$file = $telegram->getFile($file_id);
	$file_path = $file['result']['file_path'];
	
	$full_path ='https://api.telegram.org/file/bot'.$bot_id.'/'.$file_path;
	file_put_contents('files/video.mp4',file_get_contents($full_path));
	
	$content = array('chat_id' => $chat_id, 'text' => 'yes'.$file_id);
	$telegram->sendMessage($content);
}