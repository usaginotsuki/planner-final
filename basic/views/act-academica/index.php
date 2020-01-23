<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ActAcademicaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Act Academicas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="act-academica-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Act Academica', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ACT_ACD_ID',
            'USR_ID',
            'ACD_ID',
            'ACT_ACD_NOMBRE',
            'ACT_ACD_FECHAINICIO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
