<?php
namespace dosamigos\gallery;

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Carousel;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\web\JsExpression;
use dosamigos\gallery\Gallery;
/* @var $this yii\web\View */
/* @var $searchModel app\models\LstSerieSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'lst-serie';

?><div>
    
</div>
<div class="container" style="text-align: center">
    <h1>
        Las series mas populares <br>
    </h1><br>
</div>
<br>
 <div class="container" style="background-image: url('https://3.bp.blogspot.com/-GVoMg9uKDaQ/XE4VzpLjAhI/AAAAAAAAFXc/98QE63pkTro_EtwArbd3a0im0dkXXXHRACHMYCw/s1600/fear-the-walking-dead-season-4-wallpapers-wallpaper-cave.jpg'); background-repeat: no-repeat;   background-size: cover;">

    <div  class="carousel" style="text-align: center">
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
        'autoplayTimeout'   => 15000,
        'items'             => 2,
        'loop'              => true,
        'itemsDesktop'      => [1199, 3],
        'itemsDesktopSmall' => [979, 3]
    ]
]);
?>

<div class="item-class"><iframe width="448" height="252" src="https://www.youtube.com/embed/v7sVsQlfDf0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>>
</div>
<div class="item-class"><<iframe width="448" height="252" src="https://www.youtube.com/embed/6zKvzjjgYo0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>>
</div>
<div class="item-class">
    <iframe width="448" height="252" src="https://www.youtube.com/embed/osY929PCs2o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>


<?php OwlCarouselWidget::end(); ?>

 </div>
</div>
<br>

<div class="lst-serie-index" style="text-align: center">
   
    <h1><?= Html::encode($this->title) ?></h1>
 
    <p>
        <?= Html::a('Crear nueva serie', ['create'], ['class' => 'btn btn-success']) ?>
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
