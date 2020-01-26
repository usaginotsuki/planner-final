<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ActDeporte */

$this->title = 'Create actividad deportiva';
$this->params['breadcrumbs'][] = ['label' => 'Actividad deportiva', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="act-deporte-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
