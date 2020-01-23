<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LstDeporteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lst Deportes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lst-deporte-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lst Deporte', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'DPR_ID',
            'DPR_TITULO',
            'DPR_DEPORTE',
            'DPR_DIASxSEM',
            'DPR_HORASxDIA',
            //'DPR_FECHAINICIO',
            //'DPR_FECHAFIN',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
