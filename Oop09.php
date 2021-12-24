<?php 
ob_start();
$API_KEY = '5070225608:AAFCE-QPEvBghLsN4zGg-K2fbaugG5Np27U';

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
 function sendmessage($chat_id, $text, $model){
	bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$text,
	'parse_mode'=>$mode
	]);
	}
	function sendaction($chat_id, $action){
	bot('sendchataction',[
	'chat_id'=>$chat_id,
	'action'=>$action
	]);
	}
	function Forward($KojaShe,$AzKoja,$KodomMSG)
{
    bot('ForwardMessage',[
        'chat_id'=>$KojaShe,
        'from_chat_id'=>$AzKoja,
        'message_id'=>$KodomMSG
    ]);
}
function sendphoto($chat_id, $photo, $action){
	bot('sendphoto',[
	'chat_id'=>$chat_id,
	'photo'=>$photo,
	'action'=>$action
	]);
	}
	function objectToArrays($object)
    {
        if (!is_object($object) && !is_array($object)) {
            return $object;
        }
        if (is_object($object)) {
            $object = get_object_vars($object);
        }
        return array_map("objectToArrays", $object);
    }
	
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
mkdir("data/$from_id");
$message_id = $message->message_id;
$from_id = $message->from->id;
$text = $message->text;
$name = $message->from->first_name;
$ali = file_get_contents("data/$from_id/ali.txt");
$ADMIN = 1354777997;
$to =  file_get_contents("data/$from_id/token.txt");
$url =  file_get_contents("data/$from_id/url.txt");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@c3d3d&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
 'text'=>"أشترك  بقنوات البوت 🚸 

لتتمكن من استخدام البوت ♻️..

⚠️ ، معرف القناة :-  @C3D3D 💯

⚠️ ، معرف القناة :-  @BBBB_5 💯

من ثم أرسل ;- /start √
",
]);return false;}

if($text == "🔘¦ قسم الويب هوك"){

if (!file_exists("data/$from_id/ali.txt")) {
        mkdir("data/$from_id");
        file_put_contents("data/$from_id/ali.txt","none");
        $myfile2 = fopen("Member.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "$from_id\n");
        fclose($myfile2);
    }
    
        sendAction($chat_id, 'typing');
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔂¦ ﺂنت الأن في قسم :- 
🔘¦ عمل ويب هوك √
🚫¦ حذف ويب هوك ✘
🔍¦ ﺂستخراج معلومات التوكن √
﹎﹎﹎﹎﹎﹎﹎﹎ ﹎
تابعونا على قناة لمسات برمجيه @C3D3D",
        'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"🔘¦ عمل ويب هوك √"],['text'=>"🔍¦ ﺂستخراج معلومات التوكن √"]],
	[['text'=>"🚫¦ حذف ويب هوك ✘"]],
 [['text'=>"↩️¦ العودة"]]
	]
	])
	]);
	}
elseif($text == "↩️¦ العودة √"){
file_put_contents("data/$from_id/ali.txt","no");
file_put_contents("data/$from_id/token.txt","no");
file_put_contents("data/$from_id/url.txt","no");
        sendAction($chat_id, 'typing');
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"↩️¦ تم الرجوع الى قسم الويب هوك √",
        'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"🔘¦ عمل ويب هوك √"],['text'=>"🔍¦ ﺂستخراج معلومات التوكن √"]],
	[['text'=>"🚫¦ حذف ويب هوك ✘"]],
 [['text'=>"↩️¦ العودة"]]
	]
	])
	]);
	}

elseif($text == "🔘¦ عمل ويب هوك √"){
     sendAction($chat_id, 'typing');
			file_put_contents("data/$from_id/ali.txt","to");
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"💯¦ ﺂرسل الأن توكن البوت √",
                 'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"↩️¦ العودة √"]
	],
	]
	])
	]);
	}
