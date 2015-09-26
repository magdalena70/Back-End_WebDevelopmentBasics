<?php
function read_File_FirstWay($fileName){
    $lines = file($fileName);
    foreach ($lines as $lineNum => $lineContent) {
        $lineNumView = $lineNum + 1;
        echo "<li>Line #<b>{$lineNumView}</b>: $lineContent.</li>";
    }
}

function read_File_SecondWay($fileName){
    $file = file_get_contents($fileName);
    $lines = explode("\n", $file);
    foreach ($lines as $lineNum => $lineContent) {
        $lineNumView = $lineNum + 1;
        echo "<li>Line #<b>{$lineNumView}</b>: $lineContent.";
        echo "<ul>Words:";
        $words = explode(" ", $lineContent);
        foreach ($words as $wordNum => $wordContent) {
            $wordNumView = $wordNum + 1;
            echo "<li>Word #<b>{$wordNumView}</b>: $wordContent.</li>";
        }
        echo "</ul></li>";
    }
}