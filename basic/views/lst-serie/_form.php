<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LstSerie */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lst-serie-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'SRS_TITULO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SRS_ESTADO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SRS_DURACIONxCAP')->textInput() ?>

    <?= $form->field($model, 'SRS_ENLACE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SRS_FECHAINICIO')->textInput() ?>

    <?= $form->field($model, 'SRS_FECHAFIN')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
