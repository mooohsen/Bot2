<?php
include("Telegram.php");
date_default_timezone_set("asia/tehran");
$bot_id = '1331689088:AAG6MVWO7wG-QjVFB0sXqrs7AJXAGsPQx9M';
$telegram = new Telegram($bot_id);
$text 			 	 = $telegram->Text();	
$chat_id 		 	 = $telegram->ChatID();
$msgType		  	 = $telegram->getUpdateType();
if($text=='fr')
{
	$myfile = fopen("a.txt", "r") or die("Unable to open file!");
	echo $m = fread($myfile,$n=filesize("a.txt"));
	fclose($myfile);

	//$content = ['chat_id' => $chat_id, 'text' => $msgType.' '.$text];
	$content = ['chat_id' => $chat_id, 'text' => $m.PHP_EOL.$n];
	$telegram->sendMessage($content);
}



if($text=='fw')
{
	
	$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
	$txt = "John Doe\n";
	fwrite($myfile, $txt);
	$txt = "Jane Doe\n";
	fwrite($myfile, $txt);
	fclose($myfile);

	//$content = ['chat_id' => $chat_id, 'text' => $msgType.' '.$text];
	$content = ['chat_id' => $chat_id, 'text' => 'File White'];
	$telegram->sendMessage($content);
}
?>