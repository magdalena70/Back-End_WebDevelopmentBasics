<?php /** @var \Pesho\ViewModels\UserEditViewModel[] $model */ ?>

<h2>all users</h2>
<?php foreach($model as $user): ?>
<h1>
   name: <?= $user->getName(); ?>, email: <?= $user->getEmail(); ?>, id: <?= $user->getId(); ?>
</h1>
<?php endforeach; ?>

