<?php if($_SESSION['langue'] == "fr"){ ?>
           <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="col">
                       <h4>Nous contacter</h4>
                       <ul>

                            <li>11 bis rue des Campanules - Marne la vallée Cedex 2 FRANCE</li>
                            <li>Phone : +(33) 1 42 78 08 19 </li>
                            <li>Email : <a href="mailto:office@dardel.com" title="Email">office@dardel.com</a></li>
                            <li>Dardel | Bijoux, Ecrins</li>
                        </ul>
                     </div>
                </div>
                
                <div class="col-md-3">
                    <div class="col">
                        <h4>Vidéos</h4>
                        <ul>
                            <li>Notre expertise</li>
                            <li>Nos artisans</li>
                            <li>Notre chaine youtube : <a href="https://www.youtube.com/channel/UCSQ98MSHe0V6nF7GyPg4Tig"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                        <h4>Salons</h4>
                        <ul>
                            <li><a href="http://www.baselworld.com/" target="blank">baselword</a></li>
                            <li><a href="http://www.vicenzaoro.com/" target="blank">vicenza oro</a></li>
                            <li><a href="http://www.inhorgenta.com/" target="blank">inhorgenta</a></li>
                        </ul>    
                    </div>
                </div>
                
                <div class="col-md-3">                    
                    <h4>Services</h4>
                        <ul>
                            <li>QUOTATION</li>
                            <li>VISITES</li>
                            <li>PACKAGING</li>
                            <li>LIVRAISON</li>
                            <li>TARIFS</li>
                    </ul>
                </div>
                <div class="col-md-3">                    
                    <h4>FAQ</h4>
                        <ul>
                            <li>GÉNÉRAL</li>
                            <li>LOGISTIQUE</li>
                            <li>CLIENTS</li>
                            <li><a class="adminLink" data-toggle="modal" data-target="#modalAdmin">ADMIN</a></li>
                    </ul>
                    <h4>BLOG</h4>
                        <ul>
                            <li>ARCHIVES</li>
                    </ul>
                </div>
            </div>
            
            <hr>
            
            <div class="row">
                <div class="col-lg-9 copyright">
                    2015 © Dardel. All rights reserved.
                    <a href="#">Terms and conditions</a>
                </div>
                <div class="col-lg-3">
                    <a href="#" title="Made with love by Web Pixels" target="_blank" class="pull-right">
                        <!-- <img src="images/webpixels-footer-logo.png" alt="Dardel | Logo" class="pull-right"> -->
                        DARDEL
                    </a>
                </div>
            </div>
        </div>
    </footer>

                <!-- Modal vers page admin -->
            <div class="modal fade" id="modalAdmin" tabindex="-1" role="dialog" aria-labelledby="modalAdminLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modalAdminLabel">Merci de vous authentifier</h4>
                  </div>
                  <div class="modal-body">
                    <form action="http://www.dardel.com/new/system/formulaire_admin.php" method="post">
                        <table>
                        <tr><td><label for="nom">Identifiant</label> :</td> <td><input type="text" name="nom" value="" id="nom"/></td></tr>
                        <tr><td><label for="pass">Mot de passe</label> :</td> <td><input type="password" name="pass" value="" id="pass"/></td></tr>
                        </table>
                        <input type="submit" value="valider"/>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
    <?php }else{ ?>
                    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="col">
                       <h4>Contact us</h4>
                       <ul>

                            <li>11 bis rue des Campanules - Marne la vallée Cedex 2 FRANCE</li>
                            <li>Phone : +(33) 1 42 78 08 19 </li>
                            <li>Email : <a href="mailto:office@dardel.com" title="Email">office@dardel.com</a></li>
                            <li>Dardel | Bijoux, Ecrins</li>
                        </ul>
                     </div>
                </div>
                
                <div class="col-md-3">
                    <div class="col">
                        <h4>Videos</h4>
                        <ul>
                            <li>Knowledge</li>
                            <li>Our experts</li>
                            <li>Youtube channel: <a href="https://www.youtube.com/channel/UCSQ98MSHe0V6nF7GyPg4Tig"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                        <h4>Show</h4>
                        <ul>
                            <li><a href="http://www.baselworld.com/" target="blank">baselword</a></li>
                            <li><a href="http://www.vicenzaoro.com/" target="blank">vicenza oro</a></li>
                            <li><a href="http://www.inhorgenta.com/" target="blank">inhorgenta</a></li>
                        </ul>    
                    </div>
                </div>
                
                <div class="col-md-3">                    
                    <h4>Services</h4>
                        <ul>
                            <li>QUOTATION</li>
                            <li>VISITES</li>
                            <li>PACKAGING</li>
                            <li>DELIVERY</li>
                            <li>PRICES</li>
                    </ul>
                </div>
                <div class="col-md-3">                    
                    <h4>FAQ</h4>
                        <ul>
                            <li>GENERAL</li>
                            <li>LOGISTIC</li>
                            <li>CUSTOMERS</li>
                            <li><a class="adminLink" data-toggle="modal" data-target="#modalAdmin">ADMIN</a></li>
                    </ul>
                    <h4>BLOG</h4>
                        <ul>
                            <li>ARCHIVES</li>
                    </ul>
                </div>
            </div>
            
            <hr>
            
            <div class="row">
                <div class="col-lg-9 copyright">
                    2015 © Dardel. All rights reserved.
                    <a href="#">Terms and conditions</a>
                </div>
                <div class="col-lg-3">
                    <a href="#" title="Made with love by Web Pixels" target="_blank" class="pull-right">
                        <!-- <img src="images/webpixels-footer-logo.png" alt="Dardel | Logo" class="pull-right"> -->
                        DARDEL
                    </a>
                </div>
            </div>
        </div>
    </footer>
            <!-- Button trigger modal -->


            <!-- Modal vers page admin -->
            <div class="modal fade" id="modalAdmin" tabindex="-1" role="dialog" aria-labelledby="modalAdminLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modalAdminLabel">Login</h4>
                  </div>
                  <div class="modal-body">
                    <form action="http://www.dardel.com/new/system/formulaire_admin.php" method="post">
                        <table>
                        <tr><td><label for="nom">User</label> :</td> <td><input type="text" name="nom" value="" id="nom"/></td></tr>
                        <tr><td><label for="pass">Password</label> :</td> <td><input type="password" name="pass" value="" id="pass"/></td></tr>
                        </table>
                        <input type="submit" value="Ok"/>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>