elseif($ali == "to"){
$token = $text;

    $ali1 = json_decode(file_get_contents("https://api.telegram.org/bot" . $token . "/getwebhookinfo"));
    $ali2 = json_decode(file_get_contents("https://api.telegram.org/bot" . $token . "/getme"));
        
    $tik2 = objectToArrays($ali1);
    $ur = $tik2["result"]["url"];
    $ok2 = $tik2["ok"];
    $tik1 = objectToArrays($ali2);
    $un = $tik1["result"]["username"];
    $fr = $tik1["result"]["first_name"];
    $id = $tik1["result"]["id"];
    $ok = $tik1["ok"];
    if ($ok != 1) {
        //Token Not True
        SendMessage($chat_id, "");
    } else{
    file_put_contents("data/$from_id/ali.txt","url");
    file_put_contents("data/$from_id/token.txt",$text);
	SendAction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" 🔍¦ الإن ارسل رابط الملف √ ",
  ]);
}
}
elseif($ali == "url"){
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$text))
  {
  SendAction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"🚫¦ خطأ قمت بتكرار الرسائل ✘",
  ]);
 }
 else {
 file_put_contents("data/$from_id/ali.txt","no");
 file_put_contents("data/$from_id/url.txt",$text);
 	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"💯¦ انتظر قليلا ...",
  ]);
  sleep(1);
   	bot('editmessagetext',[
    'chat_id'=>$chat_id,
        'message_id'=>$message_id + 1,
    'text'=>"💯¦ جار العمل،  ♻️...",
  ]);
	bot('editmessagetext',[
    'chat_id'=>$chat_id,
     'message_id'=>$message_id + 1,
    'text'=>"🔘¦ انت متأكد من عمل ويب هوك للمعلومات التاليه :- 

💳¦ توكن البوت ↙️;
$to
💯¦ رابط الملف ↙️;

 $text

📡¦ للتأكيد ارسل الامر   ↙️; 
/Webhook12",
  ]);
 }
}
elseif($text == "/Webhook12" ){
if($to != "no"){
 	 	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"💯¦ انتظر قليلا ...",
  ]);
  sleep(1);
	bot('editmessagetext',[
    'chat_id'=>$chat_id,
     'message_id'=>$message_id + 1,
      'text'=>"💯¦ انتظر قليلا ...",
  ]);
  file_get_contents("https://api.telegram.org/bot$to/setwebhook?url=$url");
    sleep(1);
	bot('editmessagetext',[
    'chat_id'=>$chat_id,
     'message_id'=>$message_id + 1,
      'text'=>"💯¦ جار العمل،  ♻️...",
  ]);
  sleep(1);
  file_put_contents("data/$from_id/ali.txt","no");
	bot('sendmessage',[
	'chat_id'=>$chat_id,
		    'message_id'=>$message_id + 1,
	'text'=>"☑️¦ تم عمل ويب هوك بنجاح √",
        'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"🔘¦ عمل ويب هوك √"],['text'=>"🔍¦ ﺂستخراج معلومات التوكن √"]],
	[['text'=>"🚫¦ حذف ويب هوك ✘"]],
 [['text'=>"↩️¦ العودة"]]
	]
	])
	]);
}

}

