<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
<?php
$text = 'Some text - Мечо Пух';
$encodedText = urlencode($text);
echo 'Text: '.$text.'<br/>';
echo 'Encoded text: '.$encodedText.'<br/>';
$decodedText = urldecode($encodedText);
echo 'Decoded text: '.$decodedText;
?>
        <br/>
        <a href="?info=<?=urlencode("МечоПух");?>">Hi, Мечо Пух!</a>
    </body>
<html/>
