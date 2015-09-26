<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<form method="post" action="inputArr.php">

<?php
$inputs = 5;
for($i = 0;$i < $inputs;$i++){
    ?>

    <input type="text" name="names[]" placeholder="name<?= $i+1 ?>"/>
    <br />

<?php
}
?>

    <input type="submit" value="Print names" name="submit"/>
</form>

<?php
if(isset($_POST['submit'])){
    //var_dump($_POST);
    $namesArr = $_POST['names'];
    foreach ($namesArr as $name) {
        if(empty($name)){
            echo "Empty input field";
        }
        echo htmlentities($name) . "<br />";
    }
}
?>

</body>
</html>
