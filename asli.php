<?php
include "../Button.php";

if(preg_match('/^\/([Ss]tart)(.*)/',$text)){
preg_match('/^\/([Ss]tart)(.*)/',$text,$match);
mkdir("user/".$from_id);

if ($type_chat == 'group' | $type_chat == 'supergroup'){
mkdir("Group/b".$Group);
mkdir("Group/b".$Group."/".$from_id);
SendChatAction($chatid,"typing");
	SendMessage($chatid,"سلام به ربات مدیریت گروه پیشرفته خوش اومدید✔️","html","true",$button_start_group);
}else{
	if ($fadmin == $admin |  $fadmin == $admin1 |  $fadmin == $admin2){
SendMessage($chatid,"سلام ادمین خوش اومدی","html","true",$button_start_admin);
	    
	}else{ 
	    	SendMessage($chatid," سلام به ربات مدیریت گروه خوش اومدی 
			این ربات توسط ریبورن ساخته شده است","html","true",$button_start_user);
	    
	    
	}}	}
elseif ($text == "نمایش فایل عددی") {
  	if ($fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2){
  	save($from_id."/command.txt","fileid");
  		
  	SendMessage($chatid,"فایل رو بفرست ","html","true");
  	}
  }
  elseif ($command == "fileid") {
  	
  		  	save($from_id."/command.txt","none");

  	SendMessage($chatid,"$video ","html","true");
  	
  }
  
  elseif($tch != 'member' && $tch != 'creator' && $tch != 'administrator' && $tch2 != 'member' && $tch2 != 'creator' && $tch2 != 'administrator'){
      
 $down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$Group."&user_id=".$from_id.""));
 $txxt122112 = file_get_contents("Group/b".$Group."/AdminList.txt");

	if($down->result->status == 'creator'){
    SendMessage($from_id,"دوست عزیز برای استفاده از ربات و همچنان حمایت از ما لطفا وارد کانال

➡️ @botreborn_ch

شوید و join رو بزنید و سپس به ربات برگشته و ربات را استارت کنین.","html","true");
	SendMessage($chatid,"خطایی رخ داده است❗️
کاربر عزیز ( $first ) جزئیات در پیوی ربات به شما اطلاع داده شد لطفا بررسی و نسبت به رفع آن اقدام کنید🙏","html","true");
	return false;    
	}
	if (strpos($txxt122112 , "$from_id") !== false) {
    SendMessage($from_id,"دوست عزیز برای استفاده از ربات و همچنان حمایت از ما لطفا وارد کانال

➡️ @botreborn_ch

شوید و join رو بزنید و سپس به ربات برگشته و ربات را استارت کنین.","html","true");
	SendMessage($chatid,"خطایی رخ داده است❗️
کاربر عزیز ( $first ) جزئیات در پیوی ربات به شما اطلاع داده شد لطفا بررسی و نسبت به رفع آن اقدام کنید🙏","html","true");
	return false;    
	}
  }

	//=== settings to group
	 
 elseif ($text == "/settings") {
  	if ($type_chat == 'group' | $type_chat == 'supergroup'){
  		$lockvidio = file_get_contents("Group/b".$Group."/lockvidio.txt");
  		
  	SendMessage($chatid,"تنظیمات گروه به شرح زیر","html","true",$button_settings);
  	}
  }
  elseif ($data == "amar") {
	$Group = $update->callback_query->message->chat->id;
	$txtt = file_get_contents("admin/group.txt");
	$member_id = explode("\n",$txtt);
	$group = count($member_id);
	$txttt = file_get_contents("admin/supergroup.txt");
	$member_idd = explode("\n",$txttt);
	$supergroup = count($member_idd);
	$txtttt = file_get_contents("admin/user.txt");
	$member_iddd = explode("\n",$txtttt);
	$user = count($member_iddd);
	
	$groupa = "$group";
$supergroupa = "$supergroup";
	$allgroup = $groupa + $supergroupa;
	bot("editMessagetext",[
			"chat_id"=>$chat_id,
			"message_id"=>$message_id,
			"text"=>"
آمار گروه و کاربران به شرح زیر است :",
			"parse_mode"=>"html",
			"reply_markup"=>json_encode([
					"inline_keyboard"=>[
							[["text"=>"$group","callback_data"=>"lockvidio"],["text"=>"تعداد گروه","callback_data"=>"lockvidio"]],
	[["text"=>"$supergroup","callback_data"=>"lockvidio"],["text"=>"تعداد سوپرگروه","callback_data"=>"lockvidio"]],
	[["text"=>"$user","callback_data"=>"lockvidio"],["text"=>"تعداد اعضا","callback_data"=>"lockvidio"]],
	[["text"=>"$allgroup","callback_data"=>"lockvidio"],["text"=>"تمام گروه","callback_data"=>"lockvidio"]],
		[["text"=>"برگشت","callback_data"=>"backsettingshome"]],

			],
					"resize_keyboard"=>true
			])
	]);
	} 
	elseif (strpos($textmassage, '/rmsg') !== false) {
    if ($tc == 'group' | $tc == 'supergroup') {
        if ($from_id == $owners) {
            $num = str_replace("/rmsg", "", $textmassage);
            if ($num <= 100 && $num >= 1) {
                for ($i = $message_id; $i >= $message_id - $num; $i--) {
                    MrPHPBot('deletemessage', [
                        'chat_id' => $chat_id,
                        'message_id' => $i,
                    ]);
                }
                MrPHPBot('sendmessage', [
                    'chat_id' => $chat_id,
                    'text' => "تعداد $num  پیام پاک شد️🚯",
                ]);
            } else {
                MrPHPBot('sendmessage', [
                    'chat_id' => $chat_id,
                    'text' => "اخطار\nعدد باید بین 1 و 100 باشد.",
                ]);
            }
        }
    }
}

  elseif ($data == "lockother") {
     $Group = $update->callback_query->message->chat->id;
    	$lockvidio = file_get_contents("Group/b".$Group."/lockvidio.txt");
	$lockaudio = file_get_contents("Group/b".$Group."/lockaudio.txt");
	$lockmusic = file_get_contents("Group/b".$Group."/lockmusic.txt");
	$lockphoto = file_get_contents("Group/b".$Group."/lockphoto.txt");
	$locklink = file_get_contents("Group/b".$Group."/locklink.txt");
	$lockusername = file_get_contents("Group/b".$Group."/lockusername.txt");
	$lockedite = file_get_contents("Group/b".$Group."/lockedite.txt");
	$locksimcart = file_get_contents("Group/b".$Group."/locksimcart.txt");
		$lockcude = file_get_contents("Group/b".$Group."/lockcude.txt");
	$lockloc = file_get_contents("Group/b".$Group."/lockloc.txt");
	$locktel = file_get_contents("Group/b".$Group."/locktel.txt");
	$locksticker = file_get_contents("Group/b".$Group."/locksticker.txt");
	$lockfor = file_get_contents("Group/b".$Group."/lockfor.txt");
	$lockgame = file_get_contents("Group/b".$Group."/lockgame.txt");
	$lockgroup = file_get_contents("Group/b".$Group."/lockgroup.txt");
$lockfarsi_value = file_get_contents("Group/b".$Group."/lockfarsi_value.txt");
		$lockfarsi = file_get_contents("Group/b".$Group."/lockfarsi.txt");
		$lockvidio_value = file_get_contents("Group/b".$Group."/lockvidio_value.txt");
		$locken_value = file_get_contents("Group/b".$Group."/locken_value.txt");
		$locken = file_get_contents("Group/b".$Group."/locken.txt");
		bot("editMessagetext",[
			 "chat_id"=>$chat_id,
 			"message_id"=>$message_id,
				"text"=>"
تنظیمات گروه به شرح زیر است:",
				"parse_mode"=>"html",
				"reply_markup"=>json_encode([
						"inline_keyboard"=>[
	[["text"=>"وضعیت:","callback_data"=>"lockvidio"],["text"=>"قفل:","callback_data"=>"lockvidio"]],
	[["text"=>"$lockgame","callback_data"=>"lockvidio"],["text"=>"بازی:","callback_data"=>"lockvidio"]],
	[["text"=>"$lockfor","callback_data"=>"lockvidio"],["text"=>"فوروارد:","callback_data"=>"lockvidio"]],
	[["text"=>"$locksticker","callback_data"=>"lockvidio"],["text"=>"استیکر:","callback_data"=>"lockvidio"]],
	[["text"=>"$locktel","callback_data"=>"lockvidio"],["text"=>"مخاطب:","callback_data"=>"lockvidio"]],
	[["text"=>"$lockloc","callback_data"=>"lockvidio"],["text"=>"مکان:","callback_data"=>"lockvidio"]],
	[["text"=>"$locksimcart ","callback_data"=>"lockvidio"],["text"=>"اپوراتور:","callback_data"=>"lockvidio"]],
	[["text"=>"$lockedite ","callback_data"=>"lockvidio"],["text"=>"ویرایش:","callback_data"=>"lockvidio"]],
	[["text"=>"$lockusername","callback_data"=>"lockvidio"],["text"=>"یوزرنیم:","callback_data"=>"lockvidio"]],
	[["text"=>"$locklink","callback_data"=>"lockvidio"],["text"=>"لینک:","callback_data"=>"lockvidio"]],
	[["text"=>"$lockgroup","callback_data"=>"lockvidio"],["text"=>"گروه:","callback_data"=>"lockvidio"]],
	[["text"=>"$lockfarsi","callback_data"=>"lockvidio"],["text"=>"فارسی::","callback_data"=>"lockvidio"]],
	[["text"=>"$locken","callback_data"=>"lockvidio"],["text"=>"انگلیسی::","callback_data"=>"lockvidio"]],
	[["text"=>"برگشت","callback_data"=>"backsettings"]],

						],
						"resize_keyboard"=>true
				])
		]);
	}
	 elseif ($data == "lockelan") {
 $Group = $update->callback_query->message->chat->id;
 	$welcome = file_get_contents("Group/b".$Group."/welcome.txt");
 	$leftgorup = file_get_contents("Group/b".$Group."/leftgorup.txt");

 	bot("editMessagetext",[
 			"chat_id"=>$chat_id,
 			"message_id"=>$message_id,
 			"text"=>"
تنظیمات گروه به شرح زیر است:",
 			"parse_mode"=>"html",
 			"reply_markup"=>json_encode([
 					"inline_keyboard"=>[
 							[["text"=>"وضعیت:","callback_data"=>"lockvidio"],["text"=>"اعلان:","callback_data"=>"lockvidio"]],
 					[["text"=>"$welcome","callback_data"=>"lockvidio"],["text"=>"خوش آمدگویی:","callback_data"=>"lockvidio"]],
 					 					[["text"=>"$leftgorup","callback_data"=>"lockvidio"],["text"=>"خروج کاربر:","callback_data"=>"lockvidio"]],

 				 					[["text"=>"برگشت","callback_data"=>"backsettings"]],
 
 			],
 					"resize_keyboard"=>true
 			])
 	]);
 }
elseif ($data == "lockreane") {
     $Group = $update->callback_query->message->chat->id;
    	$lockvidio = file_get_contents("Group/b".$Group."/lockvidio.txt");
	$lockaudio = file_get_contents("Group/b".$Group."/lockaudio.txt");
	$lockmusic = file_get_contents("Group/b".$Group."/lockmusic.txt");
	$lockphoto = file_get_contents("Group/b".$Group."/lockphoto.txt");
	$locklink = file_get_contents("Group/b".$Group."/locklink.txt");
	$lockusername = file_get_contents("Group/b".$Group."/lockusername.txt");
	$lockedite = file_get_contents("Group/b".$Group."/lockedite.txt");
	$locksimcart = file_get_contents("Group/b".$Group."/locksimcart.txt");
		$lockcude = file_get_contents("Group/b".$Group."/lockcude.txt");
	$lockloc = file_get_contents("Group/b".$Group."/lockloc.txt");
	$locktel = file_get_contents("Group/b".$Group."/locktel.txt");
	$locksticker = file_get_contents("Group/b".$Group."/locksticker.txt");
	$lockfor = file_get_contents("Group/b".$Group."/lockfor.txt");
	$lockgame = file_get_contents("Group/b".$Group."/lockgame.txt");
		$lockvidio_value = file_get_contents("Group/b".$Group."/lockvidio_value.txt");
		bot("editMessagetext",[
			 "chat_id"=>$chat_id,
 			"message_id"=>$message_id,
				"text"=>"
تنظیمات گروه به شرح زیر است:",
				"parse_mode"=>"html",
				"reply_markup"=>json_encode([
						"inline_keyboard"=>[
			[["text"=>"وضعیت:","callback_data"=>"lockvidio"],["text"=>"قفل:","callback_data"=>"lockvidio"]],
					[["text"=>"$lockaudio","callback_data"=>"lockvidio"],["text"=>"صدا:","callback_data"=>"lockvidio"]],
					[["text"=>"$lockvidio","callback_data"=>"lockvidio"],["text"=>"ویدیو:","callback_data"=>"lockvidio"]],
					[["text"=>"$lockmusic","callback_data"=>"lockvidio"],["text"=>"موزیک:","callback_data"=>"lockvidio"]],
					[["text"=>"$lockphoto","callback_data"=>"lockvidio"],["text"=>"تصویر:","callback_data"=>"lockvidio"]],	
								[["text"=>"برگشت","callback_data"=>"backsettings"]],

						],
						"resize_keyboard"=>true
				])
		]);
	}
	
   elseif ($data == "backsettings") {
  	bot('editMessagetext',[
  			'chat_id'=>$chat_id,
 			'message_id'=>$message_id,
  				'text'=>"
تنظیمات گروه به شرح زیر است:",
  		'parse_mode'=>'html',
'reply_markup'=>json_encode([
		'inline_keyboard'=>[
[["text"=>"🖥 قفل رسانه ","callback_data"=>'lockreane']],
[["text"=>"🔕 اعلان ها ","callback_data"=>'lockelan']],
[["text"=>"🔒 دیگر قفل ها","callback_data"=>'lockother']],
[["text"=>" ادمین ها ","callback_data"=>'adminlist']],

		     	
            	],
            	'resize_keyboard'=>true
       		])
			]);
  	
  }
   elseif ($data == "backsettingshome") {
  	bot('editMessagetext',[
  			'chat_id'=>$chat_id,
 			'message_id'=>$message_id,
  				'text'=>"
به صفحه اصلی بازگشتید:",
  		'parse_mode'=>'html',
'reply_markup'=>json_encode([
		'inline_keyboard'=>[
		[['text'=>'راهنما','callback_data'=>'help'],['text'=>'اضافه کردن به گروه','url'=>'https://t.me/SmartFastBot?startgroup=new']],
				[["text"=>"درباره ما","callback_data"=>"about"],["text"=>"آمار گروه","callback_data"=>"amar"]],
											[["text"=>"کانال توسعه دهنده","url"=>"https://t.me/botreborn_ch"]],

		     	
            	],
            	'resize_keyboard'=>true
       		])
			]);
  	
  }
   //admin list
elseif ($text == "/admins") {
  
		$infobot = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatAdministrators?chat_id=".$Group.""));
 $admin1 = "".$infobot->result[0]->user->first_name."";
 $admin2 = "".$infobot->result[1]->user->first_name."";
 $admin3 = "".$infobot->result[2]->user->first_name."";
 $admin4 = "".$infobot->result[3]->user->first_name."";
 $admin5 = "".$infobot->result[4]->user->first_name."";
 $admin6 = "".$infobot->result[5]->user->first_name."";
 $admin7 = "".$infobot->result[6]->user->first_name."";
 $admin8 = "".$infobot->result[7]->user->first_name."";
 $admin9 = "".$infobot->result[8]->user->first_name."";
 $admin10 = "".$infobot->result[9]->user->first_name."";
  $adminuser1 = "".$infobot->result[0]->user->username."";
 $adminuser2 = "".$infobot->result[1]->user->username."";
 $adminuser3 = "".$infobot->result[2]->user->username."";
 $adminuser4 = "".$infobot->result[3]->user->username."";
 $adminuser5 = "".$infobot->result[4]->user->username."";
 $adminuser6 = "".$infobot->result[5]->user->username."";
 $adminuser7 = "".$infobot->result[6]->user->username."";
 $adminuser8 = "".$infobot->result[7]->user->username."";
 $adminuser9 = "".$infobot->result[8]->user->username."";
 $adminuser10 = "".$infobot->result[9]->user->username."";
	bot('sendmessage',[
		
			'chat_id'=>$chatid,
			
			'text'=>"لیست ادمین	ها:",
			'parse_mode'=>'html',
			'reply_markup'=>json_encode([
					'inline_keyboard'=>[

 [
 ["text"=>"$admin1","url"=>"http://telegram.me/$adminuser1"]
 ],
 [
 		["text"=>"$admin2","url"=>"http://telegram.me/$adminuser2"]
 ],
 [
 		["text"=>"$admin3","url"=>"http://telegram.me/$adminuser3"]
 ],
 [
 		["text"=>"$admin4","url"=>"http://telegram.me/$adminuser4"]
 ],
 [
 		["text"=>"$admin5","url"=>"http://telegram.me/$adminuser5"]
 ],
 [
 		["text"=>"$admin6","url"=>"http://telegram.me/$adminuser6"]
 ],
 [
 		["text"=>"$admin7","url"=>"http://telegram.me/$adminuser7"]
 ],
 [
 		["text"=>"$admin8","url"=>"http://telegram.me/$adminuser8"]
 ],
 [
 		["text"=>"$admin9","url"=>"http://telegram.me/$adminuser9"]
 ],
 [
 		["text"=>"$admin10","url"=>"http://telegram.me/$adminuser10"]
 ]
				
					]
			])
			]);
 }
elseif ($data == "adminlist") {
    $Group = $update->callback_query->message->chat->id;
		$infobot = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatAdministrators?chat_id=".$Group.""));
 $admin1 = "".$infobot->result[0]->user->first_name."";
 $admin2 = "".$infobot->result[1]->user->first_name."";
 $admin3 = "".$infobot->result[2]->user->first_name."";
 $admin4 = "".$infobot->result[3]->user->first_name."";
 $admin5 = "".$infobot->result[4]->user->first_name."";
 $admin6 = "".$infobot->result[5]->user->first_name."";
 $admin7 = "".$infobot->result[6]->user->first_name."";
 $admin8 = "".$infobot->result[7]->user->first_name."";
 $admin9 = "".$infobot->result[8]->user->first_name."";
 $admin10 = "".$infobot->result[9]->user->first_name."";
  $adminuser1 = "".$infobot->result[0]->user->username."";
 $adminuser2 = "".$infobot->result[1]->user->username."";
 $adminuser3 = "".$infobot->result[2]->user->username."";
 $adminuser4 = "".$infobot->result[3]->user->username."";
 $adminuser5 = "".$infobot->result[4]->user->username."";
 $adminuser6 = "".$infobot->result[5]->user->username."";
 $adminuser7 = "".$infobot->result[6]->user->username."";
 $adminuser8 = "".$infobot->result[7]->user->username."";
 $adminuser9 = "".$infobot->result[8]->user->username."";
 $adminuser10 = "".$infobot->result[9]->user->username."";
	bot('editMessagetext',[
		
			'chat_id'=>$chat_id,
			'message_id'=>$message_id,
			'text'=>"لیست ادمین	ها:",
			'parse_mode'=>'html',
			'reply_markup'=>json_encode([
					'inline_keyboard'=>[

 [
 ["text"=>"$admin1","url"=>"http://telegram.me/$adminuser1"]
 ],
 [
 		["text"=>"$admin2","url"=>"http://telegram.me/$adminuser2"]
 ],
 [
 		["text"=>"$admin3","url"=>"http://telegram.me/$adminuser3"]
 ],
 [
 		["text"=>"$admin4","url"=>"http://telegram.me/$adminuser4"]
 ],
 [
 		["text"=>"$admin5","url"=>"http://telegram.me/$adminuser5"]
 ],
 [
 		["text"=>"$admin6","url"=>"http://telegram.me/$adminuser6"]
 ],
 [
 		["text"=>"$admin7","url"=>"http://telegram.me/$adminuser7"]
 ],
 [
 		["text"=>"$admin8","url"=>"http://telegram.me/$adminuser8"]
 ],
 [
 		["text"=>"$admin9","url"=>"http://telegram.me/$adminuser9"]
 ],
 [
 		["text"=>"$admin10","url"=>"http://telegram.me/$adminuser10"]
 ],
									[
		['text'=>'برگردیم ◀','callback_data'=>'backsettings']
							]
					]
			])
			]);
 }
 //admin list
 //= lock video 
  elseif ($data == "lockvidio") {
  bot('answerCallbackQuery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>'جنبه نمایشی دارد ',
		'show_alert'=>'true'
    ]);
}
elseif ($data == "help" ) {
	bot('editMessagetext',[
    'chat_id'=>$chat_id,
	'message_id'=>$message_id,
    'text'=>"🤖دستورات ربات :
❗️برای  اضافه کردن گروه به ربات
/add
❗️حذف گروه از ربات
/removegroup
❗️تنظمات گروه به صورت شیشه ای
/settings
❗️قفل کردن 
/lock text
جای text‌ یکی از کلمات انگلیسی زیرو بزنید:
vidio = ویدیو
photo = عکس
audio = صدا
music = موزیک
link = لینک
Username = نام کاربری
oprator = اپوراتور
location = مکان
contact = مخاطب
sticker = استیکر
forward = فوروارد
game = بازی
group = قفل کردن گروه
farsi =  فارسی
en =‌انگلیسی
❗️ برای بازکردن
/unlock text
دستورات قبلی
❗️برای حذف کاربر اخر قفل kick بفرستید
برای هشدار دادن warn‌و حذف پیام pm
مثال :
/lock en pm
/lock en kick
/lock en warn 
دقت‌کنید حتما lock  و نوع قفل اول باشه
❗️خوش امد گویی
برای فعال
/welcome on
برای غیرفعال
/welcome off
❗️حذف کاربری
روی چت کاربر ریپلی کنید  و /kick رو بفرستید
❗️دستور /id‌ اطلاعات شما و /info‌اطلاعات گروه رو نشون میده",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	[['text'=>'راهنما','callback_data'=>'help'],['text'=>'اضافه کردن به گروه','url'=>'https://t.me/SmartFastBot?startgroup=new']],
			[["text"=>"درباره ما","callback_data"=>"about"]],
			[["text"=>"کانال توسعه دهنده","url"=>"https://t.me/botreborn_ch"]],

            	],
            	'resize_keyboard'=>true
       		])
]);

 } 
 elseif ($data == "cammands") {
 	bot('editMessagetext',[
 			'chat_id'=>$chat_id,
 			'message_id'=>$message_id,
 			'text'=>"/kick
با ریپلی کردن این دستور روی متن کاربر ربات کاربر رو حذف میکنه
/add
اضافه کردن گروه به ربات
 /removegroup 
حذف گروه از ربات",
 			'parse_mode'=>'html',
 			'reply_markup'=>json_encode([
 					'inline_keyboard'=>[
 							[["text"=>"قفل  رسانه","callback_data"=>"ghoflresane"]],
 					[["text"=>"دستورات","callback_data"=>"cammands"]],
 					[["text"=>"دیگر قفل ها","callback_data"=>"ghoflother"]],
 					[["text"=>"اضافه  و حذف کردن ربات به گروه","callback_data"=>"addtogroap"]],
 					 
 
 			],
 					'resize_keyboard'=>true
 			])
 	]);
 
 }elseif ($data == "ghoflresane") {
 	bot('editMessagetext',[
 			'chat_id'=>$chat_id,
 			'message_id'=>$message_id,
 			'text'=>"برای قفل کردن موارد رسانه با دستور /lock  کار کنید! و برای ازاد کردن /unlock
قفل هایی که فعال هستند :
/lock vidio
قفل کردن ویدیو
/unlock
باز کردن ویدیو
/lock photo
قفل کردن عکس
/unlock photo
ازاد کردن کس
/lock audio
قفل کردن صدا
/unlock audio
ازاد کردن صدا
/lock music
قفل کردن موزیک
/unlock music
ازاد کردن موزیک 

به طور‌خودکار قفلا روی هشداز تنظیم شدن برای تغییر ان کافیه اخر هر دستور قفل kick به معنی حذف کاربر و یا warn به معنی هشدار رو ارسال کنید
برای مثال :
/lock photo kick
کاربر رو موقع ارسال عکس پاک‌میکنه
/lock vidio warn
کاربر رو موقع ارسال ویدیو فقط هشدار میده",
 			'parse_mode'=>'html',
 			'reply_markup'=>json_encode([
 					'inline_keyboard'=>[
 							[["text"=>"قفل  رسانه","callback_data"=>"ghoflresane"]],
 					[["text"=>"دستورات","callback_data"=>"cammands"]],
 					[["text"=>"دیگر قفل ها","callback_data"=>"ghoflother"]],
 					[["text"=>"اضافه  و حذف کردن ربات به گروه","callback_data"=>"addtogroap"]],
 					 
 
 			],
 					'resize_keyboard'=>true
 			])
 	]);
 
 }
  elseif ($text == "/help") {
 	bot('sendmessage',[
 			'chat_id'=>$chatid,
 			 			'text'=>"🤖دستورات ربات :
❗️برای  اضافه کردن گروه به ربات
/add
❗️حذف گروه از ربات
/removegroup
❗️قفل کردن 
/lock text
جای text‌ یکی از کلمات انگلیسی زیرو بزنید:
vidio = ویدیو
photo = عکس
audio = صدا
music = موزیک
link = لینک
Username = نام کاربری
oprator = اپوراتور
location = مکان
contact = مخاطب
sticker = استیکر
forward = فوروارد
game = بازی
group = قفل کردن گروه
farsi =  فارسی
en =‌انگلیسی
❗️ برای بازکردن
/unlock text
دستورات قبلی
❗️برای حذف کاربر اخر قفل kick بفرستید
برای هشدار دادن warn‌و حذف پیام pm
مثال :
/lock en pm
/lock en kick
/lock en warn 
دقت‌کنید حتما lock  و نوع قفل اول باشه
❗️خوش امد گویی
برای فعال
/welcome on
برای غیرفعال
/welcome off
❗️حذف کاربری
روی چت کاربر ریپلی کنید  و /kick رو بفرستید
❗️دستور /id‌ اطلاعات شما و /info‌اطلاعات گروه رو نشون میده",
 			'parse_mode'=>'html',
 		
 	]);
 
 }
  elseif ($data == "ghoflother") {
 	bot('editMessagetext',[
 			'chat_id'=>$chat_id,
 			'message_id'=>$message_id,
 			'text'=>"/lock link
قفل کردن لینک
/unlock link
باز کردن لینک
/lock username
قفل کردن یوزرنیم
/unlock username
باز کردم یوزرنیم
/lock edit
قفل کردن ادیت پیام
/unlock edit
باز کردن ادیت پیام
/lock oprator
قفل کردن تبلیغات سیم کارت ها
/unlock oprator
باز کردن تبلیغات سیم کارت ها
/lock location
قفل کردن ارسال مکان
/unlock location
باز کردن ارسال مکان
/lock contact
قفل کردن ارسال مخاطب
/unlock contact
بازکردن ارسال مخاطب
/lock sticker
قفل کردن ارسال استیکر
/unlock sticker
باز کردن قفل ارسال استیکر
/lock forward
قفل کردن فوروارد
/unlock forward
باز کردن فوروارد
/lock game
قفل کردن ارسال بازی
/unlock game
باز کردن ارسال بازی",
 			'parse_mode'=>'html',
 			'reply_markup'=>json_encode([
 					'inline_keyboard'=>[
 							[["text"=>"قفل  رسانه","callback_data"=>"ghoflresane"]],
 					[["text"=>"دستورات","callback_data"=>"cammands"]],
 					[["text"=>"دیگر قفل ها","callback_data"=>"ghoflother"]],
 					[["text"=>"اضافه  و حذف کردن ربات به گروه","callback_data"=>"addtogroap"]],
 					 
 
 			],
 					'resize_keyboard'=>true
 			])
 	]);
 
 }
