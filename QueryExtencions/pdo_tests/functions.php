<?php
function getHtmlentities($data){
    return htmlentities($data,
        ENT_QUOTES | ENT_HTML5, ini_get("UTF-8"));
}