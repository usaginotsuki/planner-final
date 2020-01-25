<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LstDeporte */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lst-deporte-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DPR_TITULO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DPR_DEPORTE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DPR_DIASxSEM')->textInput() ?>

    <?= $form->field($model, 'DPR_HORASxDIA')->textInput() ?>

    <?= $form->field($model, 'DPR_FECHAINICIO')->textInput() ?>

    <?= $form->field($model, 'DPR_FECHAFIN')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
