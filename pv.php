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
// pv
if($textmassage=="/start" && $tc == "private" or $textmassage=="/panel" && $tc == "private"){
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"سلام😉

به ربات مدیریت گروه خوش امدید🌹

از طریق این ربات راحت میتونی گروه خودت رو به صورت خودکار و بیست چهارساعته مدیریت کنی😍

✨این ربات دارای قابلیت حذف پیام بدون اخراج کاربره
➖➖➖➖➖
کانال ما : 
🆔 : @$channel
➖➖➖

از دکمه های زیر استفاده کن🔻",
     'reply_markup'=>json_encode([
            	'keyboard'=>[
				[
				['text'=>"🛍 خرید ربات"]
				],
				[
				['text'=>"🗄 دستورات و امکانات"],['text'=>"🚀 دریافت رایگان"]
				],
                 [
                   ['text'=>"🔖 راهنما"],['text'=>"🚦 پشتیبانی | ارسال نظر"]
                ],
 	],
            	'resize_keyboard'=>true
       		])
    		]);
}
 elseif($textmassage=="🛍 خرید ربات" && $tc == "private"){
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به بخش خرید ربات خوش امدید❤️
➖➖➖➖➖
💭نرخ خرید ربات به شکل زیر است

💵یک ماه : 5000 تومان
💴دو ماه : 10000 تومان
💶نامحدود : 15000 تومان
➖➖➖
➕سرور پر قدرت

➕صد در صد انلاین بدون خاموشی

➕پشتیبانی 24 ساعته

➕امکانات فوق العاده
➖➖
💥جهت دیدن امکانات ربات کافیست به گروه زیر مراجعه کنید
➖➖➖
کانال ما : 
🆔 : @$channel
",
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>"1⃣ یک ماه",'url'=>"https://gpgrambot.tk/gpgrambot/pay/pay.php?amount=5000&callback=https://gpgrambot.tk/gpgrambot/pay/by-5000.php?id=$from_id"],['text'=>"2⃣  دو ماه",'url'=>"https://gpgrambot.tk/gpgrambot/pay/pay.php?amount=10000&callback=https://gpgrambot.tk/gpgrambot/pay/by-10000.php?id=$from_id"]
	],
	[
	['text'=>"3⃣  نامحدود",'url'=>"https://gpgrambot.tk/gpgrambot/pay/pay.php?amount=15000&callback=https://gpgrambot.tk/gpgrambot/pay/by-15000.php?id=$from_id"]
	],
	              [
              ['text'=>"🔸 گروه پشتیبانی",'url'=>"https://t.me/joinchat/D_YTwT_4s3rTodKw9KdKfw"]
              ] 
              ],
        ])
            ]);
        }
elseif($textmassage=="🔙 برگشت" && $tc == "private"){
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به منوی اصلی بازگشتید✔️
➖➖➖➖
از دکمه های زیر استفاده کنید🔻",

   'reply_markup'=>json_encode([
    'keyboard'=>[
				[
				['text'=>"🛍 خرید ربات"]
				],
				[
				['text'=>"🗄 دستورات و امکانات"],['text'=>"🚀 دریافت رایگان"]
				],
                 [
                   ['text'=>"🔖 راهنما"],['text'=>"🚦 پشتیبانی | ارسال نظر"]
                ],
 	],
            	'resize_keyboard'=>true
       		])
    		]);
$user["userjop"]["$from_id"]["file"]="none";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
}
elseif($textmassage=="🔖 راهنما" && $tc == "private"){
if($tch == 'member' or $tch == 'creator' or $tch == 'administrator'){
		jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🚦لطفا بخش مورد نظر خود را انتخاب نماید
➖➖➖➖➖➖
🔻از دکمه های زیر استفاده کنید",
   'reply_markup'=>json_encode([
    'keyboard'=>[
				[
				['text'=>"🤖 فیلم امورشی ادمین کردن"]
				],
								[
				['text'=>"🏅 اموزش ادمین کردن"],['text'=>"🎖 اموزش نصب"]
				],
				[
			['text'=>"🔙 برگشت"]
				]
 	],
            	'resize_keyboard'=>true
       		])
    		]);
        }
