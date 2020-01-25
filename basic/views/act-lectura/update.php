<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ActLectura */

$this->title = 'Update Act Lectura: ' . $model->ACT_LECT_ID;
$this->params['breadcrumbs'][] = ['label' => 'Act Lecturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ACT_LECT_ID, 'url' => ['view', 'id' => $model->ACT_LECT_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="act-lectura-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
