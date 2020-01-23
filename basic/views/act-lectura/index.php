<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ActLecturaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Act Lecturas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="act-lectura-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Act Lectura', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ACT_LECT_ID',
            'USR_ID',
            'LCT_ID',
            'ACT_LECT_NOMBRE',
            'ACT_LECT_FECHAINICIO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
