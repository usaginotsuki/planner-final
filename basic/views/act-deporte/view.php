<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ActDeporte */

$this->title = $model->ACT_DPR_ID;
$this->params['breadcrumbs'][] = ['label' => 'Act Deportes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="act-deporte-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ACT_DPR_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ACT_DPR_ID], [
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
            'ACT_DPR_ID',
            ['label'=>'Usuario',
            'value'=>$model->uSR->USR_NOMBRE,],
            ['label'=>'LstDeporte',
            'value'=>$model->dPR->DPR_TITULO,],
            'ACT_DPR_NOMBRE',
            'ACT_DPR_FECHAINICIO',
        ],
    ]) ?>

</div>
