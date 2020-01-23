<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Usuario; 
use app\models\LstAcademica; 
use yii\helpers\ArrayHelper; 

/* @var $this yii\web\View */
/* @var $model app\models\ActAcademica */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="act-academica-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'USR_ID')->dropDownList(
        ArrayHelper::map(Usuario::find()->all(),'USR_ID','USR_NOMBRE'),['prompt'=>'Seleccione..']) ?>

<?= $form->field($model, 'ACD_ID')->dropDownList(
        ArrayHelper::map(LstAcademica::find()->all(),'ACD_ID','ACD_TITULO'),['prompt'=>'Seleccione..']) ?>

    <?= $form->field($model, 'ACT_ACD_NOMBRE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ACT_ACD_FECHAINICIO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
