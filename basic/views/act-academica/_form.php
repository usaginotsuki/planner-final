<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ActAcademica */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="act-academica-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'USR_ID')->textInput() ?>

    <?= $form->field($model, 'ACD_ID')->textInput() ?>

    <?= $form->field($model, 'ACT_ACD_NOMBRE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ACT_ACD_FECHAINICIO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
