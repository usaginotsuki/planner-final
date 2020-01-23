<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Usuario; 
use app\models\LstSerie; 
use yii\helpers\ArrayHelper; 

/* @var $this yii\web\View */
/* @var $model app\models\ActSerie */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="act-serie-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'USR_ID')->dropDownList(
        ArrayHelper::map(Usuario::find()->all(),'USR_ID','USR_NOMBRE'),['prompt'=>'Seleccione..']) ?>

    <?= $form->field($model, 'SRS_ID')->dropDownList(
        ArrayHelper::map(LstSerie::find()->all(),'SRS_ID','SRS_TITULO'),['prompt'=>'Seleccione..'])  ?>

    <?= $form->field($model, 'ACT_SER_NOMBRE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ACT_SER_FECHAINICIO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
