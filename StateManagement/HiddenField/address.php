<?php ini_set('display_errors', 1) ?>

<?php
if(isset($_POST['name'])){
    $trimmedName = trim($_POST['name']);
    if(empty($trimmedName)) {
        header("Location: name.php");
        exit;
    }
}else{
    header("Location: name.php");
    exit;
}
?>

<form method="post" action="confirm.php">
    <input type="text" name="address"/>
    <input type="hidden" name="name" value="<?= htmlentities($_POST['name']) ?>">
    <input type="submit" value="Next"/>
</form>