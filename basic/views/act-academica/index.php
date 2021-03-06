<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ActAcademicaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Actividad Academica';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="act-academica-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear una nueva actividad Academica', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ACT_ACD_ID',
            ['label' => 'Usuario',
            'value' => 'uSR.USR_NOMBRE',],
            ['label' => 'LstAcademica',
            'value' => 'aCD.ACD_TITULO',],
            'ACT_ACD_NOMBRE',
            'ACT_ACD_FECHAINICIO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
