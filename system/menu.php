  <?php
  $bdd = new PDO(plug_BDD_1,plug_BDD_2,plug_BDD_3);
  $bdd->exec('SET NAMES utf8');
  $reqmenu1 = $bdd->prepare('SELECT Rubriques, sample1, lienrubrique FROM menu WHERE langue= :language');
  $reqmenu1->execute(array('language' => $_SESSION['langue']));
  ?>
  <!-- MOBILE MENU - Option 2 -->
  <section id="navMobile" class="aside-menu left">
      <form class="form-horizontal form-search">
          <div class="input-group">
              <input type="search" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                  <button id="btnHideMobileNav" class="btn btn-close" type="button" title="Hide sidebar"><i class="fa fa-times"></i></button>
              </span>
          </div>
      </form>
      <div id="dl-menu" class="dl-menuwrapper">
          <ul class="dl-menu"></ul>
      </div>
  </section> 

  <!-- SLIDEBAR -->
  <section id="asideMenu" class="aside-menu right">
      <form class="form-horizontal form-search">
          <div class="input-group">
              <input type="search" class="form-control" placeholder="Search..." />
              <span class="input-group-btn">
                  <button id="btnHideAsideMenu" class="btn btn-close" type="button" title="Hide sidebar"><i class="fa fa-times"></i></button>
              </span>
          </div>
      </form>
      
      <h5 class="side-section-title">Dardel mobile menu</h5>
      <div class="nav">
          <ul>
              <li>
                  <a href="#">Catalogue</a>
              </li>
              <li>
                  <a href="#">Infos pratiques</a>
              </li>
              <li>
                  <a href="#">Sur youtube</a>
              </li>
              <li>
                  <a href="#">Revenir à l'accueil</a>
              </li>
          </ul>
      </div>
      
      <h5 class="side-section-title">Sur les réseaux sociaux</h5>
      <div class="social-media">
          <a href="https://www.youtube.com/channel/UCSQ98MSHe0V6nF7GyPg4Tig"><i class="fa fa-youtube youtube"></i></a>
          <a href="https://plus.google.com/u/0/"><i class="fa fa-google-plus google"></i></a>
          <a href="#"><i class="fa fa-twitter twitter"></i></a>
      </div>
      
      <h5 class="side-section-title">Informations pratiques</h5>
      <div class="contact-info">
          <h5>Adresse</h5>
          <p>11 bis rue des Campanules<br>Marne la vallée Cedex 2 FRANCE</p>
          
          <h5>Email</h5>
          <p>office@dardel.com</p>
          
          <h5>Tel</h5>
          <p>(33) 1 42 78 08 19</p>
      </div>
  </section>

              <!-- HEADER -->
      <div id="divHeaderWrapper">
          <header class="header-standard-2">     
      <!-- MAIN NAV -->
      <div class="navbar navbar-wp navbar-arrow mega-nav" role="navigation">
          <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle navbar-toggle-aside-menu">
                      <i class="fa fa-outdent icon-custom"></i>
                  </button>
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <i class="fa fa-bars icon-custom"></i>
                  </button>

                  <a class="navbar-brand" href="index.html" title="Dardel | Bijoux, Ecrins">
                      <img src="images/logo-dardel.png" alt="Dardel | Bijoux, Ecrins">
                  </a>
              </div>
              <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                      <li class="hidden-md hidden-lg">
                          <div class="bg-light-gray">
                              <form class="form-horizontal form-light p-15" role="form">
                                  <div class="input-group input-group-lg">
                                      <input type="text" class="form-control" placeholder="I want to find ...">
                                      <span class="input-group-btn">
                                          <button class="btn btn-white" type="button">
                                              <i class="fa fa-search"></i>
                                          </button>
                                      </span>
                                  </div>
                              </form>
                          </div>
                      </li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Matières</a>
                          <ul class="dropdown-menu">
                          <?php
                          foreach ($reqmenu1 as $value) {
                            echo "<li><a href='".$value[2]."'>".$value[0]."</a></li>";
                          }?>
                          </ul>
                      </li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Divers</a>
                          <ul class="dropdown-menu">
                              <li class="dropdown-submenu">
                                  <a tabindex="-1" href="#">Real Estate</a>
                                  <ul class="dropdown-menu">
                                      <li><a tabindex="-1" href="homepage-estate-1.html">Homepage</a></li>
                                      <li><a tabindex="-1" href="estate-listing-1.html">Listing: List </a></li>
                                      <li><a tabindex="-1" href="estate-listing-2.html">Listing: Grid</a></li>
                                      <li><a tabindex="-1" href="estate-property.html">Property</a></li>
                                  </ul>
                              </li>
                              <li class="dropdown-submenu">
                                  <a tabindex="-1" href="#">Jobs</a>
                                  <ul class="dropdown-menu">
                                      <li><a tabindex="-1" href="homepage-jobs-1.html">Homepage</a></li>
                                      <li><a tabindex="-1" href="jobs-listing-1.html">Jobs listing</a></li>
                                      <li><a tabindex="-1" href="job-description-1.html">Job description</a></li>
                                  </ul>
                              </li>
                              <li class="dropdown-submenu">
                                  <a tabindex="-1" href="#">Magazine &amp; Newspaper</a>
                                  <ul class="dropdown-menu">
                                      <li class="divider">Magazine</li>
                                      <li><a tabindex="-1" href="homepage-magazine-1.html">Homepage</a></li>
                                      <li><a tabindex="-1" href="magazine-listing-1.html">Category listing: List</a></li>
                                      <li><a tabindex="-1" href="magazine-listing-2.html">Category listing: Grid</a></li>
                                      <li><a tabindex="-1" href="magazine-article-1.html">Magazine article</a></li>
                                      <li class="divider">Newspaper</li>
                                      <li><a tabindex="-1" href="homepage-newspaper-1.html">Newspaper homepage</a></li>
                                      <li><a tabindex="-1" href="newspaper-listing-1.html">Newspaper listing: List</a></li>
                                      <li><a tabindex="-1" href="newspaper-listing-2.html">Newspaper listing: Grid</a></li>
                                      <li><a tabindex="-1" href="magazine-article-1.html">Newspaper article</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                      
                      <li class="dropdown">
                          <a href="#" id="cmdAsideMenu" class="dropdown-toggle" data-toggle="dropdown">Contact</a>
                      </li>
                  </ul>
                 
              </div><!--/.nav-collapse -->
          </div>
      </div>
  </header>