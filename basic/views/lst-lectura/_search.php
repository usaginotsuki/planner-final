<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LstLecturaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lst-lectura-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'LCT_ID') ?>

    <?= $form->field($model, 'LCT_TITULO') ?>

    <?= $form->field($model, 'LCT_NOMBRE_LIBRO') ?>

    <?= $form->field($model, 'LCT_AUTOR') ?>

    <?= $form->field($model, 'LCT_ENLACE') ?>

    <?php // echo $form->field($model, 'LCT_ESTADO') ?>

    <?php // echo $form->field($model, 'LCT_FECHAINICIO') ?>

    <?php // echo $form->field($model, 'LCT_PAGINAxDIA') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
