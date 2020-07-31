<?php
/*
in the name of God 
source of anti spam bot
by php 
v.14
dev : mohammadrezajafari [@mohammadrezajiji]
کانال سورس خونه پراز سورس های رایگان 
@source_home
*/
// fun and for all
// ping
if($textmassage=="/ping" or $textmassage=="انلاینی" or $textmassage=="ping"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
   jijibot('sendVideoNote',[
  'chat_id'=>$chat_id,
	'video_note'=>new CURLFile("other/ping.mp4"),
		'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
        ]);
   } 
}
else
{
   jijibot('sendVideoNote',[
  'chat_id'=>$chat_id,
	'video_note'=>new CURLFile("other/ping.mp4"),
		'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
        ]);	
}
}
// gif
elseif ( strpos($textmassage , '/gif ') !== false  ) {
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$text = str_replace("/gif ","",$textmassage);
$ran = rand(1,3);
if ($ran == "1") {
$info_user = file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=memories-anim-logo&text=$text&symbol_tagname=popular&fontsize=70&fontname=futura_poster&fontname_tagname=cool&textBorder=15&growSize=0&antialias=on&hinting=on&justify=2&letterSpacing=0&lineSpacing=0&textSlant=0&textVerticalSlant=0&textAngle=0&textOutline=off&textOutline=false&textOutlineSize=2&textColor=%230000CC&angle=0&blueFlame=on&blueFlame=false&framerate=75&frames=5&pframes=5&oframes=4&distance=2&transparent=off&transparent=false&extAnim=gif&animLoop=on&animLoop=false&defaultFrameRate=75&doScale=off&scaleWidth=240&scaleHeight=120&&_=1469943010141");
$getchat = json_decode($info_user, true);
$gif = $getchat["src"];
 jijibot('senddocument',[
    'chat_id'=>$chat_id,
    'document'=>"$gif",
	'caption'=>"@$usernamebot",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
     ]);
}
if ($ran == "2") {
	$info_user = file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=flash-anim-logo&text=$text&symbol_tagname=popular&fontsize=70&fontname=futura_poster&fontname_tagname=cool&textBorder=15&growSize=0&antialias=on&hinting=on&justify=2&letterSpacing=0&lineSpacing=0&textSlant=0&textVerticalSlant=0&textAngle=0&textOutline=off&textOutline=false&textOutlineSize=2&textColor=%230000CC&angle=0&blueFlame=on&blueFlame=false&framerate=75&frames=5&pframes=5&oframes=4&distance=2&transparent=off&transparent=false&extAnim=gif&animLoop=on&animLoop=false&defaultFrameRate=75&doScale=off&scaleWidth=240&scaleHeight=120&&_=1469943010141");
$getchat = json_decode($info_user, true);
$gif = $getchat["src"];
 jijibot('senddocument',[
    'chat_id'=>$chat_id,
    'document'=>"$gif",
	'caption'=>"@$usernamebot",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
     ]);
}
if ($ran == "3") {
		$info_user = file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=alien-glow-anim-logo&text=$text&symbol_tagname=popular&fontsize=70&fontname=futura_poster&fontname_tagname=cool&textBorder=15&growSize=0&antialias=on&hinting=on&justify=2&letterSpacing=0&lineSpacing=0&textSlant=0&textVerticalSlant=0&textAngle=0&textOutline=off&textOutline=false&textOutlineSize=2&textColor=%230000CC&angle=0&blueFlame=on&blueFlame=false&framerate=75&frames=5&pframes=5&oframes=4&distance=2&transparent=off&transparent=false&extAnim=gif&animLoop=on&animLoop=false&defaultFrameRate=75&doScale=off&scaleWidth=240&scaleHeight=120&&_=1469943010141");
$getchat = json_decode($info_user, true);
$gif = $getchat["src"];
 jijibot('senddocument',[
    'chat_id'=>$chat_id,
    'document'=>"$gif",
	'caption'=>"@$usernamebot",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
     ]);
   }  
}
}
else
{
$text = str_replace("/gif ","",$textmassage);
$info_user = file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=memories-anim-logo&text=$text&symbol_tagname=popular&fontsize=70&fontname=futura_poster&fontname_tagname=cool&textBorder=15&growSize=0&antialias=on&hinting=on&justify=2&letterSpacing=0&lineSpacing=0&textSlant=0&textVerticalSlant=0&textAngle=0&textOutline=off&textOutline=false&textOutlineSize=2&textColor=%230000CC&angle=0&blueFlame=on&blueFlame=false&framerate=75&frames=5&pframes=5&oframes=4&distance=2&transparent=off&transparent=false&extAnim=gif&animLoop=on&animLoop=false&defaultFrameRate=75&doScale=off&scaleWidth=240&scaleHeight=120&&_=1469943010141");
$getchat = json_decode($info_user, true);
$gif = $getchat["src"];
 jijibot('senddocument',[
    'chat_id'=>$chat_id,
    'document'=>"$gif",
	'caption'=>"@$usernamebot",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
     ]);
}
}
// logo 
elseif ( strpos($textmassage , '/logo ') !== false or strpos($textmassage , 'لوگو بساز ') !== false) {
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$text = str_replace(['/logo ','لوگو بساز '],'',$textmassage);
 jijibot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>"http://api.monsterbot.ir/pic/?text=$text&y=15&font=Steamy&fsize=90&bg=logo8",
	'caption'=>"@$usernamebot",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   } 
}
else
{
	$text = str_replace(['/logo ','لوگو بساز '],'',$textmassage);
 jijibot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>"http://api.monsterbot.ir/pic/?text=$text&y=15&font=Steamy&fsize=90&bg=logo8",
	'caption'=>"@$usernamebot",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   } 
}
// voice
elseif ( strpos($textmassage ,'/voice ') !== false  ) {
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$text = str_replace("/voice ","",$textmassage);
$trtext = urlencode($text);
 jijibot('sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>"http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&text=$trtext",
	'caption'=>"@$usernamebot",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   } 
}
else
{	
$text = str_replace("/voice ","",$textmassage);
$trtext = urlencode($text);
 jijibot('sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>"http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&text=$trtext",
	'caption'=>"@$usernamebot",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
// sticker
elseif($textmassage=="/photo" or $textmassage=="photo" or $textmassage=="تبدیل به عکس"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$file = $update->message->reply_to_message->sticker->file_id;
      $get = jijibot('getfile',['file_id'=>$file]);
      	  $getchat = json_decode($get, true);
      $patch = $getchat["result"]["file_path"];
    file_put_contents("data/photo.png",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
jijibot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>new CURLFile("data/photo.png"),
  'caption'=>"@$usernamebot",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unlink("data/photo.png");
 }
}
else
{
$file = $update->message->reply_to_message->sticker->file_id;
      $get = jijibot('getfile',['file_id'=>$file]);
      	  $getchat = json_decode($get, true);
      $patch = $getchat["result"]["file_path"];
    file_put_contents("data/photo.png",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
jijibot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>new CURLFile("data/photo.png"),
  'caption'=>"@$usernamebot",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unlink("data/photo.png");
}
}
// photo
elseif($textmassage=="/sticker" or $textmassage=="sticker" or $textmassage=="تبدیل به استیکر"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$photo = $update->message->reply_to_message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = jijibot('getfile',['file_id'=>$file]);
	  $getchat = json_decode($get, true);
      $patch = $getchat["result"]["file_path"];
    file_put_contents("data/sticker.webp",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
jijibot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>new CURLFile("data/sticker.webp"),
   'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unlink("data/sticker.webp");
 }
}
else
{
	$photo = $update->message->reply_to_message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = jijibot('getfile',['file_id'=>$file]);
	  $getchat = json_decode($get, true);
      $patch = $getchat["result"]["file_path"];
    file_put_contents("data/sticker.webp",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
jijibot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>new CURLFile("data/sticker.webp"),
   'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unlink("data/sticker.webp");
}
}
// azan
elseif($textmassage == "/azan" or $textmassage == "azan" or $textmassage == "اذان"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
if ($tc == 'group' | $tc == 'supergroup'){  
$text = file_get_contents("https://prayer.aviny.com/api/prayertimes/1");
$getchat = json_decode($text, true);
$city = $getchat["CityName"];
$sobeh = $getchat["Imsaak"];
$toloe = $getchat["Sunrise"];  
$zoher = $getchat["Noon"]; 
$qurob = $getchat["Sunset"]; 
$maghreb = $getchat["Maghreb"]; 
$nime = $getchat["Midnight"]; 
$rmroz = $getchat["Today"];
 jijibot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"🕌 اوقات شرعی تهران :
	
🏬 نام شهر : $city
🏙 اذان صبح : $sobeh
🌇 طلوع افتاب : $toloe
☀️ اذان ظهر : $zoher
🌃 غروب افتاب : $qurob
🌄 اذان مغرب : $maghreb
🌌 نیمه شب : $nime

📅 تاریخ امروز : $rmroz",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }   
}
}
else
{
$text = file_get_contents("https://prayer.aviny.com/api/prayertimes/1");
$getchat = json_decode($text, true);
$city = $getchat["CityName"];
$sobeh = $getchat["Imsaak"];
$toloe = $getchat["Sunrise"];  
$zoher = $getchat["Noon"]; 
$qurob = $getchat["Sunset"]; 
$maghreb = $getchat["Maghreb"]; 
$nime = $getchat["Midnight"]; 
$rmroz = $getchat["Today"];
 jijibot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"🕌 اوقات شرعی تهران :
	
🏬 نام شهر : $city
🏙 اذان صبح : $sobeh
🌇 طلوع افتاب : $toloe
☀️ اذان ظهر : $zoher
🌃 غروب افتاب : $qurob
🌄 اذان مغرب : $maghreb
🌌 نیمه شب : $nime

📅 تاریخ امروز : $rmroz",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
// weather
elseif ( strpos($textmassage , '/weather ') !== false  or strpos($textmassage , 'اب و هوا ') !== false ) {
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$code = str_replace(['/weather ','اب و هوا '],'',$textmassage);
$text = file_get_contents("https://topapi.ir/weather/info.php?apikey=1&name=$code");
$getchat = json_decode($text, true);
$error = $getchat["ok"];
if ($error == 1) {
$city = $getchat["status"]["title"];
$sobeh = $getchat["status"]["update"];
$toloe = $getchat["status"]["info"]["hour0"]["temp"];  
$zoher = $getchat["status"]["info"]["hour0"]["condition"]; 
$qurob = $getchat["status"]["info"]["hour0"]["wind_speed"]; 
$maghreb = $getchat["status"]["info"]["hour0"]["rain_last_24"]; 
$nime = $getchat["status"]["info"]["hour0"]["wind_direction"]; 
$rmroz = $getchat["status"]["info"]["hour0"]["maximum_temp_last_24"];
$rmroz2 = $getchat["status"]["info"]["hour0"]["minimum_temp_last_24"];
$rmroz3 = $getchat["status"]["info"]["hour24"]["condition"];
$rmroz4 = $getchat["status"]["info"]["hour24"]["maximum_temp_last_24"];
$rmroz5 = $getchat["status"]["info"]["hour24"]["minimum_temp_last_24"];
$rmroz6 = $getchat["status"]["info"]["hour48"]["condition"];
$rmroz7 = $getchat["status"]["info"]["hour48"]["maximum_temp_last_24"];
$rmroz8 = $getchat["status"]["info"]["hour48"]["minimum_temp_last_24"];
 jijibot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"☁️وضعیت اب و هوا شهر : $code
	
📶 $sobeh

➖➖➖➖➖

☀️ امروز :

🌦 دما : $toloe
🌥 وضعیت هوا : $zoher
💨 سرعت باد : $qurob
☔️ میزان باران 24 ساعت گذشته :   $maghreb
🌬 حهت باد : $nime
🔥 حداکثر میزان دما : $rmroz
❄️ حداقل میزان دما : $rmroz2

➖➖➖➖

☀️ فردا :

❄️ وضعیت هوا : $rmroz3
🔥 حداکثر میزان دما : $rmroz4
❄️ حداقل میزان دما : $rmroz5

➖➖➖

☀️ پس فردا : 

❄️ وضعیت هوا : $rmroz6
🔥 حداکثر میزان دما : $rmroz7
❄️ حداقل میزان دما : $rmroz8
",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }  
else
{
		 jijibot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"⚠️ خطا نام شهر را فقط به فارسی وارد کنید",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
}
else
{
$code = str_replace(['/weather ','اب و هوا '],'',$textmassage);
$text = file_get_contents("https://topapi.ir/weather/info.php?apikey=1&name=$code");
$getchat = json_decode($text, true);
$error = $getchat["ok"];
$city = $getchat["status"]["title"];
$sobeh = $getchat["status"]["update"];
$toloe = $getchat["status"]["info"]["hour0"]["temp"];  
$zoher = $getchat["status"]["info"]["hour0"]["condition"]; 
$qurob = $getchat["status"]["info"]["hour0"]["wind_speed"]; 
$maghreb = $getchat["status"]["info"]["hour0"]["rain_last_24"]; 
$nime = $getchat["status"]["info"]["hour0"]["wind_direction"]; 
$rmroz = $getchat["status"]["info"]["hour0"]["maximum_temp_last_24"];
$rmroz2 = $getchat["status"]["info"]["hour0"]["minimum_temp_last_24"];
$rmroz3 = $getchat["status"]["info"]["hour24"]["condition"];
$rmroz4 = $getchat["status"]["info"]["hour24"]["maximum_temp_last_24"];
$rmroz5 = $getchat["status"]["info"]["hour24"]["minimum_temp_last_24"];
$rmroz6 = $getchat["status"]["info"]["hour48"]["condition"];
$rmroz7 = $getchat["status"]["info"]["hour48"]["maximum_temp_last_24"];
$rmroz8 = $getchat["status"]["info"]["hour48"]["minimum_temp_last_24"];
 jijibot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"☁️وضعیت اب و هوا شهر : $code
	
📶 $sobeh

➖➖➖➖➖

☀️ امروز :

🌦 دما : $toloe
🌥 وضعیت هوا : $zoher
💨 سرعت باد : $qurob
☔️ میزان باران 24 ساعت گذشته :   $maghreb
🌬 حهت باد : $nime
🔥 حداکثر میزان دما : $rmroz
❄️ حداقل میزان دما : $rmroz2

➖➖➖➖

☀️ فردا :

❄️ وضعیت هوا : $rmroz3
🔥 حداکثر میزان دما : $rmroz4
❄️ حداقل میزان دما : $rmroz5

➖➖➖

☀️ پس فردا : 

❄️ وضعیت هوا : $rmroz6
🔥 حداکثر میزان دما : $rmroz7
❄️ حداقل میزان دما : $rmroz8
",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
// instagrm
elseif ( strpos($textmassage , '/instagram ') !== false or strpos($textmassage , 'اینستاگرام ') !== false  ) {
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$code = str_replace(['/instagram ','اینستاگرام '],'',$textmassage);
$text = file_get_contents("https://topapi.ir/instagram/?apikey=1&url=https://www.instagram.com/$code/");
$getchat = json_decode($text, true);
$city = $getchat["biography"];
$toloe = $getchat["followed_by"];  
$zoher = $getchat["follows"]; 
$qurob = $getchat["is_private"]; 
$maghreb = $getchat["countpost"]; 
$maghreb1 = $getchat["profilepic"]; 
jijibot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>$maghreb1,
	'caption'=>"👤 بیوگرافی : 
$city
⭐️ دنبال کننده ها :
$toloe
🌟 دنبال کرده ها :
$zoher
📁 تعداد پست :
$maghreb
",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }
}
else
{
	$code = str_replace(['/instagram ','اینستاگرام '],'',$textmassage);
$text = file_get_contents("https://topapi.ir/instagram/?apikey=1&url=https://www.instagram.com/$code/");
$getchat = json_decode($text, true);
$city = $getchat["biography"];
$toloe = $getchat["followed_by"];  
$zoher = $getchat["follows"]; 
$qurob = $getchat["is_private"]; 
$maghreb = $getchat["countpost"]; 
$maghreb1 = $getchat["profilepic"]; 
jijibot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>$maghreb1,
	'caption'=>"👤 بیوگرافی : 
$city
⭐️ دنبال کننده ها :
$toloe
🌟 دنبال کرده ها :
$zoher
📁 تعداد پست :
$maghreb
",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
?>