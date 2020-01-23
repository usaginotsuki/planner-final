<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ActSerie */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="act-serie-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'USR_ID')->textInput() ?>

    <?= $form->field($model, 'SRS_ID')->textInput() ?>

    <?= $form->field($model, 'ACT_SER_NOMBRE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ACT_SER_FECHAINICIO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
