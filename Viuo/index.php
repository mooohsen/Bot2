<?php
/*
نوشته شده توسط : @white_sudo
کانال سازنده : @white_program
*/
ob_start();
include 'Class.php';
$button_manage = json_encode(['keyboard'=>[
[['text'=>'📪پیام همگانی'],['text'=>'📮فوروارد همگانی']],
[['text'=>'🆚سکه به کاربر'],['text'=>'💰سکه همگانی']],
[['text'=>'تعیین کد رایگان'],['text'=>'📛کسر سکه📛']],
[['text'=>'🔖پیگیری سفارش'],['text'=>'📊آمار']],
[['text'=>'❌بلاک کردن کاربر'],['text'=>'✅آنبلاک کردن کاربر']],
[['text'=>'↩️منوی اصلی']],
],'resize_keyboard'=>true]);
$button_official = json_encode(['keyboard'=>[
[['text'=>'💰 جمع آوری سکه رایگان 💰']],
[['text'=>'🔍 پیگیری سفارشات'],['text'=>'🏧 خودپرداز ربات']],
[['text'=>'👤حساب کاربری شما'],['text'=>'📝 ثبت تبلیغ رایگان']],
[['text'=>'☎️ پشتیبانی'],['text'=>'📚راهنمای جامع'],['text'=>'⚖️ قوانین و مقررات']],
],'resize_keyboard'=>true]);
$button_shopp = json_encode(['keyboard'=>[
[['text'=>'انتقال سکه💳']],
[['text'=>'کد هدیه🎁'],['text'=>'🛒 فروشگاه سکه']],
[['text'=>'↩️منوی اصلی']],
],'resize_keyboard'=>true]);
$button_back = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی']],
],'resize_keyboard'=>true]);
$update = json_decode(file_get_contents('php://input'));
$data = $update->callback_query->data;
$chatid = $update->callback_query->message->chat->id;
$fromid = $update->callback_query->message->from->id;
$frmid = $update->callback_query->from->id;
$ffirst = $update->callback_query->from->first_name;
$userrr = $update->callback_query->from->username;
$messageid = $update->callback_query->message->message_id;
$data_id = $update->callback_query->id;
$txt = $update->callback_query->message->text;
$chat_id = $update->message->chat->id;
$from_id = $update->message->from->id;
$from_username = $update->message->from->username;
$from_first = $update->message->from->first_name;
$forward_id = $update->message->forward_from->id;
$forward = $update->message->forward_from;
$forward_chat = $update->message->forward_from_chat;
$forward_chat_username = $update->message->forward_from_chat->username;
$forward_chat_msg_id = $update->message->forward_from_message_id;
$text = $update->message->text;
$message_id = $update->message->message_id;
$stickerid = $update->message->sticker->file_id;
$videoid = $update->message->video->file_id;
$voiceid = $update->message->voice->file_id;
$fileid = $update->message->document->file_id;
$photo = $update->message->photo;
$photoid = $photo[count($photo)-1]->file_id;
$musicid = $update->message->audio->file_id;
$caption = $update->message->caption;
$reply = $update->message->reply_to_message->forward_from->id;
$reply_username = $update->message->reply_to_message->forward_from->username;
$reply_first = $update->message->reply_to_message->forward_from->first_name;
$cde = time();
$code = "$from_id$cde";
$name = $update->message->from->first_name;
$username = $update->message->from->username;
$command = file_get_contents('user/'.$from_id."/command.txt");
$gold = file_get_contents('user/'.$from_id."/gold.txt");
$coin = file_get_contents('user/'.$from_id."/coin.txt");
$wait = file_get_contents('user/'.$from_id."/wait.txt");
$coin_wait = file_get_contents('user/'.$wait."/coin.txt");
$pay = file_get_contents('user/'.$from_id."/pay.txt");
$tr = file_get_contents('user/'.$from_id."/tr.txt");
$nmber = file_get_contents('user/'.$from_id."/nmber.txt");
$tarikh = file_get_contents('user/'.$from_id."/tarikh.txt");
$spam = file_get_contents('user/'.$from_id."/spam.txt");
$bartar = file_get_contents("admin/bartar.txt");
$zirseke = file_get_contents('user/'.$from_id."/zirseke.txt");
if($zirseke == null){$zirseke = "0";}
$bazco = file_get_contents('user/'.$from_id."/bazco.txt");
if($bazco == null){$bazco = "0";}
$porseke = file_get_contents('user/'.$from_id."/porseke.txt");
if($porseke == null){$porseke = "0";}
$tabno = file_get_contents('user/'.$from_id."/tabno.txt");
if($tabno == null){$tabno = "0";}
$tabok = file_get_contents('user/'.$from_id."/tabok.txt");
if($tabok == null){$tabok = "0";}
$karbarpor = file_get_contents('user/'.$from_id."/karbarpor.txt");
if($karbarpor == null){$karbarpor = "0";}
$gozaresh = file_get_contents('user/'.$from_id."/gozaresh.txt");
if($gozaresh == null){$gozaresh = "0";}
$Member = file_get_contents('admin/Member.txt');
$NZR = file_get_contents('admin/NZR.txt');
$Tedad_Nazar = file_get_contents('admin/Tedad Nazar.txt');
$ads = file_get_contents('ads/Ads.txt');
$ads_end = file_get_contents('ads/Ads End.txt');
$ads_all = file_get_contents('ads/Ads All.txt');
$datestart=file_get_contents('user/'.$from_id.'/datestart.txt',"$date");
$timestart=file_get_contents('user/'.$from_id.'/timestart.txt',"$time");
$dt = json_decode(file_get_contents("http://topapi.ir/date-time/"));
$banner = file_get_contents("admin/matnbanner.txt");
$date = $dt->date_fa;
$time = $dt->time_fa;
$block = file_get_contents('admin/block.txt');
$blacklist = file_get_contents("admin/blacklist.txt");
$channel="veiw_white";
$truechannel = json_decode(file_get_contents("https://api.telegram.org/botتوکن رباتتون/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
$tch = $truechannel->result->status;
$truechannel2 = json_decode(file_get_contents("https://api.telegram.org/botتوکن رباتتون/getChatMember?chat_id=@White_program&user_id=".$from_id));
$tch2 = $truechannel2->result->status;
// start source
if (strpos($blacklist, "$from_id")) {
        SendMessage($chat_id, "هی کاربر عزیز شما از سرور ما بلاک شدید  دیگه پیام ندید با تشکر");
   }
  //==================
elseif($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
 bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"با سلام😊👋

💠برای استفاده از  ربات باید در کانال ما عضو شوید تا از اخبار ها مطلع شوید.

💠پس از عضو شدن دوباره به ربات مراجعه و دستور زیر را ارسال کنید.

🎗 /start 🎗",
 'parse_mode'=>'html',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [
                    ['text'=>"ورود به کانال",'url'=>"https://telegram.me/veiw_white"]
                ]
            ]
        ])
    ]);
}
elseif($tch2 != 'member' && $tch2 != 'creator' && $tch2 != 'administrator'){
 bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"با سلام😊👋

💠برای استفاده از  ربات باید در کانال ما عضو شوید تا از اخبار ها مطلع شوید.

💠پس از عضو شدن دوباره به ربات مراجعه و دستور زیر را ارسال کنید.

🎗 /start 🎗",
 'parse_mode'=>'html',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [
                    ['text'=>"ورود به کانال دوم",'url'=>"https://telegram.me/white_program"]
                ]
            ]
        ])
    ]);
}
	//==================
  if(preg_match('/^\/([Ss]tart)(.*)/',$text)){
    preg_match('/^\/([Ss]tart)(.*)/',$text,$match);
    $match[2] = str_replace(" ","",$match[2]);
    $match[2] = str_replace("\n","",$match[2]);
    if($match[2] != null){
    if (strpos($Member , "$from_id") == false){
    if($match[2] != $from_id){
    if (strpos($gold , "$from_id") == false){
    $txxt = file_get_contents('user/'.$match[2]."/gold.txt");
    $pmembersid= explode("\n",$txxt);
    if (!in_array($from_id,$pmembersid)){
      $aaddd = file_get_contents('user/'.$match[2]."/gold.txt");
      $aaddd .= $from_id."\n";
        file_put_contents('user/'.$match[2]."/gold.txt",$aaddd);
    }
    $mtch2 = file_get_contents('user/'.file_get_contents("user/".$match[2]."/zir.txt")."/coin.txt");
    file_put_contents("user/".file_get_contents("user/".$match[2]."/zir.txt")."/coin.txt",($mtch2+2) );
    $mtch = file_get_contents('user/'.$match[2]."/coin.txt");
    file_put_contents("user/".$match[2]."/coin.txt",($mtch+10) );
    file_put_contents("user/".$from_id."/zir.txt",$match[2]);
    file_put_contents('user/'.$match[2]."/zirseke.txt",(file_get_contents('user/'.$match[2]."/zirseke.txt")+10));
    $mtch3 = file_get_contents('user/'.file_get_contents("user/".$match[2]."/zir.txt")."/porseke.txt");
    file_put_contents("user/".file_get_contents("user/".$match[2]."/zir.txt")."/porseke.txt",($mtch3+2) );
    $mtch4 = file_get_contents('user/'.file_get_contents("user/".$match[2]."/zir.txt")."/karbarpor.txt");
    file_put_contents("user/".file_get_contents("user/".$match[2]."/zir.txt")."/karbarpor.txt",($mtch4+1) );
    SendMessage($match[2],"🆕 یک نفر با لینک اختصاصی شما وارد ربات شد.","html","true");
    }
    }
    }
    }
	SendMessage($chat_id,"📉 به ربات افزایش بازدید پست های تلگرامی خوش آمدید!!!

✅ نحوه کار:
پست های تبلیغاتی داخل کانال اختصاصی برای شما به نمایش گذاشته میشن، و شما با بازدید از هر پست سکه رایگان دریافت میکنین.
با این سکه های جمع آوری شده میتونین بنرتون رو به معرض نمایش گذاشته و سین رایگان دریافت کنین... 

♦️ به کمک این ربات میتونین در چالشها،تعداد بازدید پست اختصاصی خودتون رو بالا برده و از رقبا پیشی بگیرید!

♦️ شما میتونین محصولات خودتون رو در معرض دید هزاران نفر قرار داده و میزان فروش کالاهای خودتون رو افزایش بدید! 

♦️ بااستفاده از این ربات قادر خواهید بود لینک کانال یا گروه خودتون رو به صورت رایگان و بدون هیچ هزینه ای، در معرض دید هزاران نفر قرار داده، و اعضای کانال یا گروه خودتون رو به راحتی بالا ببرید.

⚠️لطفا قبل از ثبت سفارش و جمع آوری سکه رایگان،حتما صفحات [ 📚راهنمای جامع ] و
[ ⚖️قوانین ومقررات ] را به دقت مطالعه فرمایید.
با سپاس فراوان...

- Advertisement: @veiw_white
- View: @white_program
- Support: @white_sudo_bot","html","true",$button_official);
}
 //==================
	elseif($text == '↩️منوی اصلی' || preg_match('/^\/([Cc]ancel)/',$text)){
  file_put_contents('user/'.$from_id."/command.txt","none");
  SendMessage($chat_id,"↩️ شما به منوی اصلی برگشتید","html","true",$button_official);
  }
	//==================
  elseif($text == '💰 جمع آوری سکه رایگان 💰'){
   bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "🔗در این قسمت شما میتوانید به دو روش سکه رایگان کسب کنید؛

💠روش اول:
- شمامیتوانید با لمس گزینه
( جمع آوری سکه داخل کانال💰 ) وارد کانال تبلیغاتی ما شده،و بعد از مشاهده هریک از پست ها، بااستفاده از گزینه
( ✅ثبت بازدید ) سکه رایگان دریافت کنید.

▪️در این روش،باهر بازدید 1 سکه دریافت خواهیدکرد.

💠روش دوم:
- دراین روش شما عزیزان،بدون اینکه وارد کانال تبلیغاتی بشین، باکمک گزینه
( 💠جمع آوری سکه رایگان در ربات💠 ) میتونین داخل ربات اقدام به ثبت بازدید، وجمع آوری سکه رایگان کنید.

▪️در این روش،باهر بازدید 0.5  سکه دریافت خواهیدکرد.

لطفا یکی از گزینه های زیر را انتخاب کنید👇

را لمس کنید،تا بتونین از دکمه های ربات به صورت نامحدود استفاده  کنید.🌀",
            'reply_markup' => json_encode([
                'keyboard' => [
                   
                    [
                        ['text' => '💠جمع آوری سکه رایگان در ربات💠' ],['text' => '📣 جمع آوری سکه در کانال']
                    ],
                    [
                        ['text' => "↩️منوی اصلی"],['text' => '🤝 کسب سکه با زیرمجموعه گیری']
                    ]
                ],
                'resize_keyboard'=>true
            ])
            
        ]); 
  }
  //===============
  elseif($text == '💠 جمع آوری سکه رایگان در ربات 💠'){
  file_put_contents('user/'.$from_id."/rand.txt",null);
  $all_member = fopen( "ads/Ads.txt", 'r');
        while( !feof( $all_member)) {
             $user = fgets( $all_member);
            $user = str_replace(" ",'',$user);
            $user = str_replace("\n",'',$user);
            $adn = file_get_contents("ads/ads admin/$user.txt");
            $tl = file_get_contents("ads/ads tally/$user.txt");
            $ex = explode("\n",$tl);
            if(!in_array($from_id,$ex) && $user != null && $user != '' && $user != "\n" && $from_id != $adn){
            file_put_contents('user/'.$from_id."/rand.txt",$user);
            break;
            }else{
            file_put_contents('user/'.$from_id."/rand.txt",null);
            }
        }
        $rand = file_get_contents("user/".$from_id."/rand.txt");
  if($rand == null){
  SendMessage($chat_id,"☢ دوست عزیز تبلیغی پیدا نشد. لطفا دوباره امتحان کنید:","html","true");
  file_put_contents("user/$from_id/tr.txt","$tr\ntrue" );
  }else{
  file_put_contents('user/'.$from_id."/bazco.txt",($bazco+1));
  $msg_id = file_get_contents("ads/ads msg id/$rand.txt");
  $msg_user = file_get_contents("ads/ads username/$rand.txt");
  ForwardMessage($chat_id,$msg_user,$msg_id);
  file_put_contents("user/$from_id/coin.txt",($coin + 1) );
   $usr = file_get_contents("ads/ads tally/$rand.txt");
    $pmembersid = explode("\n",$usr);
    if (!in_array($from_id,$pmembersid)){
        $aaddd = file_get_contents("ads/ads tally/$rand.txt");
        $aaddd .= $from_id."\n";
        file_put_contents("ads/ads tally/$rand.txt",$aaddd);
    }
    $member_id = explode("\n",$usr);
    $mmemcount = count($member_id);
    $tdd = file_get_contents("ads/ads tedad/$rand.txt");
    if($mmemcount >= $tdd){
       bot('deleteMessage',[
'chat_id'=>$Channel,
'message_id'=>$messageid
]);
    bot('deleteMessage',[
'chat_id'=>$Channel,
'message_id'=>$messageid -1
]);
    SendMessage($adn,"☢ سفارش تبلیغ با کد پیگیری $rand در $date | $time تموم شد.","html","true");
    file_put_contents("ads/ads ok/$rand.txt",'اتمام');
    file_put_contents("ads/Ads End.txt","$ads_end\n$rand");
    file_put_contents("ads/ads end/$rand.txt","$date | $time");
    file_put_contents("ads/ads etmam/$rand.txt","true");
    $str = str_replace("$rand\n",'',$ads);
    $str = str_replace("\n\n","\n",$ads);
    $str = str_replace("\n$rand",'',$ads);
    $str = str_replace("$rand",'',$ads);
    file_put_contents("ads/Ads.txt",$str);
    }
    }
  }
  //===============
  elseif($text == '📣 جمع آوری سکه در کانال'){
  SendMessage($chat_id,"💢 دراین قسمت با ورود به کانال تبلیغات ، میتوانید پست های دیگران را مشاهده نموده و در ازای هر بازدید سکه رایگان به دست آورید.

💢و درنهایت با این سکه های جمع آوری شده،میتونید تبلیغات خود یا دوستانتون رو ثبت کرده و یا سکه هاتون رو به فروش برسونید.

✅ برای مشاهده تبلیغات و جمع آوری سکه رایگان لطفا به لینک زیر مراجعه نموده و مطابق دستورالعمل پیش بروید.

🌐 آدرس کانال تبلیغات به همراه دستوالعمل:

🆔 https://t.me/Veiw_white/27040
","html","true",json_encode(['inline_keyboard'=>[
[['text'=>'📢 ورود به کانال تبلیغات وایت','url'=>"http://t.me/".str_replace("@",'',$Channel)]],
],
'resize_keyboard'=>true
]
));
  }
  //===============
  elseif($text == '📚راهنمای جامع'){
  SendMessage($chat_id,"📚 راهنمای جامع؛

💠 دراین بخش توضیحات کاملی درباره نحوه ی عملکرد ربات خدمت شما کاربران گرامی ارائه داده خواهد شد.

💠 درصورت عدم برطرف شدن مشکل، باپشتیبانی در ارتباط باشید.

❓سوال:
سین( بازدید یا ویو)چیست؟

✅پاسخ:
● این سوال بسیاری از افرادی است که به تازگی وارد دنیای تلگرام شده اند و هنوز آشنایی کاملی از این ابزار ارتباط جمعی ندارند.
سین یا ویو علامتی است که در پایین هر پست تلگرامی قرار میگیرد. این علامت در بیشتر مواقع با 👁‍🗨 یا 👁 شناخته میشود.
در کنار این علامت، همیشه یک عدد نمایش داده میشود، که این عدد نمایانگر تعداد افرادی است که از این پست بازدید کرده اند. هر چقدر این عدد بزرگتر باشد،تعداد افراد بیشتری از پست مربوطه بازدید کرده اند.

● هدف از ساخت این ربات، بالابردن تعداد ویوهای یک یا چند پست تلگرامی است.

❓سوال:
این افزایش سین یا بازدید به چه دردی میخورد؟

✅پاسخ:
● روزانه، داخل کانال های چالشی، رقابت های فراوانی برگزار میشود. سیستم رقابتی در این کانال ها به این صورت است که ،هر کدام از کاربران تعداد ویو بالایی کسب کنند، در این رقابت پیروز خواهند شد. به این جهت کاربران سعی در افزایش بازدید پست اختصاصی خود خواهند داشت. یکی از روش های افزایش این تعداد ویو، استفاده از ربات ویوگیر است. به کمک این ربات،به راحتی و باسرعت بالا خواهید توانست ویو یا بازدید پست اختصاصی خودتان را تا حد چشمگیری افزایش دهید.

● دلیل دیگر افزایش بازدیدهای یک پست تلگرامی،طبیعی جلوه دادن کانال های کم جمعیت از نظر عضو واقعی است. چون تنها اعضای واقعی قادر خواهند بود،برای یک پست، افزایش ویو داشته باشند. بااین ربات قادر خواهید بود،به راحتی تعداد ویو پست های کانال خودتون رو افزایش داده و تعداد اعضا را به تعداد ویوهای یک پست نزدیک تر کنید.

● برخی از کانال ها یا گروه های تلگرامی که تازه شروع به کار کرده اند،به کمک این ربات قادر خواهند بود تعداد اعضای واقعی خودشون رو بالا ببرند. به این صورت که مدیران کانال ها یا گروه های چت،یک پست با یک موضوعیت جامع داخل ربات ثبت میکنند. هر کدام از کاربران ربات، که تمایل داشته باشند عضو کانال یا گروه مربوطه خواهند شد. بدین ترتیب،اعضای واقعی کانال شما،افزایش خواهد یافت.

❓سوال:
چگونه میتوان سکه رایگان تهیه کرد؟

✅پاسخ:
شما کاربران گرامی میتوانید به سه روش سکه رایگان جمه آوری کنید.

● روش اول:
شمامیتونین با لمس گزینه
[ جمع آوری سکه در کانال💰 ] واردکانال تبلیغاتی ما شده،و بعد از مشاهده هریک از بنر ها،بااستفاده از گزینه [ ✅ ثبت بازدید ] سکه رایگان دریافت کنید.

● روش دوم:
دراین روش شما کاربران گرامی،بدون اینکه وارد کانال تبلیغاتی بشین، میتونین داخل ربات اقدام به ثبت بازدید،وجمع آوری سکه رایگان کنید.

● روش سوم:
روش بنردهی یکی از روش های کاربردی و موثر در جمع آوری سکه رایگان میباشد. شما عزیزان بادریافت بنر، و سین زدن آن در مدت زمان معین خواهید توانست، به راحتی سکه رایگان از مدیریت دریافت کنید.

❓سوال:
چگونه میتوان برای کاربر دیگری از ربات، سکه انتقال داد؟

✅پاسخ:
برای انتقال سکه به دوستانتون،کافیست پس از لمس دکمه[ انتقال سکه💳 ] در بخش [ 🏧خودپرداز ربات ] و وارد کردن آی دی مقصد،تعداد سکه های مورد نظر برای انتقال به کاربر موردنظر را وارد کنید.
(توجه داشته باشید که هیچ محدودیتی در تعداد سکه های انتقالی وجود نخواهد داشت)

❓سوال:
آی دی عددی( یا شماره کاربری)چیست؟ وچگونه میتوان آنرا تهیه کرد؟

✅پاسخ:
برای هریک از کاربران ربات،یک آی دی عددی اختصاصی پیشبینی شده است.
شماعزیزان برای انتقال سکه،بایستی از طریق این آی دی اقدام کنید. شماره ی کاربری هر فرد،از طریق دکمه [ 👤حساب کاربری شما ] در دسترس خواهد بود.

❓سوال:
برای ارائه درخواست و طرح سوال،چگونه میتوان با مدیریت در ارتباط بود؟

✅پاسخ:
درصورت مطرح شدن سوال،پرسش و یا ایجاد مشکل در فرآیند استفاده از ربات،میتوانید از طریق دکمه [ ☎️پشتیبانی ] بامدیریت ارتباط برقرار کرده ومشکل خود را برطرف کنید.
لطفا به مواردی که در دکمه پشتیبانی تذکر داده شده،توجه شود.

❓سوال:
چگونه میتوان زیرمجموعه گیری کرد؟و این کار چه سودی خواهد داشت؟!

✅ پاسخ:
● برای انجام این کار،میتوان از دکمه
[ زیرمجموعه گیری🤝 ] که در داخل پنل کاربری ربات قرار داده شده است، استفاده کرد.

● برای هر یک از کاربران، لینک دعوت اختصاصی درنظر گرفته شده است.
هر شخصی که قبلا عضو ربات نبوده باشد،واز طریق این لینک اختصاصی شما، به ربات دعوت شود،تعداد سکه معینی به عنوان هدیه به کاربر دعوت کننده تقدیم خواهد شد.

● با دعوتی که شما عزیزان از دوستان خود خواهید داشت،علاوه بر همکاری شما در پرجمعیت شدن کانال ویوگیر،و سریع تر شدن فرآیند جمع آوری سکه و ویو، میتوانید به راحتی سکه هدیه از طرف مدیریت دریافت کنید!","html","true",$button_official);
  }
  //===============
  elseif($text == '⚖️ قوانین و مقررات'){
  SendMessage($chat_id,"✅ لطفا قبل از ثبت تبلیغ،حتما صفحه قوانین را به دقت مطالعه فرمایید.

❗️⚖️❗️ قوانین ثبت تبلیغ ❗️⚖️❗️

👈قرار دادن پست های مربوط به:

🚫- تبلیغات بنر همکار(ویوگیر)و یا مشابه این چنین ربات ها و کانال ها
🚫-تبلیغات غیراخلاقی دارای مضامین و تصاویر منحرف جنسی و خلاف موازین شرعی
🚫- ثبت بنر های مغایر باقوانین جمهوری اسلامی ایران 
🚫- قرار دادن پست های دروغین،و نامطابق با مضمون کانال یا گروه معرفی شده در بنرتبلیغاتی
🚫- فریب افراد و کاربران به هر نحو
🚫- فحاشی و توهین
🚫- مزاحمت و پخش اطلاعات افراد
🚫- ثبت تبلیغات با متن طولانی و آزار دهنده
🚫- کلاهبرداری و پخش موارد جعلی
 هک و نفوذ، پخش برنامه های پولی به صورت رایگان و عدم رعایت حق کپی رایت

...همگی غیرمجاز بوده، و بلافاصله از کانال تبلیغات حذف خواهند شد!

❗️تذکر❗️                          ❗️تذکر❗️
● در صورت ثبت بنرهای مغایر باقوانین، و حذف تبلیغ مربوطه توسط مدیریت، سکه های هزینه شده، ضبط شده و به هیچ عنوان استرداد نخواهند شد!
- - - - - - - - - - - - - - - - - - - - - - - - - - -
⚠️قوانین ربات، به صورت دوره ای
برسی و اصلاح میشوند؛ لذا کاربران موظف اند، صفحه قوانین را پس از اعلام هر آپدیت، مطالعه نموده، و مطابق قوانین جدید عمل کنند.

● باتشکر از همراهی شما...","html","true",$button_official);
  }
  //===============
  elseif($text == '☎️ پشتیبانی'){
  SendMessage($chat_id,"📩 ارائه پرسش و درخواست:

1️⃣ شما کاربران گرامی به کمک پیامرسان قرارداده شده میتونین سوال، پیام، انتقاد و پیشنهادهای خودتون رو یادداشت کرده و ارسال نمایید.

2️⃣ تمام پرسش و درخواست خودتون رو داخل یک متن یادداشت کرده و ارسال کنید.
( لطفا از ارسال پیام های مکرر خودداری کنید)

3️⃣ لطفا قبل از ارائه درخواست،صفحات
( ⚖️ قوانین و مقررات ) و ( 📚راهنمای جامع ) را
به دقت مطالعه کنید؛ در صورت برطرف نشدن مشکل، یادداشت خود را به مدیریت ارائه دهید.

4️⃣ پیام شما توسط مدیریت برسی شده و درصورت لزوم پاسخ داده خواهد شد.
پس لطفا تا زمان دریافت پاسخ صبور باشید.

👤ارتباط با پشتیبانی:
🆔 @White_sudo_bot","html","true",$button_official);
  }
  //===============
  elseif($text == '🏧 خودپرداز ربات'){
  SendMessage($chat_id,"به خود پرداز ربات خوش آمدید!","html","true",$button_shopp);
  }
  //===============
  elseif($text == '🛒 فروشگاه سکه'){
  SendMessage($chat_id,"🔸 فروشگاه فعلا تعطیل است...","html","true");
  return false;
  file_put_contents('user/'.$from_id."/command.txt","buy");
  SendMessage($chat_id,"به فروشگاه ویوگیر حرفه ای خوش آمدید!

⁉️میخواهید چه مقدار حساب کاربری تون رو شارژ کنید؟
  
✅ تعداد سکه مورد نظرتون رو وارد کنید؛
(حداقل تعداد قابل سفارش🌕: $coin  سکه )","html","true",$button_back);
  }
  //===============
  elseif($command == 'buy'){
  if(preg_match('/^([0-9])/',$text) and $text >= 20){
  file_put_contents('user/'.$from_id."/command.txt","none");
  $mny = $text*5;
  $mnyfor = number_format($mny);
  $rial = $mny*10;
  SendMessage($chat_id,"مقدار سکه: $text
  مبلغ قابل پرداخت: $mnyfor تومان
  
  پس از پرداخت حساب شما اتومات شارژ میشه","html","true",json_encode(['inline_keyboard'=>[
[['text'=>'پرداخت','url'=>"http://domain/pay/seenbot/$from_id/$rial"]],
],'resize_keyboard'=>true]));
SendMessage($chat_id,"یک گزینه انتخاب کنید:","html","true",$button_official);
  }else{
  SendMessage($chat_id,"لطفا به عدد وارد کنید و کمتر از 20 سکه نمیتونید حسابتون رو شارژ کنید:","html","true",$button_back);
  }
  }
  //===============
  elseif($text == 'انتقال سکه💳'){
        if($coin < 40){
  SendMessage($chat_id,"🌱حداقل سکه برای انتقال 40 سکه میباشد.","html","true");
  }else{
  file_put_contents('user/'.$from_id."/command.txt","send coin");
  SendMessage($chat_id,"✅ به بخش انتقال سکه خوش آمدید!

👤 شماره کاربری مقصد را وارد کنید : 
( شماره کاربری هر فرد در قسمت حساب کاربری درج شده است )","html","true",$button_back);
  }
  }
  elseif($command == 'send coin'){
  $explode = explode("\n",$Member);
  if($text != $from_id && in_array($text,$explode)){
  file_put_contents('user/'.$from_id."/command.txt","send coin2");
  file_put_contents('user/'.$from_id."/wait.txt",$text);
  SendMessage($chat_id,"↕️ مقدار سکه شما: $coin
  ↕️ میخواهید چه تعداد سکه انتقال بدید:","html","true",$button_back);
  }else{
  SendMessage($chat_id,"↕️ شناسه کاربری نا معتبره یا شناسه کاربری خودتون رو وارد کردید","html","true",$button_back);
  }
  }
  elseif($command == 'send coin2'){
  if(preg_match('/^([0-9])/',$text)){
  if($text > $coin){
  SendMessage($chat_id,"↕️ مقدار سکه شما $coin میباشد.
  ↕️ به اندازه سکه خودتون میتونید انتقال بدید","html","true",$button_back);
  }else{
  file_put_contents("user/$wait/coin.txt",($coin_wait+$text) );
  file_put_contents("user/$from_id/coin.txt",($coin-$text) );
  file_put_contents('user/'.$from_id."/command.txt","none");
  SendMessage($chat_id,"↕️ مقدار $text به $wait انتقال داده شد.","html","true",$button_official);
  }
  }else{
  SendMessage($chat_id,"↕️ لطفا عددی وارد کنید","html","true",$button_back);
  }
  }
  //===============
  elseif($text == '👤حساب کاربری شما'){
  $member_id = explode("\n",$gold);
  $mmemcount = count($member_id) -1;
  $member_id2 = explode("\n",$pay);
  $mmemcount2 = count($member_id2) -1;
  SendMessage($chat_id,"💠 جزئیات حساب کاربری شما:
  - - - - - - - - - - - - - - - - - - - - - - - - - -
💢 نام کاربری: 
<code>$name</code>
🆔 آی دی تلگرامی شما: 
<code>@$username</code>
🔢 شماره (آی دی) عددی شما: 
<code>$from_id</code>
🔖 زیر مجموعه های شما: 0 نفر
زیر مجموعه های شما : <code>$mmemcount</code> 🔖 زیر
🗳 کل تبلیغات ثبت شده: 35 مرتبه
کل تبلیغات ثبت شده : <code> $mmemcount2</code> 🗳 مرتبه
💰 موجودی شما: 72.5 سکه!
موجودی شما ! : $coin 💰 سکه
- - - - - — - - - - - - - - - - - - - - - - - - - -
✅ فعالیت های امروز شما:

👁🗨 تعداد — ثبت بازدید — :  <code>$bazco </code> مرتبه
🤝جذب — زیر مجموعه — : 0 نفر
🖊 تعداد — ثبت تبلیغ — : 0 مرتبه","html","true",$button_back);
  }
  //===============
  elseif($text == '📝 ثبت تبلیغ رایگان'){
  if($coin < 5){
  SendMessage($chat_id,"✅ حداقل ثبت سفارش 5 می باشد...!","html","true");
  }else{
  file_put_contents('user/'.$from_id."/command.txt","set ads");
  if( ($coin%2) == 0){
  $coin = $coin;
  }else{
  $coin = $coin-1;
  }
  $cn = $coin ;
  $btn = [];
  $btn[] = [['text'=>"↩️منوی اصلی"]];
  if($cn >= 10){ $btn[] = [['text'=>'10 بازدید 👁🗨/ 10 سکه💰']]; }
  if($cn >= 20){ $btn[] = [['text'=>'20 بازدید 👁🗨/ 20 سکه💰']]; }
  if($cn >= 50){ $btn[] = [['text'=>'50 بازدید 👁🗨/ 50 سکه💰']]; }
  if($cn >= 100){ $btn[] = [['text'=>'100 بازدید 👁🗨/ 100 سکه💰']]; }
  if($cn >= 200){ $btn[] = [['text'=>'200 بازدید 👁🗨/ 200 سکه💰']]; }
  if($cn >= 300){ $btn[] = [['text'=>'300 بازدید 👁🗨/ 300 سکه💰']]; }
  
  SendMessage($chat_id,"✅ لطفا یکی از بسته های زیر رو انتخاب کنید؛
💠درحال حاضر بسته های،
10تایی/20تایی/50تایی/100تایی/200تایی/300تایی

قابل انتخاب میباشند.
- - - - - - - - - - - - - - - - - - - - - - - - - - -

💰موجودی شما: $coim سکه!","html","true",json_encode(['keyboard'=>$btn,'resize_keyboard'=>true]));
  }
  }
  //===============
  elseif($command == 'set ads'){
  if( ($coin%2) == 0){
  $coin = $coin;
  }else{
  $coin = $coin-1;
  }
  $cn = $coin; 
  if($text == "10 بازدید 👁🗨/ 10 سکه💰" and $cn >= 10){
  file_put_contents('user/'.$from_id."/wait.txt",10);
  file_put_contents('user/'.$from_id."/command.txt","set ads2");
  SendMessage($chat_id,"✅ شما بسته 10 بازدید رو انتخاب کرده اید!
 - - - - - - - - - - - - - - - - - - - - - - - - - - -
⚠️اخطار!
• ثبت تبلیغ های؛
خلاف قوانین جمهوری اسلامی--- دارای تصاویر منحرف وجنسی--- ربات های مشابه (افزایش ویو) --- متن های طولانی وآزار دهنده --- مزاحمت و فریب کاربران --- عدم رعایت حق کپی رایت و...

🚫...غیرمجاز بوده، و بلافاصله از داخل کانال تبلیغات حذف خواهند شد!
- - - - - - - - - - - - - - - - - - - - - - - - - - -
♻️ درصورتی که محتوای تبلیغ شما مغایر با قوانین ربات نیست، میتونین بنر خودتون رو ارسال کنین!","html","true",$button_back);
  }
  elseif($text == "20 بازدید 👁🗨/ 20 سکه💰" and $cn >= 20){
  file_put_contents('user/'.$from_id."/wait.txt",20);
  file_put_contents('user/'.$from_id."/command.txt","set ads2");
  SendMessage($chat_id,"✅ شما بسته 20 بازدید رو انتخاب کرده اید!
 - - - - - - - - - - - - - - - - - - - - - - - - - - -
⚠️اخطار!
• ثبت تبلیغ های؛
خلاف قوانین جمهوری اسلامی--- دارای تصاویر منحرف وجنسی--- ربات های مشابه (افزایش ویو) --- متن های طولانی وآزار دهنده --- مزاحمت و فریب کاربران --- عدم رعایت حق کپی رایت و...

🚫...غیرمجاز بوده، و بلافاصله از داخل کانال تبلیغات حذف خواهند شد!
- - - - - - - - - - - - - - - - - - - - - - - - - - -
♻️ درصورتی که محتوای تبلیغ شما مغایر با قوانین ربات نیست، میتونین بنر خودتون رو ارسال کنین!","html","true",$button_back);
  }
  elseif($text == "50 بازدید 👁🗨/ 50 سکه💰" and $cn >= 50){
  file_put_contents('user/'.$from_id."/wait.txt",50);
  file_put_contents('user/'.$from_id."/command.txt","set ads2");
  SendMessage($chat_id,"✅ شما بسته 50 بازدید رو انتخاب کرده اید!
 - - - - - - - - - - - - - - - - - - - - - - - - - - -
⚠️اخطار!
• ثبت تبلیغ های؛
خلاف قوانین جمهوری اسلامی--- دارای تصاویر منحرف وجنسی--- ربات های مشابه (افزایش ویو) --- متن های طولانی وآزار دهنده --- مزاحمت و فریب کاربران --- عدم رعایت حق کپی رایت و...

🚫...غیرمجاز بوده، و بلافاصله از داخل کانال تبلیغات حذف خواهند شد!
- - - - - - - - - - - - - - - - - - - - - - - - - - -
♻️ درصورتی که محتوای تبلیغ شما مغایر با قوانین ربات نیست، میتونین بنر خودتون رو ارسال کنین!","html","true",$button_back);
  }
  elseif($text == "100 بازدید 👁🗨/ 100 سکه💰" and $cn >= 100){
  file_put_contents('user/'.$from_id."/wait.txt",100);
  file_put_contents('user/'.$from_id."/command.txt","set ads2");
  SendMessage($chat_id,"✅ شما بسته 100 بازدید رو انتخاب کرده اید!
 - - - - - - - - - - - - - - - - - - - - - - - - - - -
⚠️اخطار!
• ثبت تبلیغ های؛
خلاف قوانین جمهوری اسلامی--- دارای تصاویر منحرف وجنسی--- ربات های مشابه (افزایش ویو) --- متن های طولانی وآزار دهنده --- مزاحمت و فریب کاربران --- عدم رعایت حق کپی رایت و...

🚫...غیرمجاز بوده، و بلافاصله از داخل کانال تبلیغات حذف خواهند شد!
- - - - - - - - - - - - - - - - - - - - - - - - - - -
♻️ درصورتی که محتوای تبلیغ شما مغایر با قوانین ربات نیست، میتونین بنر خودتون رو ارسال کنین!","html","true",$button_back);
  }
  elseif($text == "200 بازدید 👁🗨/ 200 سکه💰" and $cn >= 200){
  file_put_contents('user/'.$from_id."/wait.txt",200);
  file_put_contents('user/'.$from_id."/command.txt","set ads2");
  SendMessage($chat_id,"✅ شما بسته 200 بازدید رو انتخاب کرده اید!
 - - - - - - - - - - - - - - - - - - - - - - - - - - -
⚠️اخطار!
• ثبت تبلیغ های؛
خلاف قوانین جمهوری اسلامی--- دارای تصاویر منحرف وجنسی--- ربات های مشابه (افزایش ویو) --- متن های طولانی وآزار دهنده --- مزاحمت و فریب کاربران --- عدم رعایت حق کپی رایت و...

🚫...غیرمجاز بوده، و بلافاصله از داخل کانال تبلیغات حذف خواهند شد!
- - - - - - - - - - - - - - - - - - - - - - - - - - -
♻️ درصورتی که محتوای تبلیغ شما مغایر با قوانین ربات نیست، میتونین بنر خودتون رو ارسال کنین!","html","true",$button_back);
  }
  elseif($text == "300 بازدید 👁🗨/ 300 سکه💰" and $cn >= 300){
  file_put_contents('user/'.$from_id."/wait.txt",300);
  file_put_contents('user/'.$from_id."/command.txt","set ads2");
  SendMessage($chat_id,"✅ شما بسته 300 بازدید رو انتخاب کرده اید!
 - - - - - - - - - - - - - - - - - - - - - - - - - - -
⚠️اخطار!
• ثبت تبلیغ های؛
خلاف قوانین جمهوری اسلامی--- دارای تصاویر منحرف وجنسی--- ربات های مشابه (افزایش ویو) --- متن های طولانی وآزار دهنده --- مزاحمت و فریب کاربران --- عدم رعایت حق کپی رایت و...
	
🚫...غیرمجاز بوده، و بلافاصله از داخل کانال تبلیغات حذف خواهند شد!
- - - - - - - - - - - - - - - - - - - - - - - - - - -
♻️ درصورتی که محتوای تبلیغ شما مغایر با قوانین ربات نیست، میتونین بنر خودتون رو ارسال کنین!","html","true",$button_back);
  }
  else{
  SendMessage($chat_id,"✅ لطفا یکی از بسته های باز شده رو انتخاب کنید","html","true");
  }
  }
  //===============
  if($command == 'set ads2'){
  $cd = $code;
  if($forward_chat != null || $forward != null){
      $cdo = file_get_contents("ads/ads log/@$forward_chat_username|$forward_chat_msg_id.txt");
  file_put_contents('user/'.$from_id."/command.txt","none");
  file_put_contents('user/'.$from_id."/pay.txt","$pay\n🔖 $cd");
  file_put_contents("ads/ads msg id/$cd.txt",$message_id);
  file_put_contents("ads/ads tedad/$cd.txt",$wait);
  file_put_contents("ads/ads username/$cd.txt",$from_id);
  file_put_contents("ads/ads log/@$forward_chat_username|$forward_chat_msg_id.txt",$cd);
  file_put_contents("ads/ads tally/$cd.txt",'');
  file_put_contents("ads/ads ok/$cd.txt",'در انتظار تایید مدیران...');
  file_put_contents("ads/Ads All.txt","$cd\n$ads_all");
  file_put_contents("ads/ads admin/$cd.txt",$from_id);
  file_put_contents("ads/ads start/$cd.txt","$date | $time");
  file_put_contents("user/$from_id/coin.txt",($coin - ($wait)) );
  $coin2=file_get_contents('user/'.$from_id."/wait.txt");
  bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "⁉️ آیا مایل به ثبت تبلیغ فوق به میزان $coin2 بازدید هستید؟" ,
            'parse_mode' => "MarkDown",
            'reply_markup' => json_encode([
            'inline_keyboard'=> [
                    [
                         ['text' => "✅ بله", 'callback_data'=>"taiid|$from_id|$cd"] 
                         ]
                    ],
                    
            ])
        ]);                     
  }
  }
  elseif($text == 'کد هدیه🎁'){
 save('user/'.$from_id."/command.txt","useCode");
 var_dump(bot('sendMessage',[
     'chat_id'=>$update->message->chat->id,
     'text'=>"کد هدیه را ارسال کنید 💰 :",
     'parse_mode'=>'MarkDown',
     'reply_markup'=>json_encode([
         'keyboard'=>[
             [
                 ['text'=>"↩️منوی اصلی"]
             ]
         ],
         'resize_keyboard'=>true
     ])
 ]));
}

elseif ($command == "useCode") {
 if (file_exists("admin/code/$text.txt")) {
  $price = file_get_contents("admin/code/$text.txt");
  $coin = file_get_contents('user/'.$from_id."/coin.txt");
  settype($coin,"integer");
  $newcoin = $coin + $price;
  save("user/".$from_id."/coin.txt",$newcoin);
  unlink("admin/code/$text.txt");
  save('user/'.$from_id."/command.txt","none");
  var_dump(bot('sendMessage',[
      'chat_id'=>$update->message->chat->id,
      'text'=>"به تعداد $price سکه به شما اضافه شد.",
      'parse_mode'=>'MarkDown',
      'reply_markup'=>json_encode([
          'keyboard'=>[
              [['text'=>'💰 جمع آوری سکه رایگان 💰']],
              [['text'=>'🔍 پیگیری سفارشات'],['text'=>'🏧 خودپرداز ربات']],
              [['text'=>'👤حساب کاربری شما'],['text'=>'📝 ثبت تبلیغ رایگان']],
              [['text'=>'☎️ پشتیبانی'],['text'=>'📚راهنمای جامع'],['text'=>'⚖️ قوانین و مقررات']]
          ]
      ])
  ]));
  SendMessage("@veiw_white","➖➖➖➖➖➖➖➖➖
کد با موفقیت استفاده شد✅
⏰ ساعت ↙️
⏰$time
📆تاریخ↙️
📆$date
🔶🔷🔶🔷🔶🔷🔶🔷🔶

👤 توسط 
👤Name: 
$name
💠
🆔Username: 
@$username
💠

🌐UserID: 
$from_id
💠
💰سکه های دریافت شده↙️
🔆$price
➖➖➖➖➖➖➖➖➖");
 }
 else {
  SendMessage($chat_id,"این کد استفاده شده و یا حذف شده است و شما نمیتونید مجدد استفاده کنید.");
 }
}
//================
 elseif($text == '🔍 پیگیری سفارشات'){
  if($pay == null){
  SendMessage($chat_id,"📇 شما تا به حال هیچ سفارشی نداشتید","html","true");
  }else{
  file_put_contents('user/'.$from_id."/command.txt","pay");
  $exp = explode("\n",$pay);
  $bttn = [];
  $bttn[] = [['text'=>"↩️منوی اصلی"]];
  foreach($exp as $explode){
  $bttn[] = [['text'=>$explode]];
  }
  SendMessage($chat_id,"📇 یکی از سفارش هاتون رو انتخاب کنید","html","true",json_encode(['keyboard'=>$bttn,'resize_keyboard'=>true]));
  }
  }
  elseif($command == 'pay'){
  $text = str_replace("🔖",'',$text);
  $text = str_replace(" ",'',$text);
  if(file_exists("ads/ads admin/$text.txt")){
  $fl = file_get_contents("ads/ads admin/$text.txt");
  if($from_id == $fl){
  $ed = file_get_contents("ads/ads end/$text.txt");
  $sta = file_get_contents("ads/ads start/$text.txt");
  $tdad = file_get_contents("ads/ads tedad/$text.txt");
  $tlly = file_get_contents("ads/ads tally/$text.txt");
  $msg_id = file_get_contents("ads/ads msg id/$text.txt");
  $msg_user = file_get_contents("ads/ads username/$text.txt");
  ForwardMessage($chat_id,$msg_user,$msg_id);
  $ej = file_get_contents("ads/ads ok/$text.txt");
  if($ej == 'تایید نشده'){
  $ej2 = file_get_contents("ads/ads rad/$text.txt");
  $ej3 = file_get_contents("ads/ads ok/$text.txt");
  $ej = "توسط مدیران تایید نشده\n💢بدلیل: $ej2";
  }
  $member_id = explode("\n",$tlly);
  $mmemcount = count($member_id)-1;
  if($ed == null or $ed == " | "){
  $ed = "---";
  }
  if($sta == null){
  $sta = "---";
  }
  SendMessage($chat_id,"⭕️کد پیگیری:
$text
📈 وضعیت: $ej
📜زمان شروع: $sta
📆زمان اتمام: $ed
🔢 مقدار سفارش: <b>$tdad</b>
⤵️ مقدار دریافتی: <b>$mmemcount</b>","html","true");
  }else{
  SendMessage($chat_id,"📇 شما این پست رو سفارش ندادین","html","true");
  }
  }else{
  SendMessage($chat_id,"📇 کد نا معتبر است","html","true");
  }
  }
  elseif($text == '🤝 کسب سکه با زیرمجموعه گیری'){
  $member_id = explode("\n",$gold);
  $mmemcount = count($member_id) -1;
   SendMessage($chat_id,"👈👁ربات ویوگیر وایت👁👉

✅ به راحتی سین بزنین ،تبلیغ کنین وبرنده چالش ها باشید!!!

‼️با پنل کاربری بسیار پیشرفته!

👈👁ربات ویوگیر وایت👁👉
http://telegram.me/$UserNameBot?start=$from_id","html","true",$button_official);
  SendMessage($chat_id,"✅ با انتشار بنر بالا ، به ازای هر فردی که با لینک شما به ربات دعوت شود، 25 سکه به حساب شما اضافه خواهد شد.💰
  
  🎗 لینک اختصاصی شما:
  🌐 http://telegram.me/$UserNameBot?start=$from_id

  ➖➖➖➖➖➖➖➖

  🔖 تعداد زیرمجموعه های شما: $mmemcount","html","true",$button_official);
  }
  elseif (strpos($block , "$from_id") !== false) {
    return false;
    }
    elseif ($from_id != $chat_id and $chat_id != $feed) {
    LeaveChat($chat_id);
    }
	//-----------------
      if (strpos($data , "sabtbazdid-") !== false) {
    $data = str_replace("sabtbazdid-",'',$data);
    $adn = file_get_contents("ads/ads admin/$data.txt");
    $usr = file_get_contents("ads/ads tally/$data.txt");
    $pmembersid = explode("\n",$usr);
    $member_id = explode("\n",$usr);
    $mmemcount = count($member_id);
    $tdd = file_get_contents("ads/ads tedad/$data.txt");
    if($adn == $frmid){
    AnswerCallbackQuery($data_id,'شما ادمین این پست هستید.');
    }
    elseif(in_array($frmid,$pmembersid)){
    AnswerCallbackQuery($data_id,'شما قبلا از این پست دیدن کرده اید.');
    }
    else{
    if (!in_array($frmid,$pmembersid)){
    $aaddd = file_get_contents("ads/ads tally/$data.txt");
    $aaddd .= $frmid."\n";
    file_put_contents("ads/ads tally/$data.txt",$aaddd);
    }
    $coin=file_get_contents("user/$frmid/coin.txt");
    bot('AnswerCallbackQuery', [
    'callback_query_id' => $update->callback_query->id,
    'text' => "بازدید شما ثبت شد | موجودی جدید :$coin",
    'show_alert' => false
            ]);

file_put_contents('user/'.$frmid."/bazco.txt",($bazco+1));
file_put_contents("user/$frmid/coin.txt",(file_get_contents("user/$frmid/coin.txt") + 1) );
    if($mmemcount >= $tdd){
    bot('deleteMessage',[
'chat_id'=>$Channel,
'message_id'=>$messageid
]);
    bot('deleteMessage',[
'chat_id'=>$Channel,
'message_id'=>$messageid -1
]);
    SendMessage($adn,"☢ سفارش تبلیغ با کد پیگیری $data در $date | $time تموم شد.","html","true");
    file_put_contents("ads/ads ok/$data.txt",'اتمام');
    file_put_contents("ads/Ads End.txt","$ads_end\n$data");
    file_put_contents("ads/ads end/$data.txt","$date | $time");
    file_put_contents("ads/ads etmam/$data.txt","true");
    $str = str_replace("$data\n",'',$ads);
    $str = str_replace("\n\n","\n",$ads);
    $str = str_replace("\n$data",'',$ads);
    $str = str_replace("$data",'',$ads);
    file_put_contents("ads/Ads.txt",$str);
     unlink('data/'.$chat_id."/$msgids.txt");
    }
    }
    }
    elseif($data){
    $ex = explode("|",$data);
    if($ex[0] == 'taiid'){  
    $txxt = file_get_contents('ads/Ads.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($ex[2],$pmembersid)){
      $aaddd = file_get_contents('ads/Ads.txt');
      $aaddd .= $ex[2]."\n";
        file_put_contents('ads/Ads.txt',$aaddd);
    }
      $cd = $code;
     $coco = file_get_contents("ads/ads tedad/$ex[2].txt");
    unlink("ads/ads etmam/$ex[2].txt");
    $msg_id = file_get_contents("ads/ads msg id/$ex[2].txt");
    $msg_user = file_get_contents("ads/ads username/$ex[2].txt");
    $for = bot('ForwardMessage',['chat_id'=>$Channel,'from_chat_id'=>$msg_user,'message_id'=>$msg_id]);
    bot('sendMessage',[
    'chat_id'=>$Channel,
    'text'=>"تبلیغ جدیدی ثبت شد💯  \n 🌐 $coco 🌐 \n آیدی سفارش دهنده👇 \n <code> $ex[1] </code>",
    'parse_mode'=>"html",
    'reply_to_message_id'=>$for->result->message_id,
    'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>'✅ ثبت بازدید','callback_data'=>"sabtbazdid-$ex[2]"],['text'=>'🎗ورود به ربات🎗','url'=>"http://t.me/Veiwgir_white_bot"]] 
    ],'resize_keyboard'=>true])
    ]);
     $ap12=$for->result->message_id;
     @$al = file_get_contents("data/$chat_id/ted.txt");
     file_put_contents("ads/ads MsgId/$ex[2].txt",$for->result->message_id);
                                         
 
    AnswerCallbackQuery($data_id,'✅ پست مورد نظر تایید شد');
    file_put_contents("ads/ads ok/$ex[2].txt",'در حال اجرا...');
    file_put_contents('user/'.$ex[1]."/tabok.txt",(file_get_contents('user/'.$ex[1]."/tabok.txt")+1));
        bot('EditMessageText',[
       'chat_id'=>$chatid,
       'message_id'=>$messageid,
       'text'=>"خوب کاربر گرامی تبلیغ ‌شما با موفقیت در کانال ما ثبت شد😊 
    ✔️مشخصات تبلیغ شما:
    🗓کد پیگیری : $ex[2]
    👁‍🗨تعداد بازدید : $coco
    ساعت درخواست بازدید :$time 
    📅تاریخ  : $date
    ✂️تعداد سکه های کم شده : $coco
    📎پست شما در کانال ما :
    http://telegram.me/veiw_white/$msg_id" ,
    
    'parse_mode'=>"html",
]);
}
}
   //===============
   elseif($text == '@' and $from_id == $admin){
  SendMessage($chat_id,"به پنل مدیریت خوش اومدی:","html","true",$button_manage);
  }
  //===============
  elseif($text == '📊آمار' and $from_id == $admin){  
    $txtt = file_get_contents('admin/Member.txt');
    $member_id = explode("\n",$txtt);
    $mmemcount = count($member_id) -1;

    $bots = file_get_contents("admin/UserName.txt");
    $exbot = explode("@",$bots);
    $c = count($exbot)-2;
    $botsss = '';
    if($exbot[$c-(-1)] != null){
    $botsss = $botsss."@".$exbot[$c-(-1)];
    }if($exbot[$c] != null){
    $botsss = $botsss."@".$exbot[$c];
    }if($exbot[$c-1] != null){
    $botsss = $botsss."@".$exbot[$c-1];
    }if($exbot[$c-2] != null){
    $botsss = $botsss."@".$exbot[$c-2];
    }if($exbot[$c-3] != null){
    $botsss = $botsss."@".$exbot[$c-3];
    }if($exbot[$c-4] != null){
    $botsss = $botsss."@".$exbot[$c-4];
    }if($exbot[$c-5] != null){
    $botsss = $botsss."@".$exbot[$c-5];
    }if($exbot[$c-6] != null){
    $botsss = $botsss."@".$exbot[$c-6];
    }if($exbot[$c-7] != null){
    $botsss = $botsss."@".$exbot[$c-7];
    }if($exbot[$c-8] != null){
    $botsss = $botsss."@".$exbot[$c-8];
    }
    $botsss = str_replace("\n",' | ',$botsss);
  SendMessage($chat_id,"👥 اعضا ربات: $mmemcount
  
  🅾 اعضا جدید:
  $botsss","html","true");
  }
  //===============
  elseif($text == 'تعیین کد رایگان' and $from_id == $admin){
file_put_contents('user/'.$from_id."/command.txt","code free2");
  SendMessage($chat_id,"🆓 کد مورد نظر رو وارد کنید:","html","true",$button_back);
  }
  elseif($command == 'code free2' and $from_id == $admin){
  file_put_contents("user/".$from_id."/wait.txt",$text);
  file_put_contents("user/".$from_id."/command.txt","code free3");
  SendMessage($chat_id,"🆓 مقدار سکه رو وارد کنید:","html","true",$button_manage);
  }
  elseif($command == 'code free3' and $from_id == $admin){
  file_put_contents("user/".$from_id."/command.txt","none");
  file_put_contents("admin/code/$wait.txt",$text);
  SendMessage("@veiw_white","➖➖➖➖➖➖➖➖➖➖➖➖
🔶کد جدید ساخته شد✔️


🏷کد⬅️: 
<code>$wait</code>

🎈تعداد سکه: 
💰 <code>$text</code>
➖➖➖➖➖➖➖➖➖➖➖➖
هرکی زود کد بالا رو داخل  ربات 

 @veiwgir_white_bot
در بخش ▪️کد رایگان بزنه برندست🌀😍

🎈ساعت◀️ $time

🎈تاریخ◀️ $date","html","true");
  }
//===============
elseif($text == '🔖پیگیری سفارش' and $from_id == $admin){
  file_put_contents("user/".$from_id."/command.txt","pay admn");
  SendMessage($chat_id,"🔖 کد سفارش و وارد کنید:","html","true",$button_back);
  }
  elseif($command == 'pay admn' and $from_id == $admin){
  file_put_contents("user/".$from_id."/command.txt","none");
  if(file_exists("ads/ads admin/$text.txt")){
  $ed = file_get_contents("ads/ads end/$text.txt");
  $sta = file_get_contents("ads/ads start/$text.txt");
  $tdad = file_get_contents("ads/ads tedad/$text.txt");
  $tlly = file_get_contents("ads/ads tally/$text.txt");
  $msg_id = file_get_contents("ads/ads msg id/$text.txt");
  $msg_user = file_get_contents("ads/ads username/$text.txt");
  ForwardMessage($chat_id,$msg_user,$msg_id);
  $ej = file_get_contents("ads/ads ok/$text.txt");
  if($ej == 'تایید نشده'){
  $ej2 = file_get_contents("ads/ads rad/$text.txt");
  $ej3 = file_get_contents("ads/ads ok/$text.txt");
  $ej = "توسط مدیران تایید نشده\n💢بدلیل: $ej2";
  }
  $member_id = explode("\n",$tlly);
  $mmemcount = count($member_id)-1;
 if($ed == null or $ed == " | "){
  $ed = "---";
  }
  if($sta == null){
  $sta = "---";
  }
  SendMessage($chat_id,"⭕️کد پیگیری:
$text

📈 وضعیت: $ej
📜زمان شروع: $sta
📆زمان اتمام: $ed
🔢 مقدار سفارش: <b>$tdad</b>
⤵️ مقدار دریافتی: <b>$mmemcount</b>","html","true");
  }else{
  SendMessage($chat_id,"🔖 کد نا معتبر است.","html","true");
  }
  }
  //===============
    elseif($text == '💰سکه همگانی' and $from_id == $admin){
    file_put_contents("user/".$from_id."/command.txt","s2a seke");
    SendMessage($chat_id,"💰 مقدار سکه مورد نظر رو وارد کنید:","html","true",$button_back);
    }
    elseif($command == 's2a seke' and $from_id == $admin){
    if(preg_match('/^([0-9])/',$text)){
    file_put_contents("user/".$from_id."/command.txt","none");
    SendMessage($chat_id,"💰 مقدار سکه به زودی به همه اضافه میشود.","html","true",$button_manage);
    $all_member = fopen( "admin/Member.txt", 'r');
        while( !feof( $all_member)) {
             $user = fgets( $all_member);
            $user = str_replace(" ",'',$user);
            $user = str_replace("\n",'',$user);
            
            $cn = file_get_contents('user/'.$user."/coin.txt");
            file_put_contents('user/'.$user."/coin.txt",($cn+$text) );
            
        }
        SendMessage($chat_id,"💰 تعداد $text سکه به همه اعضا اضافه شد.","html","true");
    }else{
    SendMessage($chat_id,"💰 لطفا به عدد وارد کنید در غیر اینصورت مشکل بزرگی پیش خواهد آمد.","html","true",$button_back);
    }
    }
    //===============
  elseif($text == '📮فوروارد همگانی' and $from_id == $admin){
    file_put_contents("user/".$from_id."/command.txt","s2a fwd");
    SendMessage($chat_id,"📮 پیام مورد نظر را فوروارد کنید:","html","true",$button_back);
    }
    elseif($command == 's2a fwd' and $from_id == $admin){
    file_put_contents("user/".$from_id."/command.txt","none");
    SendMessage($chat_id,"📮 پیام شما در صف ارسال قرار گرفت.","html","true",$button_manage);
    $all_member = fopen( "admin/Member.txt", 'r');
        while( !feof( $all_member)) {
             $user = fgets( $all_member);
            ForwardMessage($user,$admin,$message_id);
        }
    }
//===============
elseif($text == "☣️تنظیم متن قوانین" && $from_id == $admin){
 save("user/$from_id/command.txt","sethelptxt");
 sendMessage($chat_id,"لطفا متن قوانین رو ارسال کنید","html","true",$button_back);
}elseif($command == "sethelptxt"){
 save("user/$from_id/command.txt","none");
 save("admin/help.txt",$text);
 sendmessage($chat_id,"قوانین ثبت شد.","html","true",$button_manage);
}
//===============
elseif($text == "تنظیم متن پشتیبانی" && $from_id == $admin){
 save("user/$from_id/command.txt","setsuptxt");
 sendMessage($chat_id,"لطفا متن راهنما را بفرست","html","true",$button_back);
}elseif($command == "setsuptxt"){
 save("user/$from_id/command.txt","none");
 save("admin/support.txt",$text);
 sendmessage($chat_id,"تنظیم شد","html","true",$button_manage);
}
//===============
elseif($text == "تنظیم متن راهنما" && $from_id == $admin){
 save("user/$from_id/command.txt","sethelptxt");
 sendMessage($chat_id,"لطفا متن راهنما را ارسال کنيد","html","true",$button_back);
}elseif($command == "sethelptxt"){
 save("user/$from_id/command.txt","none");
 save("admin/ghan.txt",$text);
 sendmessage($chat_id,"تنظیم شد","html","true",$button_manage);
}
 //===============
 elseif($text == "تنظیم کانال تبلیغات" && $from_id == $admin){
 save("user/$from_id/command.txt","setch");
 sendMessage($chat_id,"لطفا ایدی کانال خورا بدون @ وارد کنید","html","true",$button_back);
}elseif($command == "setch"){
 save("user/$from_id/command.txt","none");
 save("admin/channel.txt",$text);
 sendmessage($chat_id,"تنظیم شد","html","true",$button_manage);
}
 //===============
 elseif($text == "تنطیم کانال کد" && $from_id == $admin){
 save("user/$from_id/command.txt","setc2");
 sendMessage($chat_id,"لطفا ایدی کانال خورا بدون @ وارد کنید","html","true",$button_back);
}elseif($command == "setc2"){
 save("user/$from_id/command.txt","none");
 save("admin/channel2.txt",$text);
 sendmessage($chat_id,"تنظیم شد","html","true",$button_manage);
}
  //===============
  elseif ($text == '🆚سکه به کاربر' and $from_id == $admin){
        file_put_contents('user/'.$from_id."/command.txt","sendcoin");  
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "خوب ایدی عددی کاربر را بفرست️",
        ]);
    } elseif ($command == 'sendcoin') {
        file_put_contents("admin/idsendcoin.txt", $text);
        file_put_contents('user/'.$from_id."/command.txt","sendcoin2"); 
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "ادمین گرامی لطفا تعداد سکه ها را مشخص کنید",
            'parse_mode' => "html"
        ]);
    } elseif ($command == 'sendcoin2') {
    $idsendcoin = file_get_contents("admin/idsendcoin.txt");
          $fle = file_get_contents("user/$idsendcoin/coin.txt");
               $getshe = $fle + $text;
                file_put_contents("user/$idsendcoin/coin.txt", $getshe);
         file_put_contents('user/'.$from_id."/command.txt",""); 
        bot('sendMessage', [
            'chat_id' => $idsendcoin,
            'text' => "دوست گرامی
از طرف مدیریت ربات  تعداد $text سکه به حساب شما واریز شد😊",
        ]);
        bot('sendMessage', [
                    'chat_id' => $chat_id,
            'text' => "با موفقیت فرستاده شد",
        ]);
    }
	//===============
	elseif ($text == '📛کسر سکه📛' and $from_id == $admin){
		file_put_contents('user/'.$from_id."/command.txt","getcoin");  
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "خوب ایدی عددی کاربر را بفرست️",
        ]);
    } elseif ($command == 'getcoin') {
        file_put_contents("admin/idsendcoin.txt", $text);
        file_put_contents('user/'.$from_id."/command.txt","getcoin2"); 
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "خوب  چه تعداد بازدید👁‍🗨 کسر بشه",
            'parse_mode' => "html"
        ]);
    } elseif ($command == 'getcoin2') {
     $idsendcoin = file_get_contents("admin/idsendcoin.txt");
          $fle = file_get_contents("user/$idsendcoin/coin.txt");
               $getshe = $fle - $text;
                file_put_contents("user/$idsendcoin/coin.txt", $getshe);
         file_put_contents('user/'.$from_id."/command.txt",""); 
        bot('sendMessage', [
            'chat_id' => $idsendcoin,
            'text' => "گرامی
از طرف مدیریت ربات  تعداد $text بازدید از حساب شما کسر شد",
        ]);
        bot('sendMessage', [
                    'chat_id' => $chat_id,
            'text' => "با موفقیت فرستاده شد",
        ]);
    }
	//===============
     elseif ($text == '❌بلاک کردن کاربر' and $from_id == $admin){
                 file_put_contents('user/'.$from_id."/command.txt","idblock");
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "خب ایدی عددیشو بفرست تا از ربات بلاک شه",
        ]);
    } elseif ($command == 'idblock') {
        $myfile2 = fopen("admin/blacklist.txt", 'a') or die("Unable to open file!");
        fwrite($myfile2, "$text\n");
        fclose($myfile2);
        file_put_contents('user/'.$from_id."/command.txt","");
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => " با موفقیت بلاکش کردم😤
 ایدیش هم 
 $text ",
            'parse_mode' => "html",
        ]);
    }
	//===============
     elseif ($text == '✅آنبلاک کردن کاربر' and $from_id == $admin){
        file_put_contents('user/'.$from_id."/command.txt","idunblock");
        bot('sendMessage', [
            'chat_id' => $chat_id,

            'text' => "خوب  بخشیدی حالا . ایدی عددیشو بده تا انبلاکش کنم😕",
        ]);
    } elseif ($command == 'idunblock') {
        $newlist = str_replace($text, "", $blacklist);
        file_put_contents("admin/blacklist.txt", $newlist);
        file_put_contents('user/'.$from_id."/command.txt","");
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "حله انبلاک کردمش
 ایدیش هم 
 $text ",
        ]);
    } 
	//===============
    elseif($text == '📪پیام همگانی' and $from_id == $admin){
    file_put_contents("user/".$from_id."/command.txt","s2a");
    SendMessage($chat_id,"📪 پیامتون رو وارد کنید:","html","true",$button_back);
    }
    elseif($command == 's2a' and $from_id == $admin){
    file_put_contents("user/".$from_id."/command.txt","none");
    SendMessage($chat_id,"📪 پیام شما در صف ارسال قرار گرفت.","html","true",$button_manage);
    $all_member = fopen( "admin/Member.txt", 'r');
        while( !feof( $all_member)) {
             $user = fgets( $all_member);
            if($sticker_id != null){
            SendSticker($user,$stickerid);
            }
            elseif($videoid != null){
            SendVideo($user,$videoid,$caption);
            }
            elseif($voiceid != null){
            SendVoice($user,$voiceid,'',$caption);
            }
            elseif($fileid != null){
            SendDocument($user,$fileid,'',$caption);
            }
            elseif($musicid != null){
            SendAudio($user,$musicid,'',$caption);
            }
            elseif($photoid != null){
            SendPhoto($user,$photoid,'',$caption);
            }
            elseif($text != null){
            SendMessage($user,$text,"html","true",$button_official);
            }
        }
    }
  // End Source

  if(!file_exists('user/'.$from_id)){
  mkdir('user/'.$from_id);
  }
  if(!file_exists('user/'.$from_id."/coin.txt")){
  file_put_contents('user/'.$from_id."/coin.txt","20");
  }
  if(!file_exists('user/'.$from_id."/nmber.txt")){
  file_put_contents('user/'.$from_id."/nmber.txt","0");
  }
  $txxt = file_get_contents('admin/Member.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($chat_id,$pmembersid)){
      $aaddd = file_get_contents('admin/Member.txt');
      $aaddd .= $chat_id."\n";
        file_put_contents('admin/Member.txt',$aaddd);
    }
    $txxt = file_get_contents('admin/UserName.txt');
    $txxt = file_get_contents('admin/UserName.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array("@$from_username",$pmembersid)){
      $aaddd = file_get_contents('admin/UserName.txt');
      $aaddd .= "@$from_username"."\n";
      if($from_username != null){
        file_put_contents('admin/UserName.txt',$aaddd);
    }
    }
       unlink("error_log");
    ?>