<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ActDeporteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Actividad deportiva';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="act-deporte-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create actividad deportiva', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ACT_DPR_ID',
            ['label' => 'Usuario',
            'value' => 'uSR.USR_NOMBRE',],
            ['label' => 'LstDeporte',
            'value' => 'dPR.DPR_TITULO',],
            'ACT_DPR_NOMBRE',
            'ACT_DPR_FECHAINICIO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
