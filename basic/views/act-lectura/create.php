<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ActLectura */

$this->title = 'Crear actividad de lectura';
$this->params['breadcrumbs'][] = ['label' => 'Actividad de Lectura', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="act-lectura-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
