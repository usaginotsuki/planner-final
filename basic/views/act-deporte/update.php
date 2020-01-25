<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ActDeporte */

$this->title = 'Update Act Deporte: ' . $model->ACT_DPR_ID;
$this->params['breadcrumbs'][] = ['label' => 'Act Deportes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ACT_DPR_ID, 'url' => ['view', 'id' => $model->ACT_DPR_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="act-deporte-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
