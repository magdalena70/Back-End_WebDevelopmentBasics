<?php
//include in windows -> "folder" . DIRECTORY_SEPARATOR . "file.PHP"
//include in linux -> "folder/file.php"
require_once("includeHeader.php");
require_once("functions" . DIRECTORY_SEPARATOR . "fibonachi.php");
require_once("functions" . DIRECTORY_SEPARATOR . "readFile.php");
?>
<div>
    <p>Print Fibonachi: <?= print_Fibonachi();?>...</p>
    <p>Read File - first way:</p>
    <ul>
        <?= read_File_FirstWay("files" . DIRECTORY_SEPARATOR . "text.txt"); ?>
    </ul>
    <p>Read File - second way:</p>
    <ul>
        <?= read_File_SecondWay("files" . DIRECTORY_SEPARATOR . "text.txt"); ?>
    </ul>
</div>
<?php
include_once("includeFooter.php");
?>