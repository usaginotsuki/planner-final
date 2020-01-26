<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Carousel;
/* @var $this yii\web\View */
/* @var $searchModel app\models\LstLecturaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lista de Lecturas';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="lst-lectura-index">
    
</div>
    
<div class="container" style="text-align: center">
    <h1>
        Los libros mas populares<br>
    </h1>
</div>
<div class="container-fluid">
  <div class="row" >
    <div class="">
      
    </div><?php
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
        'items'             => 8,
        'loop'              => true,
        'itemsDesktop'      => [1199, 3],
        'itemsDesktopSmall' => [979, 3]
    ]
]);
?>

<div class="item-class"><img src="https://images-eu.ssl-images-amazon.com/images/I/41QD%2BmzSBOL.jpg" alt="Image 1" style="width:140px;height:203px"></div>
<div class="item-class"><img src="https://images-na.ssl-images-amazon.com/images/I/51pAui14H6L._SX326_BO1,204,203,200_.jpg" style="width:140px;height:203px" alt="Image 2"></div>
<div class="item-class"><img src="https://images-na.ssl-images-amazon.com/images/I/41qI9quGIdL._SX324_BO1,204,203,200_.jpg" style="width:140px;height:203px" alt="Image 3"></div>
<div class="item-class"><img src="https://images-na.ssl-images-amazon.com/images/I/51%2Bw1lIHrLL._SX324_BO1,204,203,200_.jpg" style="width:140px;height:203px" alt="Image 4"></div>
<div class="item-class"><img src="https://images-na.ssl-images-amazon.com/images/I/51g6mSuOirL._SY346_.jpg" style="width:140px;height:203px" alt="Image 3"></div>
<div class="item-class"><img src="https://images-na.ssl-images-amazon.com/images/I/51g4gvXUDRL._SY346_.jpg" style="width:140px;height:203px" alt="Image 4"></div>

<?php OwlCarouselWidget::end(); ?>

  </div>
</div>
    
    <br><br>
    <p style="text-align: center">
        <?= Html::a('Crear nueva lectura', ['create'], ['class' => 'btn btn-success']) ?>
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
