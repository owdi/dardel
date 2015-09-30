<?php
 include("constantes.php");
$bdd = new PDO(plug_BDD_1,plug_BDD_2,plug_BDD_3);
$bdd->exec('SET NAMES utf8');
$reqmenu1 = $bdd->prepare('SELECT Rubriques, sample1, lienrubrique FROM menu WHERE langue= :language');
$reqmenu1->execute(array('language' => $_SESSION['langue']));
?>
<div class="toTop"><i class="glyphicon glyphicon-circle-arrow-up"></i></div>
    <div class="container">
            <div class="navbar navbar-default yamm">
              <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="http://www.dardel.com/new" class="navbar-dardel-logo"><img alt="logo dardel" id="logo-dardel" src="http://www.dardel.com/new/images/logo-dardel.png"></a>
              </div>
              <div id="navbar-collapse-grid" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <!-- Grid 12 Menu -->
                  <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false"><?php if($_SESSION['langue'] === "fr" ){echo "rubriques";}else{echo "category";} ?></a>
                    <ul class="dropdown-menu">
                      <li class="grid-demo">
                        <div class="row">

                        <?php
                        foreach ($reqmenu1 as $value) {
                          echo "<div class='col-sm-2'><div class='text-center rubriques'><a href='".$value[2]."'><h4>".$value[0]."</h4><img src='http://www.dardel.com/".$value[1]."'/></a></div></div>";
                        }

                        ?>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <!--With Offsets 
                  -->
                  <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false"><?php if($_SESSION['langue'] === "fr" ){echo "matière";}else{echo "material";} ?></a>
                    <ul class="dropdown-menu">
                      <li class="grid-demo">
                        <div class="row">
                          <?php 
                            $bdd = new PDO(plug_BDD_1,plug_BDD_2,plug_BDD_3);
                            $bdd->exec('SET NAMES utf8');
                            $reqmenu2 = $bdd->query('SELECT * FROM menu WHERE langue="fr"');

                          foreach ($reqmenu2 as $value) {
                            echo "<div class='col-md-3'><ul>";
                            for ($i=0; $i < 9; $i++) { 
                              if ($value[$i] != "") {
                                if($i==0)
                                    {
                                    echo "<li><a href='".$value[22]."'>".$value[$i]."</a></li>";
                                    }
                                else{
                                    echo "<li><a href='http://www.dardel.com/new/rubriques/matiere.php?matiere=".$value[$i]."'>".$value[$i]."</a></li>";
                                  }
                                 
                              }
                            }
                            echo "</ul></div>";
                          }
                          $reqmenu2->closeCursor();
                          ?>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <!--Aside Menu 
                  -->
                  <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false"><?php if($_SESSION['langue'] === "fr" ){echo "divers";}else{echo "others";} ?></a>
                    <ul class="dropdown-menu">
                      <li class="grid-demo">
                        <div class="row">
                          <div class="col-sm-3"><br>
                            <h3>3</h3><br>
                          </div>
                          <div class="col-sm-9"><br>
                            <h3>9</h3><br>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a href="">contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>