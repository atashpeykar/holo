﻿<?php
define('API_KEY','242989559:AAG4TGtlj16J5HDf7Bg3bNsPsTZLpuD2fEc');
//----######------
function makereq($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($datas));
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$result=json_decode($message,true);
//##############=--API_REQ
function apiRequest($method, $parameters) {
  if (!is_string($method)) {
    error_log("Method name must be a string\n");
    return false;
  }
  if (!$parameters) {
    $parameters = array();
  } else if (!is_array($parameters)) {
    error_log("Parameters must be an array\n");
    return false;
  }
  foreach ($parameters as $key => &$val) {
    // encoding to JSON array parameters, for example reply_markup
    if (!is_numeric($val) && !is_string($val)) {
      $val = json_encode($val);
    }
  }
  $url = "https://api.telegram.org/bot".API_KEY."/".$method.'?'.http_build_query($parameters);
  $handle = curl_init($url);
  curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
  curl_setopt($handle, CURLOPT_TIMEOUT, 60);
  return exec_curl_request($handle);
}
//----######------
//---------
$update = json_decode(file_get_contents('php://input'));
var_dump($update);
//=========
$chat_id = $update->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$from_id = $update->message->from->id;
$name = $update->message->from->first_name;
$username = $update->message->from->username;
$t = isset($update->message->text)?$update->message->text:'';
$reply = $update->message->reply_to_message->forward_from->id;
$sticker = $update->message->sticker;
$text = $update->message->text;
$result = json_decode($message,true);
$data = $update->callback_query->data;
$forward = $update->message->forward_from;
$reply = $update->message->reply_to_message->forward_from->id;
$jock = file_get_contents("http://api.roonx.com/jock");
$time = file_get_contents("http://api.monsterbot.ir/time.php");
$date = file_get_contents("http://api.provps.ir/td/?td=date");
$fal = file_get_contents("http://api.provps.ir/fal.php");
$pass = file_get_contents("http://api.provps.ir/rpass.php?num=12");
$mob = file_get_contents("http://down-roid.ir/vip4.php");
$love = file_get_contents("http://api.roonx.com/textlove/");
$dastan = file_get_contents("http://api.roonx.com/dastankotah/");
$danestani = file_get_contents("http://api.roonx.com/danstaniha/");
$zekr = file_get_contents("http://api.hektor-tm.teleagent.ir/zekr2/");
$admin = 140313934;
$friend = 193930120;
//-------
function SendMessage($ChatId, $TextMsg)
{
 makereq('sendMessage',[
'chat_id'=>$ChatId,
'text'=>$TextMsg,
'parse_mode'=>"MarkDown"
]);
}
function SendM($ChatId, $TextMsg)
{
 makereq('sendMessage',[
'chat_id'=>$ChatId,
'text'=>$TextMsg,
'parse_mode'=>"html"
]);
}
function SendSticker($ChatId, $sticker_ID)
{
 makereq('sendSticker',[
'chat_id'=>$ChatId,
'sticker'=>$sticker_ID
]);
}
function bots($method,$datas=[]){
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
function typing($chat_id)
{
file_get_contents(API_TELEGRAM.'sendChatAction?chat_id='.$chat_id.'&action=typing');
}
function Forward($KojaShe,$AzKoja,$KodomMSG)
{
makereq('ForwardMessage',[
'chat_id'=>$KojaShe,
'from_chat_id'=>$AzKoja,
'message_id'=>$KodomMSG
]);
}
function save($filename,$TXTdata)
  {
  $myfile = fopen($filename, "w") or die("Unable to open file!");
  fwrite($myfile, "$TXTdata");
  fclose($myfile);
  }
//==========
if($t == "/start"){
var_dump(makereq('sendMessage',[
        'chat_id'=>$update->message->chat->id,
        'text'=>"سلام داداج\nبه هلووو بات خوش اومدی💦😂",
        'parse_mode'=>'MarkDown',
        'reply_markup'=>json_encode([
            'keyboard'=>[
              [
                ['text'=>"سایت رسمی🔁"],['text'=>"خدمات⚙"]
              ],
			  [
			  
			  ],
              [
                ['text'=>"پروژه های ما↪️"],['text'=>"لینک شما📌"]
              ],
			  [
			  
			  ],
              [
                ['text'=>"ایدی شما😎"],['text'=>"اطلاعات شما☺"]
              ],
			  [
			  
			  ],
              [
                ['text'=>"وضعیت شما📬"],['text'=>"🔥شماره من💥"]
              ],
			  [
			  
			  ],
              [
                ['text'=>"💢تماس با ما💢"],['text'=>"اعضا تیم♐"]
              ]
            ],
'resize_keyboard'=>true
        ])
    ]));  
}
elseif ($t == '💢تماس با ما💢')
{
var_dump(makereq('sendMessage',[
        'chat_id'=>$update->message->chat->id,
        'text'=>"برای تماس با ما به ربات پشتیبانی پیغام دهید.
ربات پشتیبانی👇
--------------
*By : PHP*",
  'parse_mode'=>'MarkDown',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [
                    ['text'=>"♎️پیام رسان♎️ ",'url'=>"https://telegram.me/amirpayambot"]
          ],
        [
          ['text'=>"🔘کانال ما🔘 ",'url'=>"https://telegram.me/hektor_tm"]
        ]
            
            ]
        ])
    ]));
}
elseif ($t == 'اعضا تیم♐')
{
var_dump(makereq('sendMessage',[
        'chat_id'=>$update->message->chat->id,
        'text'=>"برای دیدن اعضای هکتور تیم روی دکمه زیر کلیک کنید.",
  'parse_mode'=>'MarkDown',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [
                    ['text'=>"♎️اعضا تیم♎️ ",'url'=>"https://telegram.me/hektor_tm/164"]
          ],

            ]
        ])
    ]));
}
elseif ($t == 'سایت رسمی🔁')
{
var_dump(makereq('sendMessage',[
        'chat_id'=>$update->message->chat->id,
        'text'=>"برای بازدید از سایت رسمی هکتور تیم روی گزینه زیر کلیک کنید.",
  'parse_mode'=>'MarkDown',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [
                    ['text'=>"♎️ سایت رسمی ♎️ ",'url'=>"https://hektor-tm.teleagent.ir"]
          ],

            ]
        ])
    ]));
}
elseif ($t == 'پروژه های ما↪️')
{

  SendMessage($chat_id,"بزودی...");
}
if($t == "خدمات⚙"){
var_dump(makereq('sendMessage',[
        'chat_id'=>$update->message->chat->id,
        'text'=>"دوست عزیز به بخش خدمات ربات خوش اومدید.",
        'parse_mode'=>'MarkDown',
        'reply_markup'=>json_encode([
            'keyboard'=>[
              [
                ['text'=>"💊تاریخ و ساعت"],['text'=>"جک بگوو😂😂"]
              ],
			  [
			  
			  ],
              [
                ['text'=>"متن عاشقانه🎉"],['text'=>"نرخ موبایل📲"]
              ],
			  [
			  
			  ],
              [
                ['text'=>"داستان📒"],['text'=>"دانستنی📚"]
              ],
			  [
			  
			  ],
              [
                ['text'=>"ساخت لوگو اسمی💥"],['text'=>"ذکر امروز📿 " ]
              ],
			  [
			  
			  ],
              [
                ['text'=>"فال حافظ 🔍"],['text'=>"پسورد رندوم 🔩"]
              ],
			  [
			  
			  ],
              [
                ['text'=>"🏠Back to home🏠"]
              ]
            ],
'resize_keyboard'=>true
        ])
    ]));  
}
if($t == "🏠Back to home🏠"){
var_dump(makereq('sendMessage',[
        'chat_id'=>$update->message->chat->id,
        'text'=>"به منوی اصلی برگشتیم...",
        'parse_mode'=>'MarkDown',
        'reply_markup'=>json_encode([
            'keyboard'=>[
              [
                ['text'=>"سایت رسمی🔁"],['text'=>"خدمات⚙"]
              ],
			  [
			  
			  ],
              [
                ['text'=>"پروژه های ما↪️"],['text'=>"لینک شما📌"]
              ],
			  [
			  
			  ],
              [
                ['text'=>"ایدی شما😎"],['text'=>"اطلاعات شما☺"]
              ],
			  [
			  
			  ],
              [
                ['text'=>"وضعیت شما📬"],['text'=>"🔥شماره من💥"]
              ],
			  [
			  
			  ],
              [
                ['text'=>"💢تماس با ما💢"],['text'=>"اعضا تیم♐"]
              ]
            ],
'resize_keyboard'=>true
        ])
    ]));  
}
elseif ($t == 'ایدی شما😎')
{
if ($chat_id == $from_id)
{
SendMessage($chat_id,"ایدی عددی شما : `$from_id`");
}
else
{
SendMessage($chat_id,"*😐Your Id😐:* `$from_id` \n*🎯Group Id🎯* : `$chat_id`");
}
}
elseif ($t == "اطلاعات شما☺")
{
$rank == "";
if ($from_id == $admin)
{
$rank = "`مدیر کل ربات`";
}
else
{ $rank = "`کاربر`"; }
if ($from_id == $friend)
{
$rank = "` عشق مدیر😍`";
}
SendMessage($chat_id,"*😐NAME😐* : `$name`\n*😎UserName😎* : `@$username`\n*📊Rank📊* : $rank\n ");
}
elseif ($t == 'جک بگوو😂😂')
{

  SendMessage($chat_id,"$jock");
}
elseif ($t == '💊تاریخ و ساعت')
{
  SendMessage($chat_id,"$time\nتاریخ: $date");
}
elseif ($t == 'فال حافظ 🔍')
{

  SendMessage($chat_id,"$fal");
}
elseif ($t == 'پسورد رندوم 🔩')
{

  SendMessage($chat_id,"پسورد رندوم شما:\n$pass");
}
elseif ($t == 'نرخ موبایل📲')
{

  SendMessage($chat_id,"$mob");
}
elseif ($t == 'ساخت لوگو اسمی💥')
{

  SendMessage($chat_id,"برای ساخت لوگو میتونید به صورت های زیر عمل کنید:\n/logo text\nساخت لوگو اسمی معمولی👆\n/logo2 text\nساخت لوگو اسمی شاخ دخترانه👆\n/logo3 text\nساخت لوگو اسمی معمولی👆\n/logo4 text\nساخت لوگو اسمی معمولی👆\n/logo5 text\nساخت لوگو اسم هکری👆\n\n*بجای فاصله از + استفاده کنید.*\n*hektor tm*");
}
elseif ($t == 'متن عاشقانه🎉')
{

  SendMessage($chat_id,"$love");
}
elseif ($t == 'ذکر امروز📿')
{

  SendMessage($chat_id,"ذکر امروز:\n$zekr");
}
elseif ($t == 'داستان📒')
{

  SendMessage($chat_id,"$dastan");
}
elseif ($t == 'دانستنی📚')
{

SendMessage($chat_id,"$danestani");
}
elseif ($t == "لینک شما📌")
{

SendMessage($chat_id,"لینک اختصاصی شما:\nhttps://telegram.me/Sjsjdjdbot?start=usf$from_id ");
}
elseif ($t == "وضعیت شما📬")
{
$friend == "";
if ($from_id == $friend)
{
$friend = "تبریک شما از دوستان هستید😍";
}
else
{ $friend = "شما در لیست دوستان نیستید"; }
if ($from_id == $admin)
{
$friend = "شما ادمین کل هسستید😍";
}
SendMessage($chat_id,"`وضعیت شما:`$friend");
}

	elseif($t == '🔥شماره من💥')
{
	$phone = '+989330114298';
	$namea = 'DR.AMIR';
makereq('sendContact',[
	'chat_id'=>$chat_id,
	'phone_number'=>$phone,
	'first_name'=>$namea
	]);
}

if(preg_match("/^\/(logo) (.*)/",$t,$match))
$api="http://api.roonx.com/shahin/logosh15/?text=$match[2]&color=red&size=105";
bots('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$api,
]);

if(preg_match("/^\/(logo2) (.*)/",$t,$match))
$api2="http://api.roonx.com/shahin/gril7/?text=$match[2]&color=white&size=75";
bots('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$api2,
]);

if(preg_match("/^\/(logo3) (.*)/",$t,$match))
$api3="http://api.roonx.com/logo6/?text=$match[2]&color=red&size=90&font=8&RL=0&UD=30&RO=0";
bots('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$api3,
]);

if(preg_match("/^\/(logo5) (.*)/",$t,$match))
$api5="http://www.iloveheartstudio.com/-/p.php?t=%EE%BB%B0%0D%0A$match[2]&f=t&uc=1&ts=1&bc=BFBFBF&tc=F7FFFF&hc=444444ps=sq&w=500=c&uc=true&ts=true&ff=PNG&w=500&ps=sqps=sq";
bots('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$api5,
]);

if(preg_match("/^\/(logo4) (.*)/",$t,$match))
$api4="http://api.monsterbot.ir/pic?text=$match[2]&color=gray&font=1";
bots('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$api4,
]);
?>