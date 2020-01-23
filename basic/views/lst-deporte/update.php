<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LstDeporte */

$this->title = 'Update Lst Deporte: ' . $model->DPR_ID;
$this->params['breadcrumbs'][] = ['label' => 'Lst Deportes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DPR_ID, 'url' => ['view', 'id' => $model->DPR_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lst-deporte-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
