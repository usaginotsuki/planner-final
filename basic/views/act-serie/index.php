<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ActSerieSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Actividad de Series';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="act-serie-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear actividad de Serie', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ACT_SER_ID',
            ['label' => 'Usuario',
            'value' => 'uSR.USR_NOMBRE',],
            ['label' => 'LstSerie',
            'value' => 'sRS.SRS_TITULO',],
            'ACT_SER_NOMBRE',
            'ACT_SER_FECHAINICIO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
