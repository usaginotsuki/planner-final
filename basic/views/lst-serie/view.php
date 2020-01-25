<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LstSerie */

$this->title = $model->SRS_ID;
$this->params['breadcrumbs'][] = ['label' => 'Lst Series', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="lst-serie-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->SRS_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->SRS_ID], [
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
            'SRS_ID',
            'SRS_TITULO',
            'SRS_ESTADO',
            'SRS_DURACIONxCAP',
            'SRS_ENLACE',
            'SRS_FECHAINICIO',
            'SRS_FECHAFIN',
        ],
    ]) ?>

</div>
