<?php require_once 'topics.php'; ?>

<?php foreach($topics as $topicId => $topicData): ?>
    <?php if($topicData['isDeleted']) continue; ?>
    <p>
        <a href="topic.php?id=<?= $topicId; ?>">
            Title: <?= $topicData['title']; ?>
        </a>
    </p>
<?php endforeach; ?>
