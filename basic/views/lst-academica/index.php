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
 <h1 style="text-align: center"> Crea nuevas materias </h1><br>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <div class="container">
  <div class="row"  >
     

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
        'items'             => 8,
        'loop'              => true,
        'itemsDesktop'      => [1199, 3],
        'itemsDesktopSmall' => [979, 3]
    ]
]);
?>

<div class="item-class"><a href="https://srvcas.espe.edu.ec/authenticationendpoint/login.do?Name=PreLoginRequestProcessor&commonAuthCallerPath=%252Fcas%252Flogin&forceAuth=true&passiveAuth=false&service=https%3A%2F%2Fmiespe.espe.edu.ec%2Fc%2Fportal%2Flogin&tenantDomain=carbon.super&sessionDataKey=51958355-876c-42cc-82c7-0405cccc81c4&relyingParty=portal_luminis&type=cas&sp=portal_luminis&isSaaSApp=false&authenticators=BasicAuthenticator:LOCAL"><img src="https://srvcas.espe.edu.ec/authenticationendpoint/images/Espe-Angular-Logo.png" alt="Image 1"></div>
<div class="item-class"><a href="https://saew.epn.edu.ec/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Escudo_de_la_Escuela_Polit%C3%A9cnica_Nacional.png/200px-Escudo_de_la_Escuela_Polit%C3%A9cnica_Nacional.png" alt="Image 2"></div>
<div class="item-class"><a href="https://sicoaweb2.unach.edu.ec/SicoaAdministracion/Transacciones/Login.aspx?us=58ghjtr&sq=qscyjmkofgfg&wr=fghfg5454&dq=1420weggre&tx=r5gfff5ikl6&go=00pfjhhn"><img src="https://www.universidades.com.ec/logos/original/logo-universidad-nacional-de-chimborazo.png" alt="Image 3"></div>
<div class="item-class"><a href="https://servicios.uta.edu.ec/SistemaIntegrado/Cuenta/Login?ReturnUrl=%2fSistemaIntegrado"><img src="https://upload.wikimedia.org/wikipedia/commons/9/93/Escudo_de_la_Universidad_T%C3%A9cnica_de_Ambato.png" alt="Image 4"></div>
<div class="item-class"><a href="https://www.academico.espol.edu.ec/login.aspx?ReturnUrl=%2fUI%2fInformacionAcademica%2finformaciongeneral.aspx"><img src="https://upload.wikimedia.org/wikipedia/commons/2/20/ESPOL_-_Logo_001.svg" alt="Image 4"></div>
<div class="item-class"><a href="https://siiu.uce.edu.ec/aplicacion/academico/generalidades/login.jsp"><img src="https://www.ecured.cu/images/8/8f/Logo_Universidad_Central_del_Ecuador.jpg" alt="Image 4"></div>
<?php OwlCarouselWidget::end(); ?>


</div><br>
<div style="text-align: center">
     <?= Html::a('Crear nueva tarea', ['create'], ['class' => 'btn btn-success']);echo '<br><br><p style="text-align: center">Entra en el sistema de notas de cada universidad haciendo clic sobre ella</p>';
         ?>
</div>
       
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           
            'ACD_TITULO',
            'ACD_MATERIA',
            'ACD_FECHAINICIO',
            'ACD_FECHAFIN',
            //'ACD_MATERIALES',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
