<?php ini_set('display_errors', 1) ?>

<?php
if(isset($_POST['address'])) {
    $trimmedName = trim($_POST['name']);
    $trimmedAddress = trim($_POST['address']);
    if(empty($trimmedName)) {
    header("Location: name.php");
    exit;
}else if(empty($trimmedAddress)){
        header("Location: address.php");
        exit;
    }
}else{
    header("Location: address.php");
    exit;
}
?>
<?= htmlentities($_POST['name']); ?>
<br/>
<?= htmlentities($_POST['address']); ?>
