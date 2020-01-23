<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ActSerie */

$this->title = 'Update Act Serie: ' . $model->ACT_SER_ID;
$this->params['breadcrumbs'][] = ['label' => 'Act Series', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ACT_SER_ID, 'url' => ['view', 'id' => $model->ACT_SER_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="act-serie-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