else
{
		jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📣 برای استفاده از امکانات رایگان ربات شما باید ابتدا عضو کانال اطلاع رسانی ربات شوید
	
📍 سپس به ربات برگشته و مجدد امتحان کنید تا از امکانات فوق العاده ربات بهر مند شوید

📌 ادرس کانال : @$channel",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>"📢 عضویت در کانال",'url'=>"https://telegram.me/$channel"]
	],
              ]
        ])
            ]);
}
}
elseif($textmassage=="🏅 اموزش ادمین کردن" && $tc == "private"){
		jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 آموزش ادمین کردن ربات در گروه
➖➖
ℹ️ تلگرام فارسی :
1️⃣ اول ربات رو تو گروهتون اضافه کنید کنید 
2️⃣سپس به قسمت یرایش گروه
3️⃣ سپس برین به  قسمت مدیران 
4️⃣ سپس افزودن مدیر
5️⃣ سپس افزودن مدیر بعد وارد مخاطبینتون میشه و بالا سمت راست یه گزینه ذره بین هستش 
روی ان کلیک کنید
6️⃣ سپس یوزرنیم ربات که در زیر مینویسم رو اونجا تو ذره بین باید وارد کنید
@$usernamebot
7️⃣ سپس روی ربات کلیک کرده و تمام دست رسی های ادمین را فعال کنید


ℹ️ تلگرام انگلیسی :
1️⃣ اول ربات رو تو گروهتون اضافه کنید کنید
2️⃣ سپس به edit گروه خود بروید 
3️⃣ سپس روی گزینه adminstrator بزنید سپس روی add adminstrator  بزنید
4️⃣ سپس افزودن مدیر بعد وارد مخاطبینتون میشه و بالا سمت راست یه گزینه ذره بین هستش 
روی ان کلیک کنید
5️⃣ سپس یوزرنیم ربات که در زیر مینویسم رو اونجا تو ذره بین باید وارد کنید
@$usernamebot
6️⃣ سپس روی ربات کلیک کرده و تمام دست رسی های ادمین را فعال کنید",
	]);
}
elseif($textmassage=="🎖 اموزش نصب" && $tc == "private"){
		jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"1⃣تنها مدیران اجازه اضافه کردن ربات به گروه رو دارند

2️⃣دریافت ربات با تمام امکانات به صورت رایگان  برای 7 روز است

3⃣ربات باید حتما در گروه ادمین باشد تا بتواند به صورت کامل عمل کند

4⃣درصورتی که نیاز به اموزش تصویری دارید از بخش راهنما اقدام کنید

⚠️ تمام دست رسی ها یک ادمین را به ربات بدهید
➖➖➖➖
🔶اموزش افزودن ربات به گروه به صورت متنی :

1⃣ابتدا با استفاده از دکمه زیر ربات را به گروه خود اضافه کنید

2⃣سپس ربات را ادمین کنید
[اموزش نصب به صورت فیلم در راهنما موجود است]

3⃣با ارسال دستور
/addfree
یا

نصب رایگان

ربات برای شما برای 7 روز فعال میشود

4⃣سپس با ارسال دستور
/panel
یا
/help

اقدام به انجام تنظیمات ربات کنید😄
➖➖",
	]);
}
elseif($textmassage=="🤖 فیلم امورشی ادمین کردن" && $tc == "private"){
	jijibot('sendvideo',[
	'chat_id'=>$chat_id,
	'video'=>new CURLFile("other/admin.mp4"),
	'caption'=>"📍 فیلم اموزشی ادمین کردن ربات",
    		]);
}
elseif($textmassage=="🚀 دریافت رایگان" && $tc == "private"){
if($tch == 'member' or $tch == 'creator' or $tch == 'administrator'){
		jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به بخش دریافت ربات رایگان خوش امدید😀
➖➖➖➖➖
📍 شما با استفاده از این بخش میتوانید ربات را برای گروه خودتان به صورت رایگان دریافت کنید
",
 'reply_markup'=>json_encode([
    'keyboard'=>[
				[
				['text'=>"📅 هفت روز رایگان"],['text'=>"👥 زیر مجموعه گیری"]
				],
	[
	['text'=>"🔙 برگشت"]
	],
 	],
            	'resize_keyboard'=>true
       		])
            ]);
        }
