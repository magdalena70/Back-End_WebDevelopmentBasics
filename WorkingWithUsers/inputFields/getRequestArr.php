<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<ul>
    <li>
        <a href="?test[]=1&test[]=abv&test[]=true">Try to send array parameters over get request.</a>
    </li>
    <li>
        <a href="?test[]=">Try to write and send array parameters over get request.</a>
    </li>
</ul>
<br />

<?php
if(isset($_GET['test']) && is_array($_GET['test'])){
    echo "Received array over get:<br />";
    print_r($_GET['test']);
    echo "<br />";
}
?>

</body>
</html>