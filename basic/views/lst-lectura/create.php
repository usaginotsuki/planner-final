<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LstLectura */

$this->title = 'Create Lst Lectura';
$this->params['breadcrumbs'][] = ['label' => 'Lst Lecturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lst-lectura-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
