<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ActSerie */

$this->title = $model->ACT_SER_ID;
$this->params['breadcrumbs'][] = ['label' => 'Act Series', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="act-serie-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ACT_SER_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ACT_SER_ID], [
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
            'ACT_SER_ID',
            ['label'=>'Usuario',
            'value'=>$model->uSR->USR_NOMBRE,],
            ['label'=>'LstSerie',
            'value'=>$model->sRS->SRS_TITULO,],
            'ACT_SER_NOMBRE',
            'ACT_SER_FECHAINICIO',
        ],
    ]) ?>

</div>
