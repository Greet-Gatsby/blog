<?php

/* @var $this yii\web\View */
$this->title = 'Blog';
?>
<?php foreach ($articles as $article): ?>
<div class="well">
    <h3 class="mb-0"><?= $article->name ?></h3>
    <div class="mb-1 text-muted"><?= $article->category ?></div>
    <p class="card-text mb-auto"><?= $article->description ?></p>
    <a href="<?= \yii\helpers\Url::to(['site/view', 'id'=> $article->id]) ?>" class="stretched-link ">Continue reading</a>
</div>
<?php endforeach; ?>
<?php echo \yii\widgets\LinkPager::widget([
        'pagination' => $pages,
]);
