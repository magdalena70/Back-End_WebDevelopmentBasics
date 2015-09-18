<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<p>application/x-www-form-urlencoded</p>
<form method="POST" action="Enc-type.php" enctype="application/x-www-form-urlencoded">
    <input type="text" name="text"/>
    <input type="file" name="file"/>
    <input type="submit" name="submit"/>
</form>

<p>multipart/form-data</p>
<form method="POST" action="Enc-type.php" enctype="multipart/form-data">
    <input type="text" name="text"/>
    <input type="file" name="file"/>
    <input type="submit" name="submit"/>
</form>

<p>text/plain</p>
<form method="POST" action="Enc-type.php" enctype="text/plain">
    <input type="text" name="text"/>
    <input type="file" name="file"/>
    <input type="submit" name="submit"/>
</form>
<?php
echo "POST:";
var_dump($_POST);
echo "REQUEST:";
var_dump($_REQUEST);
echo "FILES:";
var_dump($_FILES);
?>

</body>
</html>