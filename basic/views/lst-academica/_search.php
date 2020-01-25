<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LstAcademicaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lst-academica-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ACD_ID') ?>

    <?= $form->field($model, 'ACD_TITULO') ?>

    <?= $form->field($model, 'ACD_MATERIA') ?>

    <?= $form->field($model, 'ACD_FECHAINICIO') ?>

    <?= $form->field($model, 'ACD_FECHAFIN') ?>

    <?php // echo $form->field($model, 'ACD_MATERIALES') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
