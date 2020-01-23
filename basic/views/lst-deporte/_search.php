<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LstDeporteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lst-deporte-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'DPR_ID') ?>

    <?= $form->field($model, 'DPR_TITULO') ?>

    <?= $form->field($model, 'DPR_DEPORTE') ?>

    <?= $form->field($model, 'DPR_DIASxSEM') ?>

    <?= $form->field($model, 'DPR_HORASxDIA') ?>

    <?php // echo $form->field($model, 'DPR_FECHAINICIO') ?>

    <?php // echo $form->field($model, 'DPR_FECHAFIN') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
