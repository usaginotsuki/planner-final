<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LstDeporte */

$this->title = 'Create Lst Deporte';
$this->params['breadcrumbs'][] = ['label' => 'Lst Deportes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lst-deporte-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
