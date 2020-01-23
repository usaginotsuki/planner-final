<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LstSerieSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lst-serie-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'SRS_ID') ?>

    <?= $form->field($model, 'SRS_TITULO') ?>

    <?= $form->field($model, 'SRS_ESTADO') ?>

    <?= $form->field($model, 'SRS_DURACIONxCAP') ?>

    <?= $form->field($model, 'SRS_ENLACE') ?>

    <?php // echo $form->field($model, 'SRS_FECHAINICIO') ?>

    <?php // echo $form->field($model, 'SRS_FECHAFIN') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
