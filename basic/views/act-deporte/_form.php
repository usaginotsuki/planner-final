<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Usuario; 
use app\models\LstDeporte; 
use yii\helpers\ArrayHelper; 

/* @var $this yii\web\View */
/* @var $model app\models\ActDeporte */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="act-deporte-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'USR_ID')->dropDownList(
        ArrayHelper::map(Usuario::find()->all(),'USR_ID','USR_NOMBRE'),['prompt'=>'Seleccione..']) ?>

    <?= $form->field($model, 'DPR_ID')->dropDownList(
        ArrayHelper::map(LstDeporte::find()->all(),'DPR_ID','DPR_TITULO'),['prompt'=>'Seleccione..'])  ?>

    <?= $form->field($model, 'ACT_DPR_NOMBRE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ACT_DPR_FECHAINICIO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
