<?php /** @var \Pesho\ViewModels\UserEditViewModel $model */ ?>

<h2>edit</h2>
<h1>
    <?= $model->getName(); ?>, email: <?= $model->getEmail(); ?>, id: <?= $model->getId(); ?>
</h1>

<?php
foreach($model->getArrayInfo() as $arrayInfo){
    if(is_array($arrayInfo)){
        foreach($arrayInfo as $infoValue){
            echo "<p>$infoValue</p>";
        }
    }else{
        echo "<p>$arrayInfo</p>";
    }
}
?>