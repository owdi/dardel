<div class="container">
    <div id="footer"><!-- *********************** Footer *********************** -->
        <?php if($_SESSION[langue] === "fr"){ ?>
        <div class="row">
            <div class="col-md-2">
                <ul>
                    <li>christian</li>
                    <li><a href="#">à propos</a></li>
                    <li><a href="http://www.dardel.com/new/rubriques/service-commercial.php">notre équipe</a></li>
                    <li><a href="#">nos clients</a></li>
                    <li><a href="#">contactez nous</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <ul>
                    <li>vidéos</li>
                    <li><a href="">notre expertise</a></li>
                    <li><a href="">nos artisans</a></li>
                    <li><a href="https://www.youtube.com/channel/UCSQ98MSHe0V6nF7GyPg4Tig" target="blank">notre chaine</a></li>
                </ul>
                <ul>
                    <li>salons</li>
                    <li><a href="http://www.baselworld.com/" target="blank">baselword</a></li>
                    <li><a href="http://www.vicenzaoro.com/" target="blank">vicenza oro</a></li>
                    <li><a href="http://www.inhorgenta.com/" target="blank">inhorgenta</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <ul>
                    <li>Services</li>
                    <li><a href="">quotation</a></li>
                    <li><a href="">visites</a></li>
                    <li><a href="">packaging</a></li>
                    <li><a href="">livraison</a></li>
                    <li><a href="http://www.dardel.com/new/rubriques/tarifs.php">tarifs</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <ul>
                    <li>faq</li>
                    <li><a href="">général</a></li>
                    <li><a href="">Logistique</a></li>
                    <li><a href="">Clients</a></li>
                    <li><a class="adminLink" data-toggle="modal" data-target="#modalAdmin">Admin</a></li>
                </ul>
                <ul>
                    <li>blog</li>
                    <li><a href="">archives</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h2>Dardel</h2>
                <img src=""><img src=""><img src="">
                <div></div>
                <address>
                    <strong><span class="glyphicon glyphicon-home"> adresse</span></strong><br />
                    11 bis rue des Campanules<br />
                    Marne la vallée Cedex 2 FRANCE<br /><br />
                    <strong><span class="glyphicon glyphicon-phone"> tel</span></strong><br />
                    <abbr title="Phone"></abbr> (33) 1 42 78 08 19
                </address>

                <address>
                    <strong><span class="glyphicon glyphicon-envelope"> email</span></strong><br />
                    <a href="mailto:office@dardel.com">office@dardel.com</a>
                </address>
            </div>
            <!-- Button trigger modal -->


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
        </div>
        <?php }else{ ?>
                <div class="row">
            <div class="col-md-2">
                <ul>
                    <li>Meet Christian</li>
                    <li><a href="#">About</a></li>
                    <li><a href="http://www.dardel.com/new/rubriques/service-commercial.php">Our team</a></li>
                    <li><a href="#">Client list</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <ul>
                    <li>Film</li>
                    <li><a href="">Our expertise</a></li>
                    <li><a href="">Our artisans</a></li>
                    <li><a href="https://www.youtube.com/channel/UCSQ98MSHe0V6nF7GyPg4Tig" target="blank">Our Channel</a></li>
                </ul>
                <ul>
                    <li>Shows</li>
                    <li><a href="http://www.baselworld.com/" target="blank">Baselword</a></li>
                    <li><a href="http://www.vicenzaoro.com/" target="blank">Vicenza Oro</a></li>
                    <li><a href="http://www.inhorgenta.com/" target="blank">Inhorgenta</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <ul>
                    <li>Services</li>
                    <li><a href="">Quote</a></li>
                    <li><a href="">Visit</a></li>
                    <li><a href="">Color Pac</a></li>
                    <li><a href="">Packaging</a></li>
                    <li><a href="">Drop shipping</a></li>
                    <li><a href="http://www.dardel.com/new/rubriques/tarifs.php">prices list</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <ul>
                    <li>FAQ</li>
                    <li><a href="">General</a></li>
                    <li><a href="">Logistics</a></li>
                    <li><a href="">Customers</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a class="adminLink" data-toggle="modal" data-target="#modalAdmin">Admin</a></li>
                </ul>
                <ul>
                    <li>Blog</li>
                    <li><a href="">Archive</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h2>Dardel</h2>
                <img src=""><img src=""><img src="">
                <div></div>
                <address>
                    <strong><span class="glyphicon glyphicon-home"> ADRESS</span></strong><br />
                    11 bis rue des Campanules<br />
                    Marne la vallée Cedex 2 FRANCE<br /><br />
                    <strong><span class="glyphicon glyphicon-phone"> TEL</span></strong><br />
                    <abbr title="Phone"></abbr> (33) 1 42 78 08 19
                </address>

                <address>
                    <strong><span class="glyphicon glyphicon-envelope"> EMAIL</span></strong><br />
                    <a href="mailto:office@dardel.com">office@dardel.com</a>
                </address>
            </div>
            <!-- Button trigger modal -->


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
        </div>
        <?php } ?>
    </div>
</div>