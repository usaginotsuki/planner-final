<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LstLectura */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lst-lectura-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'LCT_TITULO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LCT_NOMBRE_LIBRO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LCT_AUTOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LCT_ENLACE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LCT_ESTADO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LCT_FECHAINICIO')->textInput() ?>

    <?= $form->field($model, 'LCT_PAGINAxDIA')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