else
{
		jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📣 برای استفاده از امکانات رایگان ربات شما باید ابتدا عضو کانال اطلاع رسانی ربات شوید
	
📍 سپس به ربات برگشته و مجدد امتحان کنید تا از امکانات فوق العاده ربات بهر مند شوید

📌 ادرس کانال : @$channel",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>"📢 عضویت در کانال",'url'=>"https://telegram.me/$channel"]
	],
              ]
        ])
            ]);
}
}
		elseif($textmassage=="👥 زیر مجموعه گیری" && $tc == "private"){
		jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"شما با استفاده از این بخش میتوانید با دعوت دیگران ربات رو به زمان بیش تری رایگان دریافت کنید
➖➖➖➖➖
🔻از دکمه های زیر استفاده کنید🔻",
 'reply_markup'=>json_encode([
    'keyboard'=>[
				[
				['text'=>"🔗 لینک دعوت من"],['text'=>"ℹ️ اطلاعات حساب"]
				],
	[
	['text'=>"دریافت ربات [15 روز]"],['text'=>"دریافت ربات [30 روز]"]
	],
		[
	['text'=>"دریافت ربات [60 روز]"],['text'=>"🔙 برگشت"]
	],
 	],
            	'resize_keyboard'=>true
       		])
            ]);
        }
			elseif($textmassage=="🔗 لینک دعوت من" && $tc == "private"){
		jijibot('sendphoto',[
	'chat_id'=>$chat_id,
	'photo'=>new CURLFile("other/logo.jpg"),
	'caption'=>"دوست داری گروهت رو 24 ساعته مدیریت کنی ؟ 😃
➖
از ربات های بی کیفیت خسته شدی ؟ ☹️

ربات رایگان ولی خوب برای مدیریت گروهت میخوای ؟ 👾

🤖 کافیه بری ربات زیر :
https://telegram.me/$usernamebot?start=$from_id",
            ]);
			jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 بنر بالا حاوی لینک شخصی شماست بنر را برای دوستان و گروه های خود ارسال کنید و با دریافت زیر مجموعه ربات رایگان دریافت کنید
➖➖
ℹ️ برای اطلاع از تعداد حساب و میزان دعوت شما از دکمه حساب کاربری استفاده کنید",
            ]);
        }
					elseif($textmassage=="ℹ️ اطلاعات حساب" && $tc == "private"){
$invite = $user["userjop"]["$from_id"]["invite"];
if($invite != false){
		jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖 اطلاعات حساب شما :
➖➖

📍نام : $first_name
📍یوزرنیم : @$username
📍ایدی : $from_id
📍تعداد زیر مجموعه : $invite",
            ]);
        }
else
{
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖 اطلاعات حساب شما :
➖➖

📍نام : $first_name
📍یوزرنیم : @$username
📍ایدی : $from_id
📍تعداد زیر مجموعه : 0",
            ]);
}
}
elseif($textmassage=="دریافت ربات [15 روز]" && $tc == "private"){
$invite = $user["userjop"]["$from_id"]["invite"];
if($invite > 20){
		jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 تبریک شما میتوانید رباترا برای 15 روز دریافت کنید
➖➖
ℹ️ لینک گروه خود را ارسال کنید",
            ]);
				jijibot('sendmessage',[
				'chat_id'=>$Dev[0],
	'text'=>"📍 یک کاربر توانست ربات رایگان دریافت کند به پشتیبانی متصل شد
➖➖	
🔖 اطلاعات وی :

📍نام : $first_name
📍یوزرنیم : $username
📍ایدی : $from_id
📍تعداد زیر مجموعه : $invite",
            ]);
