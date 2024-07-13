
}<?php 
ob_start();

$API_KEY = '1914355467:AAGlpoePACOzhqsiZRrh4QuyURD1fHBXaWE';#توكن بوتك
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
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


$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$message_id = $message->message->message_id; 

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$u = explode("\n",file_get_contents("memb.txt"));
$c = count($u)-1;
$modxe = file_get_contents("usr.txt");
$admin =" 610659517";
$sudo =" 610659517";
$name = $update->message->from->first_name;
$username = $update->message->from->username;
$date = "https://api.rangatiratan.ga/tiq.php";
$g = file_get_contents($date);
$js = json_decode($g);
$da = $js->Date;
$bot = bot('getme',['bot'])->result->username;
echo "<br><a  href='https://t.me/$bot'>@$bot</a>";





if($text == "هلا" or $text == "هاي"){
bot( sendMessage ,[
 chat_id =>$chat_id, 
 text =>"هلا بالغلا  ❤️",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سلام" or $text == "السلام"){
bot( sendMessage ,[
 chat_id =>$chat_id, 
 text =>"وعليكم السلام ..مرحب بيك",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "عيانه" or $text == "عيانة"){
bot( sendMessage ,[
 chat_id =>$chat_id, 
 text =>"سلامتك مالك ياحب .. سحروك",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "شنو" or $text== "ف شنو"){
bot( sendMessage ,[
 chat_id =>$chat_id, 
 text =>"اسالتك كتيرة خلاص",
 reply_to_message_id =>$message->message_id, 
]);
}


if($text == "كيفك" or $text== "كيفو"){
bot( sendMessage ,[
 chat_id =>$chat_id, 
 text =>"تماااام بسط والله",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "نتعرف" or $text== "عرفونا" or $text== "نتعرف بيك"){
bot( sendMessage ,[
 chat_id =>$chat_id, 
 text =>"انا سروو 🙃🙃",
 reply_to_message_id =>$message->message_id, 
]);
}




if(preg_match('/^(.*)(سرو)/',$text) ){
$dev_i = array( 

"[ ‏سروو سروو ..ماف غيري هنا ]($a)",
"[ ‏ياعيون سرو 🙃🙃 ]($a)",
"[ ‏انتو اسمي ده معلقين فيو 🤣]($a)",
"[ ‏سروو جمبك احكي بس]($a)",);
$dev_a = array_rand($dev_i, 1); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'parse_mode'=>'MarkDown', 
'disable_web_page_preview'=>true, 
"text"=>$dev_i[$dev_a], 
'reply_to_message_id'=>$message->message_id 
]); 
}



if($text == "😂😂" or $text== "😂😂😂"){
$dev_i = array( 

"[ ‏ضحكة تفتح النفس يايمه 😍 ]($a)",
"[ ‏الضحك بلا سبب قلة ادب😑 ]($a)",
"[ ‏الله يديم الضحكة دي 🤩]($a)",
"[ ‏ضحكونا معاكم طيب 😏]($a)",);
$dev_a = array_rand($dev_i, 1); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'parse_mode'=>'MarkDown', 
'disable_web_page_preview'=>true, 
"text"=>$dev_i[$dev_a], 
'reply_to_message_id'=>$message->message_id 
]); 
}

if($text == "😘😘" or $text== "😘😘😘"){
$dev_i = array( 

"[ ‏ضحكة تفتح النفس يايمه 😍 ]($a)",
"[ ‏الضحك بلا سبب قلة ادب😑 ]($a)",
"[ ‏الله يديم الضحكة دي 🤩]($a)",
"[ ‏ضحكونا معاكم طيب 😏]($a)",);
$dev_a = array_rand($dev_i, 1); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'parse_mode'=>'MarkDown', 
'disable_web_page_preview'=>true, 
"text"=>$dev_i[$dev_a], 
'reply_to_message_id'=>$message->message_id 
]); 
}

if($text == "الحمدلله" or $text== "الحمد لله" or $text=="نحمدالله"){
$dev_i = array( 

"[ ‏يدوم ليك الخير ]($a)",
"[ ‏هنيئا لمن حمدالله ]($a)",
"[ ‏اللهم الخير لمن حمدك 🤲]($a)",
"[ ‏اللهم لك الحمد]($a)",);
$dev_a = array_rand($dev_i, 1); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'parse_mode'=>'MarkDown', 
'disable_web_page_preview'=>true, 
"text"=>$dev_i[$dev_a], 
'reply_to_message_id'=>$message->message_id 
]); 
}


