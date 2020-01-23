<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LstLectura */

$this->title = $model->LCT_ID;
$this->params['breadcrumbs'][] = ['label' => 'Lst Lecturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="lst-lectura-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->LCT_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->LCT_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'LCT_ID',
            'LCT_TITULO',
            'LCT_NOMBRE_LIBRO',
            'LCT_AUTOR',
            'LCT_ENLACE',
            'LCT_ESTADO',
            'LCT_FECHAINICIO',
            'LCT_PAGINAxDIA',
        ],
    ]) ?>

</div>