$plusinvite = $invite - 20;
$user["userjop"]["$from_id"]["invite"]=$plusinvite;
$user["userjop"]["$from_id"]["file"]="sup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
        }
else
{
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 شما هنوز زیر مجموعه کافی برای دریافت ربات ندارید
➖➖
ℹ️ باید 20 نفر را به ربات دعوت کنید",
            ]);
}
}
elseif($textmassage=="دریافت ربات [30 روز]" && $tc == "private"){
$invite = $user["userjop"]["$from_id"]["invite"];
if($invite > 40){
		jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 تبریک شما میتوانید رباترا برای 30 روز دریافت کنید
➖➖
ℹ️ لینک گروه خود را ارسال کنید",
            ]);
				jijibot('sendmessage',[
				'chat_id'=>$Dev[0],
	'text'=>"📍 یک کاربر توانست ربات رایگان دریافت کند به پشتیبانی متصل شد
➖➖	
🔖 اطلاعات وی :

📍نام : $first_name
📍یوزرنیم : $username
📍ایدی : $from_id
📍تعداد زیر مجموعه : $invite",
            ]);
$plusinvite = $invite - 40;
$user["userjop"]["$from_id"]["invite"]=$plusinvite;
$user["userjop"]["$from_id"]["file"]="sup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
        }
else
{
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 شما هنوز زیر مجموعه کافی برای دریافت ربات ندارید
➖➖
ℹ️ باید 40 نفر را به ربات دعوت کنید",
            ]);
}
}
elseif($textmassage=="دریافت ربات [60 روز]" && $tc == "private"){
$invite = $user["userjop"]["$from_id"]["invite"];
if($invite > 60){
		jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 تبریک شما میتوانید رباترا برای 60 روز دریافت کنید
➖➖
ℹ️ لینک گروه خود را ارسال کنید",
            ]);
				jijibot('sendmessage',[
				'chat_id'=>$Dev[0],
	'text'=>"📍 یک کاربر توانست ربات رایگان دریافت کند به پشتیبانی متصل شد
➖➖	
🔖 اطلاعات وی :

📍نام : $first_name
📍یوزرنیم : $username
📍ایدی : $from_id
📍تعداد زیر مجموعه : $invite",
            ]);
$plusinvite = $invite - 60;
$user["userjop"]["$from_id"]["invite"]=$plusinvite;
$user["userjop"]["$from_id"]["file"]="sup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
        }
else
{
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 شما هنوز زیر مجموعه کافی برای دریافت ربات ندارید
➖➖
ℹ️ باید 60 نفر را به ربات دعوت کنید",
            ]);
}
}
elseif(strpos($textmassage , '/start ') !== false && $tc == "private") {
$from = str_replace("/start ","",$textmassage);
@$user = json_decode(file_get_contents("data/user.json"),true);
if(in_array($from_id, $user["userlist"])) {
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 شما قبلا عضو ربات شده اید
	
از دکمه های زیر استفاده کن 🔻",
     'reply_markup'=>json_encode([
            	'keyboard'=>[
				[
				['text'=>"🛍 خرید ربات"]
				],
				[
				['text'=>"🗄 دستورات و امکانات"],['text'=>"🚀 دریافت رایگان"]
				],
                 [
                   ['text'=>"🔖 راهنما"],['text'=>"🚦 پشتیبانی | ارسال نظر"]
                ],
 	],
            	'resize_keyboard'=>true
       		])
            ]);
}
else 
{
$invite = $user["userjop"]["$from"]["invite"];
$plusinvite = $invite + 1;	
	jijibot('sendmessage',[
	'chat_id'=>$from,
	'text'=>"📍 یک کابر با لینک دعوت شما وارد ربات شد
➖➖
ℹ️ تعداد افرادی که دعوت کرده اید	: $plusinvite",
    		]);
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"سلام😉

به ربات مدیریت گروه خوش امدید🌹

از طریق این ربات راحت میتونی گروه خودت رو به صورت خودکار و بیست چهارساعته مدیریت کنی😍

✨این ربات دارای قابلیت حذف پیام بدون اخراج کاربره
➖➖➖➖➖
کانال ما : 
🆔 : @$channel
➖➖➖

از دکمه های زیر استفاده کن🔻",
     'reply_markup'=>json_encode([
            	'keyboard'=>[
				[
				['text'=>"🛍 خرید ربات"]
				],
				[
				['text'=>"🗄 دستورات و امکانات"],['text'=>"🚀 دریافت رایگان"]
				],
                 [
                   ['text'=>"🔖 راهنما"],['text'=>"🚦 پشتیبانی | ارسال نظر"]
                ],
 	],
            	'resize_keyboard'=>true
       		])
            ]);
