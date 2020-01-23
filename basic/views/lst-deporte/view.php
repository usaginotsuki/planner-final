<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LstDeporte */

$this->title = $model->DPR_ID;
$this->params['breadcrumbs'][] = ['label' => 'Lst Deportes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="lst-deporte-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->DPR_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->DPR_ID], [
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
            'DPR_ID',
            'DPR_TITULO',
            'DPR_DEPORTE',
            'DPR_DIASxSEM',
            'DPR_HORASxDIA',
            'DPR_FECHAINICIO',
            'DPR_FECHAFIN',
        ],
    ]) ?>

</div>
