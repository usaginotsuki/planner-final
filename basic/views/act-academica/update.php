<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ActAcademica */

$this->title = 'Update Act Academica: ' . $model->ACT_ACD_ID;
$this->params['breadcrumbs'][] = ['label' => 'Act Academicas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ACT_ACD_ID, 'url' => ['view', 'id' => $model->ACT_ACD_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="act-academica-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
