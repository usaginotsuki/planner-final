<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LstAcademica */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lst-academica-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ACD_TITULO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ACD_MATERIA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ACD_FECHAINICIO')->textInput() ?>

    <?= $form->field($model, 'ACD_FECHAFIN')->textInput() ?>

    <?= $form->field($model, 'ACD_MATERIALES')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