elseif ($data == "about") {
	bot('editMessagetext',[
    'chat_id'=>$chat_id,
	'message_id'=>$message_id,
    'text'=>"ربات مدیریت گروه 
یک ربات API برای مدیریت گروه شماس!
نوشته شده توسط 🇮🇷 تیم رونکس",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	[["text"=>"راهنما","callback_data"=>"help"],["text"=>"اضافه کردن به گروه","url"=>"https://t.me/SmartFastBot?startgroup=new"]],
	[["text"=>"درباره ما","callback_data"=>"about"]],
	[["text"=>"کانال توسعه دهنده","url"=>"https://t.me/botreborn_ch"]],
            	],
            	'resize_keyboard'=>true
       		])
]);
 }
elseif ($data == "ps") {
	bot('editMessagetext',[
    'chat_id'=>$chat_id,
	'message_id'=>$message_id,
    'text'=>"هرگونه سوال و مشکل به پشتبانی پیام بدید",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	[["text"=>"کلید کنید","url"=>"https://t.me/boydev"]],
            	],
            	'resize_keyboard'=>true
       		])
]);
 }
elseif ($data == "helpp") {
	bot('editMessagetext',[
    'chat_id'=>$chat_id,
	'message_id'=>$message_id,
    'text'=>"سلام خدمت شما که مارو انتخاب کردید
	نحوه کار این ربات اینگونه است که اول رباتو به گروه برده و اونو ادمین کنید و سپس دستور /add رو بزنید",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	[["text"=>"کانال توسعه دهنده","url"=>"https://t.me/botreborn_ch"]],
            	],
            	'resize_keyboard'=>true
       		])
]);
}
elseif(preg_match('/^\/([Kk]ick)(.*)/',$text)){
$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
$replyy = $update->message->reply_to_message->from->id;
if ($type_chat == 'group' | $type_chat == 'supergroup' and $down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
preg_match('/^\/([Kk]ick)(.*)/',$text,$match);

$match[2] = str_replace(" ","",$match[2]);
	$match[2] = str_replace("\n","",$match[2]);
save($from_id."/banusergp.txt","$replyy");
$txxt = file_get_contents("member/".$from_id."/banusergp.txt");
$ban = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/kickChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$match[2].""));
$banq = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/kickChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$replyy.""));
	save($from_id."/command.txt","none");
	bot('sendChatAction',[
    'chat_id'=>$chatid,
    'action'=>'typing']);
	bot('sendmessage',[
    'chat_id'=>$chatid,
    'text'=>"کاربر حذف شد",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
            	
            	'resize_keyboard'=>true
       		])
			]);}else{bot('sendChatAction',[
    'chat_id'=>$chatid,
    'action'=>'typing']);
	bot('sendmessage',[
    'chat_id'=>$chatid,
    'text'=>"شما ادمین نیستید",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
            	
            	'resize_keyboard'=>true
       		])
			]);
	}}
elseif ($text == "/info" or $text == "/info@botreborn_chfun_bot") {
if ($type_chat == 'group' | $type_chat == 'supergroup'  ){
$rank = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id.""));
  $membergroap = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMembersCount?parse_mode=HTML&chat_id=".$Group .""));
 $infobot = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getMe"));
  $from_id = $update->message->from->id;
$from_first = $update->message->from->first_name;
$from_last = $message->from->last_name;
$from_user = $message->from->username;
$Group = $update->message->chat->id;
$Group_name = $update->message->chat->title;
  bot('sendmessage',[
       'chat_id'=>$chatid,
    'text'=>"
👤اطلاعات شما
🔻نام شما: $from_first
🔻 نام خانوداگی شما: $from_last
🔻نام کاربری شما $from_user
🔻ای دی $from_id
👥اطلاعات گروه
🔻نام گروه $Group_name
🔻ای دی $Group
🔻مقام:".$rank ->result->status."
🔻تعداد اعضا:".$membergroap->result."
👥درباره ربات
🔻ای دی : ".$infobot ->result->id."
🔻نام ربات : ".$infobot ->result->first_name."
🔻نام کاربری : ".$infobot ->result->username."

",
    'parse_mode'=>'html',
     ]);
  }
}
?>