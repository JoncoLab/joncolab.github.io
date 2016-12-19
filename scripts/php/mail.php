<?php
$to  = 'team@joncolab.pro';

$subject = 'Пользователь с JoncoLab';

$message = 'Пользователь: ' . $_POST['name'] . ';<br>' .
    '"' . $_POST['message'] . '"<br>' .
    'Связяться с ним можно по email: <a href="mailto:' . $_POST['email'] . '">' . $_POST['email'] . '</a>'
;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 


$headers .= 'To: joncolab@gmail.com' . "\r\n";
$headers .= 'From: '  . $_POST['name'] . '<' . $_POST['email'] . '>' . "\r\n";

$ukMsg = '
<!doctype html>
<html>
<head>
    <title>Дякуємо!</title>
    <meta charset="utf-8">
</head>
<body style="background-color: #cccccc; text-align: center; vertical-align: middle">
    <h1 style="color: #343434;">Ваш лист надіслано</h1>
    <p style="color: #343434; border: 8px outset #00afe1; font-size: 25px; width: 40%; margin: 0 auto; border-radius: 10px; background-color: #f7f7f7"><strong>Дякуємо за відгук!</strong></p>
</body>
</html>';

$enMsg = '
<!doctype html>
<html>
<head>
    <title>Thank you!</title>
    <meta charset="utf-8">
</head>
<body style="background-color: #cccccc; text-align: center; vertical-align: middle">
    <h1 style="color: #343434;">Your mail has been succesfully sent</h1>
    <p style="color: #343434; border: 8px outset #00afe1; font-size: 25px; width: 40%; margin: 0 auto; border-radius: 10px; background-color: #f7f7f7"><strong>Thanks for your feedback!</strong></p>
</body>
</html>';

mail($to, $subject, $message, $headers);
header('refresh: 5; url="../../!' . $_COOKIE['lang'] . '/feedback.html');

switch ($_COOKIE['lang']) {
    case 'en':
        echo $enMsg;
        break;
    case 'uk':
        echo $ukMsg;
        break;
    default:
        echo "Something went wrong :(";
}