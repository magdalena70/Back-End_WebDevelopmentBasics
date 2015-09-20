<?php require_once 'topics.php'; ?>

<?php
if(!isset($_GET['id'])){
    header("Location: forum.php");
    exit;
}

$id = (int)$_GET['id'];
if(!isset($topics[$id]) || $topics[$id]['isDeleted']){
    header("Location: forum.php");
    exit;
}
?>

Body:
<p>
    <b>
        <?= $topics[$id]['body']; ?>
    </b>
</p>