<div class="bloc-produits">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                <div class="row">
<?php
        while ($donnees = $req->fetch())
        {
        for($i=1;$i<10;$i++)
            {
                if($donnees['sous-menu_'.$i] != null){
                    echo '<div class="col-md-3"><div class="text-center"><a href="matiere.php?matiere='.$donnees['sous-menu_'.$i].'"><img src="../../'.$donnees['sample'.$i].'" /><p>'.$donnees['sous-menu_'.$i].'</p></a></div></div>';
                }
            }
        }
?>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>