$user["userjop"]["$from"]["invite"]=$plusinvite;
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif($textmassage=="📅 هفت روز رایگان" && $tc == "private"){
	jijibot('sendvideo',[
	'chat_id'=>$chat_id,
	'video'=>new CURLFile("other/admin.mp4"),
	'caption'=>"📍 فیلم اموزشی ادمین کردن ربات",
    		]);
		jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🏅شما با استفاده از این بخش میتوانید برای گروه خودت ربات مدیریت گروه با تمام امکانات دریافت کنید

🏵قبل از دریافت ربات به نکات زیر توجه داشته باشید
➖➖➖

1️⃣تنها مدیران اجازه اضافه کردن ربات به گروه رو دارند

2️⃣دریافت ربات با تمام امکانات به صورت رایگان  برای 7 روز است

3️⃣ربات باید حتما در گروه ادمین باشد تا بتواند به صورت کامل عمل کند

4️⃣درصورتی که نیاز به اموزش تصویری دارید از بخش راهنما اقدام کنید

5️⃣ تعداد اعضا باید بیش تر از 10 نفر باشد

⚠️ تمام دست رسی ها یک ادمین را به ربات بدهید
➖➖➖➖
🔶اموزش افزودن ربات به گروه به صورت متنی :

1️⃣ابتدا با استفاده از دکمه زیر ربات را به گروه خود اضافه کنید

2️⃣سپس ربات را ادمین کنید
[اموزش ادمین کردن ربات در پیام بالا ارسال شد]

3️⃣با ارسال دستور
/addfree
یا

نصب رایگان

ربات برای شما برای 7 روز فعال میشود

4️⃣سپس با ارسال دستور
/panel
یا
/help

اقدام به انجام تنظیمات ربات کنید😄
➖➖",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>"📍 اضافه کردن ربات به گروه",'url'=>"https://telegram.me/$usernamebot?startgroup=addfree"]
	],
              ]
        ])
            ]);
        }
	elseif($textmassage=="🚦 پشتیبانی | ارسال نظر" && $tc == "private"){
				jijibot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"نظرات شما باعث دلگرمی ماست❤️
➖➖➖➖➖
انتفادات پیشنهادات و نظرات خود را برای ما ارسال کنید✔️
➖➖➖
پیام خود را وارد کنید",
                 'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"🔙 برگشت"]
	],
	]
	])
	]);
$user["userjop"]["{$from_id}"]["file"]="sup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
	}
elseif($update->message && $rt && in_array($from_id,$Dev) && $tc == "private"){
	jijibot('sendmessage',[
        "chat_id"=>$chat_id,
        "text"=>"پیام شما برای فرد ارسال شد ✔️"
		]);
	jijibot('sendmessage',[
        "chat_id"=>$reply,
        "text"=>"👤پاسخ پشتیبان برای شما :

`$textmassage`",
'parse_mode'=>'MarkDown'
		]);
}
?>