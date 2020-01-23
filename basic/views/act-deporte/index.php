<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ActDeporteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Act Deportes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="act-deporte-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Act Deporte', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ACT_DPR_ID',
            'USR_ID',
            'DPR_ID',
            'ACT_DPR_NOMBRE',
            'ACT_DPR_FECHAINICIO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
