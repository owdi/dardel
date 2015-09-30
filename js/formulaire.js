	var RecaptchaOptions = {
    	theme : 'clean'
 	};
/*    function addEvent(element, event, func) 
	{

		if (element.addEventListener) 
		{ // Si notre élément possède la méthode addEventListener()
        element.addEventListener(event, func, false);
		}
		else
		{ // Si notre élément ne possède pas la méthode addEventListener()
        element.attachEvent('on' + event, func);
		}

    }

    var verificateur ='Société \n';
	var verificateur2 ='Activité \n';
	var verificateur3 ='Ville \n';
	var verificateur4 ='E-mail \n';

	
    var formulaire = document.getElementById('formulaire_inscription');
	var champs_societe = document.getElementById('societe');
	var champs_activite = document.getElementById('activite');
	var champs_tel = document.getElementById('tel');
	var champs_email = document.getElementById('email');
	var champs_numero = document.getElementById('numero');
	var champs_rue = document.getElementById('rue');
 	var champs_ville = document.getElementById('ville');
	var champs_zip = document.getElementById('zip');
	var champs_r_achat = document.getElementById('r_achat');
	var champs_siret = document.getElementById('siret');
	var champs_tva = document.getElementById('tva');
	
	var span1 = document.getElementById('comment');
	var span2 = document.getElementById('comment2');
	var span3 = document.getElementById('comment3');
	var span4 = document.getElementById('comment4');
	var span5 = document.getElementById('comment5');
	var span6 = document.getElementById('comment6');
	var span7 = document.getElementById('comment7');
	var span8 = document.getElementById('comment8');
	var span9 = document.getElementById('comment9');
	var span10 = document.getElementById('comment10');
	var span11 = document.getElementById('comment11');
	
	var coche1 = document.getElementById('coche1');
	var coche2 = document.getElementById('coche2');
	var coche3 = document.getElementById('coche3');
	var coche4 = document.getElementById('coche4');
	var coche5 = document.getElementById('coche5');
	var coche6 = document.getElementById('coche6');
	var coche7 = document.getElementById('coche7');
	var coche8 = document.getElementById('coche8');
	var coche9 = document.getElementById('coche9');
	var coche10 = document.getElementById('coche10');
	var coche11 = document.getElementById('coche11');

    
	span1.style.display= 'none';
	span2.style.display= 'none';
	span3.style.display= 'none';
	span4.style.display= 'none';
	span5.style.display= 'none';
	span6.style.display= 'none';
	span7.style.display= 'none';
	span8.style.display= 'none';
	span9.style.display= 'none';
	span10.style.display= 'none';
	span11.style.display= 'none';
	
	coche1.style.display= 'none';
	coche2.style.display= 'none';
	coche3.style.display= 'none';
	coche4.style.display= 'none';
	coche5.style.display= 'none';
	coche6.style.display= 'none';
	coche7.style.display= 'none';
	coche8.style.display= 'none';
	coche9.style.display= 'none';
	coche10.style.display= 'none';
	coche11.style.display= 'none';

   
    addEvent(champs_societe,'keyup',function()
	{
	var test;

      if(champs_societe.value.length < 2 &&  champs_societe.value.length > 0 )
	  {
	  span1.innerHTML="Au moins 2 caractères sont attendus";
	  span1.style.display= 'inline-block';
	  champs_societe.className = 'incorrect';
	  coche1.style.display= 'none';
	  verificateur= 'société\n';
	  
	  
				for(i=0; i<9 ; i++)
				{
				test=champs_societe.value.indexOf(i,0);

					if ( test != -1)
					{
					span1.innerHTML="Seules les lettres sont autorisées";
					span1.style.display= 'inline-block';
					champs_societe.className = 'incorrect form-control';
					coche1.style.display= 'none';
					verificateur= 'société\n';
					break;
					}
					else
					{
					//span1.style.display= 'none';
					verificateur='';					
					}
				}
	  
      }
	    
      else if (champs_societe.value.length >= 2)
	  {
	  span1.style.display= 'none';
	  champs_societe.className = 'correct';
	  coche1.style.display= 'inline-block';
	  verificateur='';
	  
				for(i=0; i<9 ; i++)
				{
				test=champs_societe.value.indexOf(i,0);

					if ( test != -1)
					{
					span1.innerHTML="Seules les lettres sont autorisées";
					span1.style.display= 'inline-block';
					champs_societe.className = 'incorrect';
					coche1.style.display= 'none';
					verificateur= 'société\n';
					break;
					}
					else
					{
					span1.style.display= 'none';
					verificateur='';
					}
				}	  
	  }
	  
	  else
	  {
	  champs_societe.className = 'input_formulaire';
	  span1.style.display= 'none';
	  coche1.style.display= 'none';
	  verificateur= 'société\n';
	  }
	  
    });
    
    
    addEvent(champs_activite,'keyup',function()
	{
      if(champs_activite.value.length < 2 && champs_activite.value.length > 0)
	  {
	  span2.innerHTML="Au moins 2 caractères sont attendus";
	  span2.style.display= 'inline-block';
	  champs_activite.className = 'incorrect';
	  coche2.style.display= 'none';
	  verificateur2 = 'activité \n';
	  
	  				for(i=0; i<9 ; i++)
				{
				test=champs_activite.value.indexOf(i,0);

					if ( test != -1)
					{
					span2.innerHTML="Seules les lettres sont autorisées";
					span2.style.display= 'inline-block';
					champs_activite.className = 'incorrect';
				    coche2.style.display= 'none';
					verificateur2 = 'activité \n';
					break;
					}
					else
					{
					//span2bis.style.display= 'none';
					verificateur2 ='';					
					}
				}
	  }
    
      else if (champs_activite.value.length >= 2)
	  {
	  span2.style.display= 'none';
	  champs_activite.className = 'correct';
	  coche2.style.display= 'inline-block';
	  verificateur2 ='';
	  
	  				for(i=0; i<9 ; i++)
				{
				test=champs_activite.value.indexOf(i,0);

					if ( test != -1)
					{
					span2.innerHTML="Seules les lettres sont autorisées";
					span2.style.display= 'inline-block';
					champs_activite.className = 'incorrect';
					coche2.style.display= 'none';
					verificateur2 = 'activité \n';
					break;
					}
					else
					{
					//span2bis.style.display= 'none';
					verificateur2 ='';
					}
				}
	  }
	  else
	  {
	  champs_activite.className = 'input_formulaire';
	  span2.style.display= 'none';
	  coche2.style.display= 'none';
	  verificateur2 = 'activité \n';
	  }
	  
    });
	
	
	
	    addEvent(champs_r_achat,'keyup',function()
	{
	var test;

      if(champs_r_achat.value.length < 2 &&  champs_r_achat.value.length > 0 )
	  {
	  span9.innerHTML="Au moins 2 caractères sont attendus";
	  span9.style.display= 'inline-block';
	  champs_r_achat.className = 'incorrect';
	  coche9.style.display= 'none';
	  
				for(i=0; i<9 ; i++)
				{
				test=champs_r_achat.value.indexOf(i,0);

					if ( test != -1)
					{
					span9.innerHTML="Seules les lettres sont autorisées";
					span9.style.display= 'inline-block';
					champs_r_achat.className = 'incorrect';
					coche9.style.display= 'none';
					break;
					}
					else
					{
					//span9bis.style.display= 'none';	
					}
				}
	  
      }
	    
      else if (champs_r_achat.value.length >= 2)
	  {
	  span9.style.display= 'none';
	  champs_r_achat.className = 'correct';
	  coche9.style.display= 'inline-block';
	  
				for(i=0; i<9 ; i++)
				{
				test=champs_r_achat.value.indexOf(i,0);

					if ( test != -1)
					{
					span9.innerHTML="Seules les lettres sont autorisées";
					span9.style.display= 'inline-block';
					champs_r_achat.className = 'incorrect';
					coche9.style.display= 'none';
					break;
					}
					else
					{
					span9.style.display= 'none';
					}
				}	  
	  }
	  
	  else
	  {
	  champs_r_achat.className = 'input_formulaire';
	  span9.style.display= 'none';
	  coche9.style.display= 'none';
	  }
	  
    });
    
    
    addEvent(champs_tel,'keyup',function()
	{
	  var myregexpTel = /^[+]?([0-9 ]{1,4})?[0]?[0-9]{1}([ _.-]?[0-9]{2}){4}$/;
	  var resultat;
	  resultat = myregexpTel.test(champs_tel.value);
      if(resultat == true)
	  {
	  span3.style.display= 'none';
	  champs_tel.className = 'correct';
	  coche3.style.display= 'inline-block';
	  }
    
      else if ((champs_tel.value.length > 0) && (resultat == false))
	  {
	  span3.style.display= 'inline-block';
	  champs_tel.className = 'incorrect';
	  coche3.style.display= 'none';
	  }
	  
	  else
	  {
	  champs_tel.className = 'input_formulaire';
	  span3.style.display= 'none';
	  coche3.style.display= 'none';
	  }
	  
    });
    
    
	addEvent(champs_email,'keyup',function()
	{      
	  var regexemail = /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/i;

	  if(regexemail.test(champs_email.value) == true)
	  {
      champs_email.className = 'correct';
	  span4.style.display= 'none';
	  coche4.style.display= 'inline-block';
	  verificateur4 ='';
	  }
	  else if ( (champs_email.value.length > 0) && (regexemail.test(champs_email.value) == false) )
	  {
      span4.style.display= 'inline-block';
	  champs_email.className = 'incorrect';
	  coche4.style.display= 'none';
	  verificateur4 ='E-mail\n';
	  }
	  else
	  {
	  champs_email.className = 'input_formulaire';
	  span4.style.display= 'none';
	  coche4.style.display= 'none';
	  verificateur4 ='E-mail\n';
	  }
	  
    });
	
	
	    addEvent(champs_siret,'keyup',function()
	{
	  var myregexpSiret = /^([ -._]?[0-9]{3}){3}([ -._]?[0-9]{5}){1}$/;
	  var resultat;
	  resultat = myregexpSiret.test(champs_siret.value);
      if(resultat == true)
	  {
	  span10.style.display= 'none';
	  champs_siret.className = 'correct';
	  coche10.style.display= 'inline-block';
	  }
    
      else if ((champs_siret.value.length > 0) && (resultat == false))
	  {
	  span10.style.display= 'inline-block';
	  champs_siret.className = 'incorrect';
	  coche10.style.display= 'none';
	  }
	  
	  else
	  {
	  champs_siret.className = 'input_formulaire';
	  span10.style.display= 'none';
	  coche10.style.display= 'none';
	  }
	  
    });
	
	
  addEvent(champs_tva,'keyup',function()
  {
	var myregexpSiret = /^[a-z]{2}[ _.-]?[0-9 _.-]{8,16}$/i;
	var resultat;
	resultat = myregexpSiret.test(champs_tva.value);
	if(resultat == true)
	{
	span11.style.display= 'none';
	champs_tva.className = 'correct';
	coche11.style.display= 'inline-block';
	}

	else if ((champs_tva.value.length > 0) && (resultat == false))
	{
	span11.style.display= 'inline-block';
	champs_tva.className = 'incorrect';
	coche11.style.display= 'none';
	}
  
	else
	{
	champs_tva.className = 'input_formulaire';
	span11.style.display= 'none';
	coche11.style.display= 'none';
	}
  
  });
	
	
	
	
	addEvent(champs_numero,'keyup',function()
	{
      var myregexpnumero = /^[0-9]{1,4}[ ]?[a-z]{0,3}$/i;
	  if (myregexpnumero.test(champs_numero.value))
	  {
	  champs_numero.className = 'correct';
	  span5.style.display= 'none';
	  coche5.style.display= 'inline-block';
	  }
	  else if ((champs_numero.value.length > 0) && (myregexpnumero.test(champs_numero.value) == false))
	  {
	  champs_numero.className = 'incorrect';
	  span5.style.display= 'inline-block';
	  coche5.style.display= 'none';
	  }
	  else
	  {
	  champs_numero.className= 'input_formulaire';
	  span5.style.display= 'none';
	  coche5.style.display= 'none';
	  }

    });


	addEvent(champs_rue,'keyup',function()
	{
      var myregexprue = /^[a-z -]{2,}$/i;
	  if (myregexprue.test(champs_rue.value))
	  {
	  champs_rue.className = 'correct';
	  span6.style.display= 'none';
	  coche6.style.display= 'inline-block';
	  }
	  else if ((champs_rue.value.length > 0) && (myregexprue.test(champs_rue.value) == false))
	  {
	  champs_rue.className = 'incorrect';
	  span6.style.display= 'inline-block';
	  coche6.style.display= 'none';
	  }
	  else
	  {
	  champs_rue.className= 'input_formulaire';
	  span6.style.display= 'none';
	  coche6.style.display= 'none';
	  }

    });
	
	
	addEvent(champs_ville,'keyup',function()
	{
      var myregexpville = /^[a-z -]{2,}$/i;
	  if (myregexpville.test(champs_ville.value))
	  {
	  champs_ville.className = 'correct';
	  span7.style.display= 'none';
	  coche7.style.display= 'inline-block';
	  verificateur3= '';
	  }
	  else if ((champs_ville.value.length > 0) && (myregexpville.test(champs_ville.value) == false))
	  {
	  champs_ville.className = 'incorrect';
	  span7.style.display= 'inline-block';
	  coche7.style.display= 'none';
	  verificateur3= 'ville \n';
	  }
	  else
	  {
	  champs_ville.className= 'input_formulaire';
	  span7.style.display= 'none';
	  coche7.style.display= 'none';
	  verificateur3= 'ville \n';
	  }

    });

	
	addEvent(champs_zip,'keyup',function()
	{
      var myregexpzip = /^[0-9]{5}$/;
	  if (myregexpzip.test(champs_zip.value))
	  {
	  champs_zip.className = 'correct';
	  span8.style.display= 'none';
	  coche8.style.display= 'inline-block';
	  }
	  else if ((champs_zip.value.length > 0) && (myregexpzip.test(champs_zip.value) == false))
	  {
	  champs_zip.className = 'incorrect';
	  span8.style.display= 'inline-block';
	  coche8.style.display= 'none';
	  }
	  else
	  {
	  champs_zip.className= 'input_formulaire';
	  span8.style.display= 'none';
	  coche8.style.display= 'none';
	  }

    });

    

	addEvent(formulaire,'submit',function(e)
	{
	  if(verificateur + verificateur2 + verificateur3 + verificateur4 == '')
	  {
	   
	  }
	  else
	  {
	  
	  alert("les champs suivants sont incorrects:\n"+ verificateur + verificateur2 + verificateur3 + verificateur4);
	  

		if (e.preventDefault) 
		{
		e.preventDefault();
		}
		else
		{
		e.returnValue = false;
		}
	  }

	});
