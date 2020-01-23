<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ActAcademicaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="act-academica-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ACT_ACD_ID') ?>

    <?= $form->field($model, 'USR_ID') ?>

    <?= $form->field($model, 'ACD_ID') ?>

    <?= $form->field($model, 'ACT_ACD_NOMBRE') ?>

    <?= $form->field($model, 'ACT_ACD_FECHAINICIO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
