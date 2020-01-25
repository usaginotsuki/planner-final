<?php

/* @var $this yii\web\View */

$this->title = 'Plannr!';
?>

    <div class="body-content">

        <div class="container">

    <div class="jumbotron">
        <h1>Plannr!</h1>
            <?php
            if(Yii::$app->user->isGuest){
                        print " <p class=\"lead\">Organiza tu tiempo y se mas productivo!!!.</p>\n";
                print "\n";
                print "        <p><img src=\"https://cdn.shopify.com/s/files/1/0082/6209/0823/files/IMG_1393_800x.jpg?v=1567216963\" style=\"width:50%;height:50%;\"></p>\n";
                print "    </div>\n";
                print "\n";
                print "    <div class=\"body-content\">\n";
                print "\n";
                print "        <div class=\"row\">\n";
                print "            <div class=\"col-lg-3\">\n";
                print "                <h2>Lista de lectura</h2>\n";
                print "\n";
                print "                <p><ul class=\"list-group\">\n";
                print "  <li class=\"list-group-item\">Cien años de soledad</li>\n";
                print "  <li class=\"list-group-item\">Don Quijote de la Mancha</li>\n";
                print "  <li class=\"list-group-item\">Hamlet</li>\n";
                print "  <li class=\"list-group-item\">1984</li>\n";
                print "  <li class=\"list-group-item\">El Principito</li>\n";
                print "  <li class=\"list-group-item\">...</li>\n";
                print "\n";
                print "</ul></p>\n";
                print "\n";
                print "              \n";
                print "            </div>\n";
                print "            <div class=\"col-lg-3\">\n";
                print "                <h2>Lista de series</h2>\n";
                print "\n";
                print "                <p><ul class=\"list-group\">\n";
                print "  <li class=\"list-group-item\">Game of Thrones</li>\n";
                print "  <li class=\"list-group-item\">How I met your mother</li>\n";
                print "  <li class=\"list-group-item\">Friends</li>\n";
                print "  <li class=\"list-group-item\">Breaking Bad</li>\n";
                print "  <li class=\"list-group-item\">Attack On Titan</li>\n";
                print "\n";
                print "  <li class=\"list-group-item\">...</li>\n";
                print "\n";
                print "</ul> </p>\n";
                print "            </div>\n";
                print "            <div class=\"col-lg-3\">\n";
                print "                <h2>Planeador academico</h2>\n";
                print "\n";
                print "                <p><ul class=\"list-group\">\n";
                print "  <li class=\"list-group-item\">Matematicas</li>\n";
                print "  <li class=\"list-group-item\">Lengua y Literatura</li>\n";
                print "  <li class=\"list-group-item\">Ciencias Sociales</li>\n";
                print "  <li class=\"list-group-item\">Estadistica</li>\n";
                print "    <li class=\"list-group-item\">Fisica</li>\n";
                print "\n";
                print "  <li class=\"list-group-item\">...</li>\n";
                print "</ul> </p>\n";
                print "            </div>\n";
                print "              <div class=\"col-lg-3\">\n";
                print "                <h2>Lista de deportes</h2>\n";
                print "<p><ul class=\"list-group\">\n";
                print "  <li class=\"list-group-item\">Futbol</li>\n";
                print "  <li class=\"list-group-item\">Basquet</li>\n";
                print "  <li class=\"list-group-item\">Caminata</li>\n";
                print "  <li class=\"list-group-item\">Natacion</li>\n";
                print "    <li class=\"list-group-item\">Atletismo</li>\n";
                print "\n";
                print "  <li class=\"list-group-item\">...</li>\n";
                print "</ul> </p>";

               }
        ?>

        <?php 
  if(!Yii::$app->user->isGuest){
    echo "Estamos trabajando para mejorarlo";
  }
 ?>
            </div>
        </div>

       
    </div>
</div>
