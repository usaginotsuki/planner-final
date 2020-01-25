<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LstLecturaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lst Lecturas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lst-lectura-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lst Lectura', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'LCT_ID',
            'LCT_TITULO',
            'LCT_NOMBRE_LIBRO',
            'LCT_AUTOR',
            'LCT_ENLACE',
            //'LCT_ESTADO',
            //'LCT_FECHAINICIO',
            //'LCT_PAGINAxDIA',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
