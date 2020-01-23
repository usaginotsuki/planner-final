<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LstSerie */

$this->title = 'Update Lst Serie: ' . $model->SRS_ID;
$this->params['breadcrumbs'][] = ['label' => 'Lst Series', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SRS_ID, 'url' => ['view', 'id' => $model->SRS_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lst-serie-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
