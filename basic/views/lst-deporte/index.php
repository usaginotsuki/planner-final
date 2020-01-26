<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LstDeporteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lista deportiva';
$this->params['breadcrumbs'][] = $this->title;
?><br>
<div class="lst-deporte-index" style="text-align: center">
    

    <h1><?= Html::encode($this->title) ?></h1>
    <?php
    use kv4nt\owlcarousel\OwlCarouselWidget;

OwlCarouselWidget::begin([
    'container' => 'div',
    'containerOptions' => [
        'id' => 'container-id',
        'class' => 'container-class'
    ],
    'pluginOptions'    => [
        'autoplay'          => true,
        'autoplayTimeout'   => 3000,
        'items'             => 4,
        'loop'              => true,
        'itemsDesktop'      => [1199, 3],
        'itemsDesktopSmall' => [979, 3]
    ]
]);
?>

<div class="item-class"><img src="https://img.freepik.com/vector-gratis/futbol-abstracto-que-salta-bola-tacto_62860-7.jpg?size=338&ext=jpg" alt="Image 1" style="width:200px;height:203px"></div>
<div class="item-class"><img src="https://img.freepik.com/vector-gratis/fondo-juego-futbol-balon_23-2147802905.jpg?size=338&ext=jpg" style="width:200px;height:203px" alt="Image 2"></div>
<div class="item-class"><img src="https://worldinsport.com/wp-content/uploads/2017/03/baseball-pic.jpg" style="width:200px;height:203px" alt="Image 3"></div>
<div class="item-class"><img src="http://swim.by/wp-content/uploads/ironman-gdynia-2018-running-half-marathon-triathlon.jpg" style="width:200px;height:203px" alt="Image 4"></div>
<div class="item-class"><img src="https://www.elcomercio.com/files/article_main/uploads/2014/06/20/53a4781734e3f.jpg" style="width:200px;height:203px" alt="Image 3"></div>

<?php OwlCarouselWidget::end(); ?>
<br><br>
    <p>
        <?= Html::a('Crear nueva tarea', ['create'], ['class' => 'btn btn-success']) ?>
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
