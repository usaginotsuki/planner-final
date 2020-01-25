<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LstAcademica */

$this->title = 'Update Lst Academica: ' . $model->ACD_ID;
$this->params['breadcrumbs'][] = ['label' => 'Lst Academicas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ACD_ID, 'url' => ['view', 'id' => $model->ACD_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lst-academica-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
