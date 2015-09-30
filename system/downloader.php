					<?php
					session_start();

						class SeraphicCorpDownloader {
							private $downloadableFiles;
							private $abstractURI;
							
							/* $downloadableFiles : indexes are paths, values are the name displayed in the form */

							public function __construct($downloadableFiles){
								$this->downloadableFiles = $downloadableFiles;
								$this->buildAbstractURI();
							}

							private function buildAbstractURI(){
								$this->abstractURI = array();
								$i = 1;
								foreach($this->downloadableFiles as $path => $label){
									$this->abstractURI[$i] = $path;
									$i++;
								}
							}

							public function getHTMLForDownloader($urlForTreatment, $formLabel, $formName, $buttonLabel, $formID = '', $formClass = ''){
								$options = '<option value="">'.$formLabel.'</option>';
								foreach ($this->abstractURI as $value => $key){
									$options .= '<option value="'.$value.'">'.$this->downloadableFiles[$key].'</option>';
								}

								return '<form id="'.$formID.'" class="'.$formClass.'" action="'.$urlForTreatment.'" method="post"> 
									<div>
										<select name="'.$formName.'">
											'.$options.'
										</select>
										<input type="submit" name="'.$formName.'_Submit" value="'.$buttonLabel.'" />
									</div>
								</form>';
							}

							public function sendFile($id){
								$id = intval($id);
								
								if (!array_key_exists($id, $this->abstractURI)) die('File do not exist.');

								$file = $this->abstractURI[$id];

								if (!is_file($file)) die('File do not exist.');
								
								header("Content-type: application/force-download"); 
								header("Content-Disposition: attachment; filename=".basename($file));
								header("Content-Length: ".filesize($file));
								readfile($file);
								exit(0);
							}

						}

					// Exemple d'utilisation, ne pas oublier l'include de ce code avant de l'utiliser !
					$mesFichiers = array (
					'../download/fr/tarif_presentoirs_nature_jan_2015_fr.pdf' => 'Tarif Presentoirs Nature Janvier 2015 - Francais',  
					'../download/fr/tarif_marmottes_2015_fr.pdf' => 'Tarif Marmottes 2015 - Francais',
					'../download/fr/tarif_bijouterie_fev_2015_fr.pdf' => 'Tarif Bijouterie Fevrier 2015 - Francais',
					'../download/fr/tarif_sacs_et_rubans_jan_2015_fr.pdf' => 'Tarif Sacs et Rubans Dardel Janvier 2015 - Francais',
					'../download/fr/CONDITIONS_GENERALES_DE_VENTE.pdf' => 'CONDITIONS GENERALES DE VENTE',
					'../download/fr/HORLOF.pdf' => 'HORLOGERIE',
					'../download/fr/Etalage_022012_Prestige_FR.pdf' => 'ETALAGE' 
					);

					$mesFichiersuk = array (
					'../download/uk/tarif_presentoirs_nature_jan_2015_uk.pdf' => 'Display Nature January 2015 Prices List - UK',
					'../download/uk/tarif_marmottes_2015_anglais.pdf' => 'Salesman cases 2015 Prices List - UK',
					'../download/uk/tarif_bijouterie_fev_2015_anglais.pdf' => 'Jewelery Febuary 2015 Prices List - UK',
					'../download/uk/tarif_sacs_et_rubans_janvier_2015_uk.pdf' => 'Dardel\'s Bags and Ribbons January 2015 Prices List - UK',
					'../download/uk/ENGLISH_SALES_CONDITIONS.pdf' => 'SALES CONDITIONS',
					'../download/uk/HORLOA.pdf' => 'TIME PIECES',
					'../download/uk/Displays_022012_Prestige_A.pdf' => 'Displays'
					);

					// retire temporairement : 
if($_SESSION['langue'] == "fr"){
					$monPrecieux = new SeraphicCorpDownloader($mesFichiers);
					if (array_key_exists('WESH', $_POST)){
						$monPrecieux->sendFile($_POST['WESH']);
					}
					echo $monPrecieux->getHTMLForDownloader('../system/downloader.php', 'Details tarifs!', 'WESH', 'Telecharger');

}elseif ($_SESSION['langue'] == "uk") {
					$monPrecieux = new SeraphicCorpDownloader($mesFichiersuk);

					if (array_key_exists('WESH', $_POST)){
						$monPrecieux->sendFile($_POST['WESH']);
					}
					echo $monPrecieux->getHTMLForDownloader('../system/downloader.php', 'Prices list!', 'WESH', 'Download');
}
					?>