if(preg_match('/^(.*)(خاص)/',$text) ){
$dev_i = array( 

"[ ‏ونسة الخاص عايزة اخلاص 😆 ]($a)",
"[ ‏النصيييحة...الخاص ده ماحقنا ]($a)",
"[ ‏اوعكم من الخاص 🙊]($a)",);
$dev_a = array_rand($dev_i, 1); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'parse_mode'=>'MarkDown', 
'disable_web_page_preview'=>true, 
"text"=>$dev_i[$dev_a], 
'reply_to_message_id'=>$message->message_id 
]); 
}

if(preg_match('/^(.*)(قالو)/',$text) ){
$dev_i = array( 

"[ ‏ده منو القال 😑 ]($a)",
"[ ‏جنك قالو وقلنا 😌 ]($a)",
"[ ‏وقالو شنو تاني 🙃]($a)",);
$dev_a = array_rand($dev_i, 1); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'parse_mode'=>'MarkDown', 
'disable_web_page_preview'=>true, 
"text"=>$dev_i[$dev_a], 
'reply_to_message_id'=>$message->message_id 
]); 
}


if(preg_match('/^(.*)(😡)/',$text) ){
$dev_i = array( 

"[ ‏لشنو الزعل ياجميل ]($a)",
"[ ‏اهدي الزعل بعمل هارت😒 ]($a)",
"[ ‏الزعل ف شنو هسي 🙊]($a)",);
$dev_a = array_rand($dev_i, 1); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'parse_mode'=>'MarkDown', 
'disable_web_page_preview'=>true, 
"text"=>$dev_i[$dev_a], 
'reply_to_message_id'=>$message->message_id 
]); 
}

if(preg_match('/^(.*)(ماف موضوع)/',$text) ){
$dev_i = array( 

"[ ‏اعملو لينا موضوع طيب😑 ]($a)",
"[ ‏الناس تفتش ونسة طيب😐 ]($a)",
"[ ‏والحل شنو ف عدم الموضوع ده 😶]($a)",);
$dev_a = array_rand($dev_i, 1); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'parse_mode'=>'MarkDown', 
'disable_web_page_preview'=>true, 
"text"=>$dev_i[$dev_a], 
'reply_to_message_id'=>$message->message_id 
]); 
}

if(preg_match('/^(.*)(عدم موضوع)/',$text) ){
$dev_i = array( 

"[ ‏اعملو لينا موضوع طيب😑 ]($a)",
"[ ‏الناس تفتش ونسة طيب😐 ]($a)",
"[ ‏والحل شنو ف عدم الموضوع ده 😶]($a)",);
$dev_a = array_rand($dev_i, 1); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'parse_mode'=>'MarkDown', 
'disable_web_page_preview'=>true, 
"text"=>$dev_i[$dev_a], 
'reply_to_message_id'=>$message->message_id 
]); 
}


if(preg_match('/^(.*)(عدم الموضوع)/',$text) ){
$dev_i = array( 

"[ ‏اعملو لينا موضوع طيب😑 ]($a)",
"[ ‏الناس تفتش ونسة طيب😐 ]($a)",
"[ ‏والحل شنو ف عدم الموضوع ده 😶]($a)",);
$dev_a = array_rand($dev_i, 1); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'parse_mode'=>'MarkDown', 
'disable_web_page_preview'=>true, 
"text"=>$dev_i[$dev_a], 
'reply_to_message_id'=>$message->message_id 
]); 
}

if(preg_match('/^(.*)(زهج)/',$text) ){
$dev_i = array( 

"[ ‏اعملو لينا موضوع طيب😑 ]($a)",
"[ ‏الناس تفتش ونسة طيب😐 ]($a)",
"[ ‏والحل شنو ف عدم الموضوع ده 😶]($a)",);
$dev_a = array_rand($dev_i, 1); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'parse_mode'=>'MarkDown', 
'disable_web_page_preview'=>true, 
"text"=>$dev_i[$dev_a], 
'reply_to_message_id'=>$message->message_id 
]); 
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text; 
$chat_id = $message->chat->id;
$new = $message->new_chat_member;
$rrand = array('منور القروب 🙃','هلا بالجديد 🙃');
$rrnew = array_rand($rrand, 1);
$left = $message->left_chat_member;
$rrrand = array('لي غادر 😔');
$rrleft = array_rand($rrrand);


if($new){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rrand[$rrnew],
'reply_to_message_id'=>$message->message_id, 
]);
}

if($left){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rrrand[$rrleft],
'reply_to_message_id'=>$message->message_id, 
]);
} 