elseif($text == "🔍¦ ﺂستخراج معلومات التوكن √" ){
    file_put_contents("data/$from_id/ali.txt","token");
	sendaction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"💯¦ ﺂرسل الأن توكن البوت √",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'↩️¦ العودة √']],
      ],'resize_keyboard'=>true])
  ]);
}
elseif($ali == "token"){
$token = $text;

    $ali1 = json_decode(file_get_contents("https://api.telegram.org/bot" . $token . "/getwebhookinfo"));
    $ali2 = json_decode(file_get_contents("https://api.telegram.org/bot" . $token . "/getme"));
      
    $tik2 = objectToArrays($ali1);
    $ur = $tik2["result"]["url"];
    $ok2 = $tik2["ok"];
    $tik1 = objectToArrays($ali2);
    $un = $tik1["result"]["username"];
    $fr = $tik1["result"]["first_name"];
    $id = $tik1["result"]["id"];
    $ok = $tik1["ok"];
    if ($ok != 1) {
        //Token Not True
        SendMessage($chat_id, "📛¦ عذرا التوكن الذي قمت بارساله غير صحيح ✘");
    } else{
    file_put_contents("data/$from_id/ali.txt","no");
    
	SendAction($chat_id,'typing');
 	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"💯¦ انتظر قليلا ...",
  ]);
  sleep(1);
	bot('editmessagetext',[
    'chat_id'=>$chat_id,
     'message_id'=>$message_id + 1,
    'text'=>"☑️¦ معلومات التوكن هي ⏬;

Ⓜ️¦ معرف البوت ~» @$un
💳¦ ايدي البوت ~» $id
🏷¦ اسم البوت ~» $fr
🔗¦ رابط الملف ↙️;
$ur
",
  ]);
}
}
elseif($text == "🚫¦ حذف ويب هوك ✘" ){
    file_put_contents("data/$from_id/ali.txt","del");
	sendaction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"💯¦ ﺂرسل الأن توكن البوت √",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'↩️¦ العودة √']],
      ],'resize_keyboard'=>true])
  ]);
}
elseif($ali == "del"){
$token = $text;

    $ali1 = json_decode(file_get_contents("https://api.telegram.org/bot" . $token . "/getwebhookinfo"));
    $ali2 = json_decode(file_get_contents("https://api.telegram.org/bot" . $token . "/getme"));
       
    $tik2 = objectToArrays($ali1);
    $ur = $tik2["result"]["url"];
    $ok2 = $tik2["ok"];
    $tik1 = objectToArrays($ali2);
    $un = $tik1["result"]["username"];
    $fr = $tik1["result"]["first_name"];
    $id = $tik1["result"]["id"];
    $ok = $tik1["ok"];
    if ($ok != 1) {
        //Token Not True
        SendMessage($chat_id, "📛¦ عذرا التوكن الذي قمت بارساله غير صحيح ✘");
    } else{
    file_put_contents("data/$from_id/ali.txt","no");
    
	SendAction($chat_id,'typing');
 	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"💯¦ انتظر قليلا ...",
  ]);
  sleep(1);
	bot('editmessagetext',[
    'chat_id'=>$chat_id,
     'message_id'=>$message_id + 1,
    'text'=>"🚫¦ انتظر قليلا جار الحذف ...",
  ]);
}
file_get_contents("https://api.telegram.org/bot$text/deletewebhook");
sleep(1);
	bot('editmessagetext',[
    'chat_id'=>$chat_id,
     'message_id'=>$message_id + 1,
    'text'=>"☑️¦ تم حذف الويب هوك بنجاح √",
  ]);
  sleep(1);
  file_put_contents("data/$from_id/ali.txt","no");
	bot('sendmessage',[
	'chat_id'=>$chat_id,
		    'message_id'=>$message_id + 1,
	'text'=>"↩️¦ تم الرجوع الى قسم الويب هوك √",
        'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"🔘¦ عمل ويب هوك √"],['text'=>"🔍¦ ﺂستخراج معلومات التوكن √"]],
	[['text'=>"🚫¦ حذف ويب هوك ✘"]],
 [['text'=>"↩️¦ العودة"]]
	]
	])
	]);
}

elseif($text == "/admin" && $chat_id == $ADMIN){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"اعزيزي المشرف، مرحبا بك في لوحة مشرف الروبوت 🌿",
                'parse_mode'=>'html',
      'reply_markup'=>json_encode([
            'keyboard'=>[
              [
              ['text'=>"عدد الاعظاء"],['text'=>"رسالة للمشتركين 📄"],['text'=>"توجيه للمشتركين 💎"]
              ]
              ],'resize_keyboard'=>true
        ])
            ]);
        }
elseif($text == "عدد الاعظاء" && $chat_id == $ADMIN){
	sendaction($chat_id,'typing');
    $user = file_get_contents("Member.txt");
    $member_id = explode("\n",$user);
    $member_count = count($member_id) -1;
	sendmessage($chat_id , " عدد الاعضاء البوت : $member_count" , "html");
}
elseif($text == "رسالة للمشتركين 📄" && $chat_id == $ADMIN){
    file_put_contents("data/$from_id/ali.txt","send");
	sendaction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"ارسل الرسالة التي تريد ارسالها بتنسيق نصي 📝",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'/admin']],
      ],'resize_keyboard'=>true])
  ]);
}
elseif($ali == "send" && $chat_id == $ADMIN){
    file_put_contents("data/$from_id/ali.txt","no");
	SendAction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"تم إرسال رسالة عامة 🎉",
  ]);
	$all_member = fopen( "Member.txt", "r");
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
			SendMessage($user,$text,"html");
		}
}
elseif($text == "توجيه للمشتركين 💎" && $chat_id == $ADMIN){
    file_put_contents("data/$from_id/ali.txt","fwd");
	sendaction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"نشر توجيهك 👣",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'/admin']],
      ],'resize_keyboard'=>true])
  ]);
}
elseif($ali == "fwd" && $chat_id == $ADMIN){
    file_put_contents("data/$from_id/ali.txt","no");
	SendAction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"استمرار 🍁",
  ]);
$forp = fopen( "Member.txt", 'r'); 
while( !feof( $forp)) { 
$fakar = fgets( $forp); 
Forward($fakar, $chat_id,$message_id); 
  } 
   bot('sendMessage',[ 
   'chat_id'=>$chat_id, 
   'text'=>"تم نشر توجيهك بنجاح 🌟", 
   ]);
}

?>
