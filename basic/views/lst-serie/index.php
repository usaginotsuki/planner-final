<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LstSerieSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lst Series';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lst-serie-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lst Serie', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SRS_ID',
            'SRS_TITULO',
            'SRS_ESTADO',
            'SRS_DURACIONxCAP',
            'SRS_ENLACE',
            //'SRS_FECHAINICIO',
            //'SRS_FECHAFIN',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
