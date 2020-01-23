<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Usuario; 
use app\models\LstLectura; 
use yii\helpers\ArrayHelper; 

/* @var $this yii\web\View */
/* @var $model app\models\ActLectura */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="act-lectura-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'USR_ID')->dropDownList(
        ArrayHelper::map(Usuario::find()->all(),'USR_ID','USR_NOMBRE'),['prompt'=>'Seleccione..']) ?>

    <?= $form->field($model, 'LCT_ID')->dropDownList(
        ArrayHelper::map(LstLectura::find()->all(),'LCT_ID','LCT_TITULO'),['prompt'=>'Seleccione..'])  ?>

    <?= $form->field($model, 'ACT_LECT_NOMBRE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ACT_LECT_FECHAINICIO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
