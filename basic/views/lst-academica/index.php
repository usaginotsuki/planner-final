<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LstAcademicaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lst Academicas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lst-academica-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lst Academica', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ACD_ID',
            'ACD_TITULO',
            'ACD_MATERIA',
            'ACD_FECHAINICIO',
            'ACD_FECHAFIN',
            //'ACD_MATERIALES',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
