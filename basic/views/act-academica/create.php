<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ActAcademica */

$this->title = 'Create Act Academica';
$this->params['breadcrumbs'][] = ['label' => 'Act Academicas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="act-academica-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
