<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LstLectura */

$this->title = 'Update Lst Lectura: ' . $model->LCT_ID;
$this->params['breadcrumbs'][] = ['label' => 'Lst Lecturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->LCT_ID, 'url' => ['view', 'id' => $model->LCT_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lst-lectura-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
