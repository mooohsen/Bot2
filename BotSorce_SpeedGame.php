<?php
ob_start();
error_reporting(0);
flush();
define('API_KEY','
1331689088:AAG6MVWO7wG-QjVFB0sXqrs7AJXAGsPQx9M');
//======================== [ SpeedGame ] ========================
function Bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
//======================== [ SpeedGame ] ========================
$Dev = array("ادمین","1088138067","1088138067"); // put id of admins
$usernamebot = "test00982";
$channel = "iranians_chanel";
$token = API_KEY;
$chars="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0987654321";
$cgame = substr(str_shuffle($chars),8,7);
//======================== [ SpeedGame ] ========================
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$first_name = $message->from->first_name;
$firstname = $update->callback_query->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
$textmassage = $message->text;
$messageid = $update->callback_query->message->message_id;
$tc = $update->message->chat->type;
$chatid = $update->callback_query->message->chat->id;
$fromid = $update->callback_query->from->id;
$data = $update->callback_query->data;
$membercall = $update->callback_query->id;
$reply = $update->message->reply_to_message->forward_from->id;
$membercall = $update->callback_query->id;
//======================== [ SpeedGame ] ========================
$id = "data/$from_id.json";
$id2 = "data/$fromid.json";
$decode = json_decode(file_get_contents($id),true);
$decode2 = json_decode(file_get_contents($id2),true);
//======================== [ SpeedGame ] ========================
$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
$tch = $forchannel->result->status;
//======================== [ SpeedGame ] ========================
@$juser = json_decode(file_get_contents("data/$from_id.json"),true);
@$gp = json_decode(file_get_contents("gp/$chat_id.json"),true);
@$cuser = json_decode(file_get_contents("data/$fromid.json"),true);
//======================== [ SpeedGame ] ========================
if($textmassage =="/start"){
if($tc == "private"){
if(file_exists("data/$from_id.json")){
Bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"سلام [ $first_name ] 🤩
به ربات بازی با سرعت خوش اومدی🌹
با استفاده از من میتونی کلی بازی های هیجان انگیز انجام بدی🌼 
پس چرا معطلی همین حالا من به گروهت ببر و دستور 
🌟 : /NewGame 
را ارسال کنید🌿
🤖 @$usernamebot
📣 @$channel",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$menu,
    		]);
}else{//@BotSorce
Bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"سلام [ $first_name ] 🤩
به ربات بازی با سرعت خوش اومدی🌹
با استفاده از من میتونی کلی بازی های هیجان انگیز انجام بدی🌼 
پس چرا معطلی همین حالا من به گروهت ببر و دستور 
🌟 : /NewGame 
را ارسال کنید🌿
🤖 @$usernamebot
📣 @$channel",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$menu
    		]);
$juser = json_decode(file_get_contents("data/$from_id.json"),true);	
$juser["userfild"]["step"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
}else{
Bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"🌼 این دستور در گروه انجام نمیشود لطفا در پیوی ربات ارسال کنید🌺",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📣 کانال ما ",'url'=>"http://t.me/$channel"]]
]
])
]);
}
}
elseif(strpos($textmassage,"/speed ") ===0){
$ex = explode(" ",$textmassage);
if($tc == "supergroup" or $tc =="group"){
if(!in_array($ex[1],$gp['game'])){
Bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"😯 اوههه به مشکل برخوردیم این بازی توسط کسی ساخته نشده بود😞
جهت ساخت بازی جدید از دستور زیر استفاده کنید
/NewGame",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"markdown"
]);
}else{
Bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"🤩 برنده مشخص شد کاربر [$from_id](tg://user?id=$from_id) میباشد. جهت بازی مجدد از دستور زیر استفاده نمایید
🌼 /NewGame",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"markdown"
]);
$key = array_search($ex[1],$gp['game']);
unset($gp['game'][$key]);
$gp['game'] = array_values($gp['game']);
$json=json_encode($gp,true);
file_put_contents("gp/$chat_id.json",$json);
}
}else{
Bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"🌟 دستور مورد نظر یافت نشد ...",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📣 کانال ما ",'url'=>"http://t.me/$channel"]]
]
])
]);
}
}
//===============[NewGame]===================
elseif($textmassage == "/NewGame" or $textmassage=="/NewGame@speedGameBot"){
if($tc == "supergroup" or $tc =="group"){
if($gp['game'] !=null){
Bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ شما هنوز یک بازی ناتمام دارید و نمیتوانید بازی جدیدی را شروع کنید",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📣 کانال ما ",'url'=>"http://t.me/$channel"]]
]
])
]);
}else{
Bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://e-charge.ga/code/?text=$cgame&photo=logo.jpg",
'caption'=>"هرکی زود تر متنی که تو عکس رو بفرسته برنده میشه 🤩
📱دستور ارسال :
/speed Code",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📣 کانال ما ",'url'=>"http://t.me/$channel"]]
]
])
]);
$gp['game'][] ="$cgame";
$gp = json_encode($gp);
file_put_contents("gp/$chat_id.json",$gp);
}
}else{
Bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"🌟 دستور مورد نظر یافت نشد ...",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📣 کانال ما ",'url'=>"http://t.me/$channel"]]
]
])
]);
}
}
//===================[SpeedGame]==================
elseif($textmassage =="stats" && in_array($from_id,$Dev)){
$cgp = count(scandir('gp/'))-2;
$cmember = count(scandir('data/'))-2;
Bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"🌟 آمار گروه های ربات [$cgp] میباشد
🌟 آمار کاربران ربات [$cmember] میباشد",
'reply_to_message_id'=>$message_id
]);
}
?>