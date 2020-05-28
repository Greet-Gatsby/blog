<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'View';
$this->params['breadcrumbs'][] = $this->title;
?>

<div>
    <div class="">
        <h3 class="mb-0"><?= $article->name ?></h3>
        <div class="mb-1 text-muted"><?= $article->category ?></div>
        <p class="card-text mb-auto"><?= $article->text ?></p>
    </div>
</div>
