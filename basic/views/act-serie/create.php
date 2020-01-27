<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ActSerie */

$this->title = 'Crear nueva actividad de serie';
$this->params['breadcrumbs'][] = ['label' => 'Act Series', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="act-serie-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