$omarreal = array(
  'السلام عليكم'  =>  'وعليكم السلام',
  'ازيكم'  =>  'ماف زينا نحنا 😇😇',
  'مساء الخير'  =>  'مساء النور',
  'مساء النور'  =>  'مساؤ سكر 😊',
  'مسا مسا'  =>  'مساك عسل 😉',
  'صباح الخير'  =>  'صباح النور',
  'صباح النور'  =>  'صباح الخير😴',
  'الاخبار'  =>  'ماف اي اخبار اهو قاعدين 😑',
  'من وين'  =>  'من بلد الامان السودان',
  'كيفكم'  =>  'تماميييين 🙃🙃',
  'جديدكم'  =>  'جديدنا طلتك علينا 🙃',
  'الجديد'  =>  'وحاتك ماف جديد 😔',
  'شباب'  =>  'هلا بيك 😇',
  'وينكم'  =>  'جمبك ياحب احكي 😊',
  'ياناس'  =>  'الناس جمبك ..قول بس 🤗',
  'مرحبا'  =>  'مرررحبتين🤭🤭',
  'مشتاقين'  =>  'كتيييييير😁😁',
  'انتي من وين'  =>  'انا بت امدر 🙃',
 'وين ياناس'  =>  'طفشو كلهم😒',
 'صبح صبح'  =>  'صباحك قشطه 😊',
 'عيان'  =>  'الف سلامة عليك ياغالي',
 'نهاركم سعيد'  =>  'نهارك اسعد😉',

);

// DEV_the_stun // 

foreach ( $omarreal as $real => $words ) {
if($text == $real){
bot('sendMEssage',[
'chat_id'=>$chat_id,
'text'=>$words,
'reply_to_message_id'=>$message->message_id
]);
}
}

if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}


$u = explode("\n",file_get_contents("memb.txt"));
$m = count($u)-1;
$modxe = file_get_contents("usr.txt");
if ($update && !in_array($chat_id, $u)) {
file_put_contents("memb.txt", $chat_id."\n",FILE_APPEND);
}
if ($text == 'المشتركين') {
$m = count($u)-1;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "👥¦ عدد مشتركين البوت :- { $m }" ,
'reply_to_message_id'=>$message->message_id,
]);
}
if (preg_match("/\/bc .*/", $text) and $chat_id == 610659517) {
$f = explode("\n", file_get_contents("memb.txt"));
$text = str_replace("/bc ", "", $text);
for ($i=0; $i < count($f); $i++) { 
bot("sendMessage",[
"chat_id"=>$f[$i],
"text"=>$text
]);
}
}


 
if($text == "/start"){
bot('sendMessage',[
        'chat_id'=>$chat_id,
      'text'=>" • اهلا بك ؛ @$username ،
📛¦ انا بوت اسمي ◗سروو◖
🚸¦ اختصاصي التفاعل في المجموعات باللهجة السودانية

ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
📬¦ مطور البوت ◗@Safa7gzz◖
 ————————————",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
      [['text'=>"- انضم للمجموعة الخاصة بنا🫂؛", 'url'=>"https://t.me/sdgroub"]],
      ]
      ])
    ]);
}



$u = explode("\n",file_get_contents("memb.txt"));
$c = count($u)-1;
$modxe = file_get_contents("usr.txt");
$admin = "610659517"; 
#                بداية الاوامر                 #
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("memb.txt", $chat_id."\n",FILE_APPEND);
  }
#﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎#
if ($text == "/admin" and $chat_id == $admin ) {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
      'text'=>"
☑️￤اهلا عزيزي :- المطور .
▫️￤اليك الاوامر الان حدد ماتريده 📩
-
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'رسالة للكل ','callback_data'=>'ce']],
[['text'=>'عدد الاعضاء ','callback_data'=>'co']],
            ]
            ])
        ]);
}
if($data == 'off'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
      'text'=>"
☑️￤اهلا عزيزي :- المطور .
▫️￤اليك الاوامر الان حدد ماتريده 📩
-
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'رسالة للكل ','callback_data'=>'ce']],
[['text'=>'عدد الاعضاء ','callback_data'=>'co']],
            ]
            ])
]);
file_put_contents('usr.txt', '');
}
#                   المشتركين                   #
if($data == "co" and $update->callback_query->message->chat->id == $admin ){ 
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"
        عدد مشتركين البوت📢 :- [ $c ] .
        ",
        'show_alert'=>true,
]);
}
#                   رسالة للكل                   #
if($data == "ce" and $update->callback_query->message->chat->id == $admin){ 
    file_put_contents("usr.txt","yas");
    bot('EditMessageText',[
    'chat_id'=>$update->callback_query->message->chat->id,
    'message_id'=>$update->callback_query->message->message_id,
    'text'=>"▪️ ارسل رسالتك الان 📩 وسيتم نشرها لـ [ $c ] مشترك . 
   ",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>' الغاء 🚫 •','callback_data'=>'off']]    
        ]
    ])
    ]);
}
if($text and $modxe == "yas" and $chat_id == $admin ){
    for ($i=0; $i < count($u); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$u[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

]);
    file_put_contents("usr.txt","no");

} 
}
