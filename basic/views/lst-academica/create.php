<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LstAcademica */

$this->title = 'Create Lst Academica';
$this->params['breadcrumbs'][] = ['label' => 'Lst Academicas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lst-academica-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
