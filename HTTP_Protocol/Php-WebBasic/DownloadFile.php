<?php
$file = './Files/tazzz.jpg';

if(file_exists($file)){
    header('Content-type: image/jpeg');
    //header('Content-Disposition: attachment; filename='.basename($file));//download
    header('Content-Disposition: inline; filename='.basename($file));//view in browser
    header('Content-Length: '.filesize($file));
    readfile($file);
}