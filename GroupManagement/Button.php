<?php



$button_back_admin = json_encode(['keyboard'=>[
[['text'=>"برگشت"]],
],'resize_keyboard'=>true]);

//================E Button Admin================//

//================S Button start  User================//

$button_start_group = json_encode(['inline_keyboard'=>[
[['text'=>'کانال توسعه دهنده','url'=>'http://telegram.me/botreborn_ch']]
],'resize_keyboard'=>true]);

$button_lockother = json_encode(['inline_keyboard'=>[
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
						[["text"=>"برگشت","callback_data"=>"backsettings"]],
	],'resize_keyboard'=>true]);
	
$button_settings = json_encode(['inline_keyboard'=>[
	[["text"=>"🖥 قفل رسانه ","callback_data"=>'lockreane']],
[["text"=>"🔕 اعلان ها ","callback_data"=>'lockelan']],
[["text"=>"🔒 دیگر قفل ها","callback_data"=>'lockother']],
[["text"=>" ادمین ها ","callback_data"=>'adminlist']],

	],'resize_keyboard'=>true]);
	
$button_start_admin = json_encode(['inline_keyboard'=>[
		[['text'=>'🍀راهنما🍀','callback_data'=>'help'],['text'=>'🔥اضافه کردن به گروه🔥','url'=>'https://t.me/SmartFastBot?startgroup=new']],
				[["text"=>"☄️درباره ما☄️","callback_data"=>"about"],["text"=>"آمار گروه","callback_data"=>"amar"]],
						[["text"=>"💎کانال توسعه دهنده💎","url"=>"https://t.me/botreborn_ch"]],
						],'resize_keyboard'=>true]);

						$button_start_user = json_encode(['inline_keyboard'=>[
								[['text'=>'🍀راهنما🍀','callback_data'=>'help'],['text'=>'🔥اضافه کردن به گروه🔥','url'=>'https://t.me/SmartFastBot?startgroup=new']],
				[["text"=>"☄️درباره ما☄️","callback_data"=>"about"],["text"=>"⛈آمار گروه⛈","callback_data"=>"amar"]],
				[["text"=>"☎️پشتبانی☎️","callback_data"=>"ps"],["text"=>"💻نحوه کار💻","callback_data"=>"helpp"]],
											[["text"=>"💎کانال توسعه دهنده💎","url"=>"https://t.me/botreborn_ch"]],

	],'resize_keyboard'=>true]);
	
//============================E Buttons============================//

	?>