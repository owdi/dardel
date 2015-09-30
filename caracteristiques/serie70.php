<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
				<title>Dardel</title>
				<link rel="stylesheet" media="screen" type="text/css" title="css" href="curve_test.css" />
				<script type="text/javascript" src="script/jquery-1.5.2.min.js"></script> 
				<script type="text/javascript" src="script/common.js"></script>
				<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
				
		</head>

	<body>
	
<table class="tab_carac">
<tr><td>Code</td><td>Désignation</td><td>Dimensions intérieures en mm</td></tr>
<tr><td>7062</td><td>Bague fente sur carte</td><td>65 X 65</td></tr>
<tr><td>7063</td><td>Bague fente</td><td>65 X 65</td></tr>
<tr><td>7064</td><td>Bague languette</td><td>65 X 65</td></tr>
<tr><td>7004</td><td>Vide poche</td><td>65 X 65</td></tr>
<tr><td>7005</td><td>Vide poche</td><td>65 X 65</td></tr>
<tr><td>7013</td><td>Clips ou pendants</td><td>65 X 65</td></tr>
<tr><td>7017</td><td>Pendant</td><td>65 X 65</td></tr>
<tr><td>7033</td><td>Bracelet</td><td>220 X 750</td></tr>
<tr><td>7032</td><td>Bracelet</td><td>220 X 60</td></tr>
<tr><td>7009</td><td>Vide poche</td><td>120 X 100</td></tr>
<tr><td>7009/12</td><td>16 Baguesfentes americaines</td><td>120 X 100</td></tr>
<tr><td>7010</td><td>Clips ou pendants</td><td>120 X 100</td></tr>
<tr><td>7011</td><td>Broche</td><td>120 X 100</td></tr>
<tr><td>7034</td><td>Montre Homme en long</td><td>250 X 60</td></tr>
<tr><td>7035</td><td>Bracelet ressort</td><td>120 X 100</td></tr>
<tr><td>7036</td><td>Montre sur bobinot</td><td>105 X 130</td></tr>
<tr><td>7018</td><td>Parure chapelle ss bracelet</td><td>150 X 200</td></tr>
<tr><td>7022</td><td>Parure chapelle complète sans bracelet</td><td>180 X 240</td></tr>
<tr><td>7023/2</td><td>Parure chappelle complète sans bracelet</td><td>220 X 280</td></tr>
<tr><td>7023</td><td>Parure chapelle complète</td><td>220 X 280</td></tr>
<tr><td>7041</td><td>Parure Bande large</td><td>220 X 280 X 65</td></tr>
<tr><td>7024/AJL</td><td>Parure TGM</td><td>260 X 360 X 70</td></tr>
</table>

<script type="text/javascript">
$(document).ready(function(){
						   		   
	//When you click on a link with class of poplight and the href starts with a # 
	$('a.poplight[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Pull Query & Variables from href URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value

		//Fade in the Popup and add close button
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Define margin for center alignment (vertical + horizontal) - we add 80 to the height/width to accomodate for the padding + border width defined in the css
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Apply Margin to Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade in Background
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Close Popups and Fade Layer
	$('a.close, #fade').live('click', function() { //When clicking on the close or fade layer...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //fade them both out
		
		return false;
	});

	
});

</script>

</body>
</html>