<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LstSerie */

$this->title = 'Create Lst Serie';
$this->params['breadcrumbs'][] = ['label' => 'Lst Series', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lst-serie-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
