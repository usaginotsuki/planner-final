<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ActLecturaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="act-lectura-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ACT_LECT_ID') ?>

    <?= $form->field($model, 'USR_ID') ?>

    <?= $form->field($model, 'LCT_ID') ?>

    <?= $form->field($model, 'ACT_LECT_NOMBRE') ?>

    <?= $form->field($model, 'ACT_LECT_FECHAINICIO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
