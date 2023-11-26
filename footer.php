
			        <!-- copyright-section end -->
	    		</div> <!-- .st-content -->
		    </div> <!-- .st-pusher -->
			
			<!-- OFF CANVAS MENU -->
	    	<div class="offcanvas-menu offcanvas-effect">
	    		<div class="offcanvas-wrap">
			        <div class="off-canvas-header">
			        	<button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
			        </div>
			        <ul id ="offcanvasMenu" class="list-unstyled visible-xs visible-sm">
			            <li class=""><a href="index.php">Accueil<span class="sr-only"></span></a></li>
                        
                        
                        <?php 
                                            if  (isset($_SESSION['login_user'])) { 
                                                
                                                if ($_SESSION['type']=='admin' || $_SESSION['type']=='transporteur'){ ?> 
												<li><a href="abonnement.php">Mes véhicules</a></li>
												<li><a href="http://suivi.telefret.com" target="_blank">Suivi</a></li>
												<li><a href="notifications.php" >Mes Notifications</a></li>
												<li><a href="index-admin.php">Espace Admin</a></li> 
												<li><a href="espace-transporteur.php">Espace Commercial</a></li> 
			
                                       <?php    
                                                }
                                                else if($_SESSION['type']=='client'){ 
                                        ?>
                                        		<li><a href="historique_client.php?telephone=<?php echo $_SESSION['telephone'] ?>" >Mes envois</a></li>												
												<li><a href="espace-client.php">Envoyer un colis </a></li>
												<li><a href="http://suivi.telefret.com" target="_blank">Suivi</a></li>		
												<li><a href="notifications.php" >Mes Notifications</a></li>
												<li><a href="https://wa.me/+237655767535" onclick = "this.href='sendcode.php'">Contactez-Nous</a></li>
                                       <?php        
                                                } 
                                            }                                        
                                        ?>
                       
			        </ul>
                    
			        
				</div>
	      	</div><!-- .offcanvas-menu -->
		</div><!-- /st-container -->


		<!-- Preloader -->
		<div id="preloader">
			<div id="status">
				<div class="status-mes"></div>
			</div>
		</div>

	    <!-- jQuery -->
	    <script src="js/jquery.js"></script>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="js/bootstrap.min.js"></script>
	    <!-- owl.carousel -->
	    <script src="owl.carousel/owl.carousel.min.js"></script>
	    <!-- Magnific-popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Offcanvas Menu -->
		<script src="js/hippo-offcanvas.js"></script>
		<!-- inview -->
		<script src="js/jquery.inview.min.js"></script>
		<!-- stellar -->
		<script src="js/jquery.stellar.js"></script>
		<!-- countTo -->
		<script src="js/jquery.countTo.js"></script>
		<!-- classie -->
		<script src="js/classie.js"></script>
		<!-- selectFx -->
		<script src="js/selectFx.js"></script>
		<!-- sticky kit -->
		<script src="js/jquery.sticky-kit.min.js"></script>
	    <!-- GOGLE MAP -->
	    <script src="https://maps.googleapis.com/maps/api/js"></script>
	    <!--TWITTER FETCHER-->
	    <script src="js/twitterFetcher_min.js"></script>
	    <!-- Custom Script -->
	    <script src="js/scripts.js"></script>

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

		<?php if((!empty($_GET['message'])) or (!empty($_GET['verif']))) { ?>
				
		<script>
		$( document ).ready(function() {
			$('#login.modal').css("display", "block");
			$('#login.modal').attr('class', 'modal fade fond in');
			$('body').css('overflow', 'hidden');
			$('#login.modal .close').click(function(){
				$('#login.modal').css("display", "none");
				$('#login.modal').attr('class', 'modal fade fond');
				$('body').css('overflow', 'unset');
			});
			
			$(document).click(function() {
				$('body').css('overflow', 'unset');
				$('#login.modal').css("display", "none");
				$('#login.modal').attr('class', 'modal fade fond');
			});
			$("#login.modal .modal-content").click(function(event) {
				event.stopPropagation();
			});
		});
		</script>
		<?php } ?>
		
		<?php if((!empty($_GET['success'])) or (!empty($_GET['error'])) or (!empty($_GET['ban'])) or (!empty($_GET['ok'])) ) { ?>
		<script>
		$( document ).ready(function() {
			$('#modifmodal.modal').css("display", "block");
			$('#modifmodal.modal').attr('class', 'modal fade fond in');
			$('body').css('overflow', 'hidden');
			$('#modifmodal.modal .close').click(function(){
				$('#modifmodal.modal').css("display", "none");
				$('#modifmodal.modal').attr('class', 'modal fade fond');
				$('body').css('overflow', 'unset');
			});
			
			$(document).click(function() {
				$('body').css('overflow', 'unset');
				$('#modifmodal.modal').css("display", "none");
				$('#modifmodal.modal').attr('class', 'modal fade fond');
			});
			$("#modifmodal.modal .modal-content").click(function(event) {
				event.stopPropagation();
			});
		});
		</script>
		<?php } ?>

        <script>
            $(document).ready(function() {
                $('input:radio[name=genre]').change(function() {
                    if (this.value == 'particulier') {
                        $("#r_s").remove();
                    }
                    else if (this.value == 'entreprise') {
                        $("#position").append('<input type="text" id="r_s" name="r_s" placeholder="Nom Entreprise">');
                    }
                });
				
				$('input:radio[name=genre2]').change(function() {
                    if (this.value == 'particulier') {
                        $("#raison").remove();
                    }
                    else if (this.value == 'entreprise') {
                        $("#position2").append('<div id="raison"><div class="col-md-2 col-xs-12  left-title ">Raison Sociale :</div><div class="col-md-8 no-padding"><input id="r_s2" name="r_s" type="text" class="form-control" required></div></div>');
                    }
                });
            });
        </script>
        
        <!-- Aziz -->
        
        <script>
            $(document).ready(function() {
  $('input[name=content_type]').on('change', function() {
    var n = $(this).val();
    
    switch (n) {
      case '1':
        $('#show').html("<select type='text' name='indicatif' id='pays1' required onchange='changePays(1)'><option value='00237'  no-repeat; width:30px; height:30px;' selected>Cameroun</option><option value='Congo' no-repeat; width:30px; height:30px;'>Congo</option><option value='Gabon'  no-repeat; width:30px; height:30px;'>Gabon</option><option value='Tchad' no-repeat; width:30px; height:30px;'>Tchad</option><option value='République centrafricaine'  no-repeat; width:30px; height:30px;'>République centrafricaine</option><option value='Guinée équatoriale'  no-repeat; width:30px; height:30px;'>Guinée équatoriale</option><option value='00216' no-repeat; width:30px; height:30px;'>Tunisie</option></select></div><input type='text' id='telephone' name='telephone' placeholder='Numéro de Téléphone sans indicatif *' required></div> ");
        break;
      case '2':
        $('#show').html("<input type='text' id='user' name='user' placeholder='Email *' required>");
        break;
      case '3':
        $('#show').html("3rd radio button");
        break;
    }
  });
});

        </script>
          <!-- Aziz -->
        
		<script>
            function messaffect(a) {
                var a=document.getElementById("mail"+a).value ;
                document.getElementById("mailmsg").value=a ;
            }
        </script>
		
		<script>
            function modiftook() {
				$( "input#nom" ).prop( "disabled", false );
				$( "input#prenom" ).prop( "disabled", false );
				$( "input#adresse" ).prop( "disabled", false );
				$( "input#r_s2" ).prop( "disabled", false );
				$( "select#pays_p" ).prop( "disabled", false );
				$( "input#email" ).prop( "disabled", false );
				
				$( "#modif" ).css("display", "none");
				$( "#oksub" ).css("display", "block");
            }
        </script>
        
		<script>
            function contactPerson() {
				  // Get the checkbox
				var checkBox = document.getElementById("contactPersonX");
				// Get the output text
				// var text = document.getElementById("meNot");
				// If the checkbox is checked, display the output text
				var contact_name = document.getElementById("contact_name");
				var contact_phone = document.getElementById("contact_phone");

				if (checkBox.checked == false){
					// text.style.display = "block";
					contact_name.value = "";
					contact_phone.value = "";				
				
				} 
				else {
					// text.style.display = "none";
					contact_name.value = "<?php echo $_SESSION['nom']; ?>";
					contact_phone.value = "<?php echo $_SESSION['telephone']; ?>";				
				
				}
            }
			function contactPerson1() {
				  // Get the checkbox
				var checkBox = document.getElementById("contactPersonX1");
				// Get the output text
				// var text = document.getElementById("meNot");
				// If the checkbox is checked, display the output text
				var contact_name = document.getElementById("name_expediteur");
				var contact_phone = document.getElementById("telephone_expediteur");

				if (checkBox.checked == false){
					// text.style.display = "block";
					contact_name.value = "";
					contact_phone.value = "";
				} 
				else {
					// text.style.display = "none";
					contact_name.value = "<?php echo $_SESSION['nom']; ?>";
					contact_phone.value = "<?php echo $_SESSION['telephone']; ?>";				
				}
            }
			
			function activate() {
				  // Get the checkbox
					  // Get the checkbox
					  var checkBox = document.getElementById("myonoffswitch88");
				// Get the output text
				var text = document.getElementById("prixprop");
				var prixpropdetails = document.getElementById("prixpropdetails");
				console.log("okprixpropdetailsprixpropdetailsprixpropdetails")

				// If the checkbox is checked, display the output text
				if (checkBox.checked == true){
				text.style.display = "block";
				prixpropdetails.style.display = "block";

				} else {
				text.style.display = "none";
				prixpropdetails.style.display = "none";

				}
            }
			
			function activate2() {
				  // Get the checkbox
				var checkBox = document.getElementById("myonoffswitch10");
				// Get the output text
				var text = document.getElementById("nbjr");

				// If the checkbox is checked, display the output text
				if (checkBox.checked == true){
				text.style.display = "block";
				} else {
				text.style.display = "none";
				}
            }

			function activate3() {
				  // Get the checkbox
				var checkBox = document.getElementById("myonoffswitch");
				// Get the output text
				var text = document.getElementById("nbjr2");

				// If the checkbox is checked, display the output text
				if (checkBox.checked == true){
				text.style.display = "block";
				} else {
				text.style.display = "none";
				}
            }
			
			function activate4() {
				  // Get the checkbox
				var checkBox = document.getElementById("myonoffswitch22");
				// Get the output text
				var text = document.getElementById("valeurm");

				// If the checkbox is checked, display the output text
				if (checkBox.checked == true){
				text.style.display = "block";
				} else {
				text.style.display = "none";
				}
            }
			
			function indicatife() {
				  // Get the checkbox
				var indicatif = document.getElementById("indicatif");
				// Get the output text
				var phone = document.getElementById("phone");
				
				var varind = indicatif.value;
				var varphone = phone.value;
				
				var aux = varphone.split('  ');
				var val = aux[1];
				
				
				phone.value='+ '+varind+'  '+val;
            }
        </script>
        

        <script>
            
            function PrintElem(elem){
                var mywindow = window.open('', 'PRINT', 'height=400,width=600');

                mywindow.document.write('<html><head><title>' + document.title  + '</title>');
                mywindow.document.write('</head><body >');
                mywindow.document.write('<h1>' + document.title  + '</h1>');
                mywindow.document.write(document.getElementById(elem).innerHTML);
                mywindow.document.write('</body></html>');

                mywindow.document.close(); // necessary for IE >= 10
                mywindow.focus(); // necessary for IE >= 10*/

                mywindow.print();
                mywindow.close();

                return true;
            }
        </script>

        <script>

			function changePays(a) {
				select = document.getElementById("pays"+a);
				tel = document.getElementById("tel");
				select_s =select.style;
				console.log("selectselectselectselect",select.value)

				var availableTags = [ "Douala", "Yaounde", "Garoua", "Bamenda", "Maroua", "Nkongsamba", "Bafoussam", "Ngaoundere", "Bertoua", "Loum", "Kumba", "Edea", "Kumbo", "Foumban", "Mbouda", "Dschang", "Limbe", "Ebolowa", "Kousseri", "Guider", "Meiganga", "Mbalmayo", "Bafang", "Tiko", "Bafia", "Wum", "Kribi", "Buea", "Sangmelima", "Foumbot", "Bangangte", "Batouri", "Banyo", "Nkambe", "Bali", "Mbanga", "Mokolo", "Melong", "Manjo", "Garoua-Boulaï", "Mora", "Kaele", "Tibati", "Ndop", "Akonolinga", "Eseka", "Mamfe", "Obala", "Muyuka", "Nanga-Eboko", "Abong-Mbang", "Fundong", "Nkoteng", "Fontem", "Mbandjock", "Touboro", "Ngaoundal", "Yokadouma", "Pitoa", "Tombel", "Kekem", "Magba", "Belabo", "Tonga", "Maga", "Koutaba", "Blangoua", "Guidiguis", "Bogo", "Batibo", "Yabassi", "Figuil", "Makenene", "Gazawa", "Tchollire"];                
					
					
				var availableTags1 = [ "Brazzaville", "Pointe-Noire", "Dolisie", "Nkayi", "Loandjili", "Ouesso", "Madingou", "Owando", "Gamboma", "Impfondo", "Sibiti", "Mossendjo", "Ngamaba-Mfilou", "Kinkala", "Makoua"];
					
					
					
				var availableTags2 = [ "Libreville", "Port-Gentil", "Franceville", "Oyem", "Moanda", "Mouila", "Lambarene", "Tchibanga", "Koulamoutou", "Makokou", "Bitam", "Tsogni", "Gamba", "Mounana", "Ntoum", "Nkan", "Lastourville", "Okondja", "Ndende", "Booue", "Fougamou", "Ndjole", "Mbigou", "Mayumba", "Mitzic", "Mekambo", "Lekoni", "Mimongo", "Minvoul", "Medouneu", "Omboue", "Cocobeach", "Kango" ];
					
	   
					
				var availableTags3 = [ "NDjamena", "Moundou", "Sarh", "Abeche", "Faya-Largeau", "Koumra", "Kelo", "Mongo", "Pala", "Am Timan", "Ati", "Bongor", "Doba", "Mao", "Oum Hadjer", "Moussoro", "Bitkine", "Biltine", "Massaguet", "Dourbali", "Laï", "Lere", "Kyabe", "Massakory", "Bokoro", "Bousso", "Benoye", "Adre", "Ngama", "Bere", "Fianga", "Bol", "Moïssala", "Guelendeng", "Goundi", "Gounou Gaya", "Baïbokoum", "Aozou", "Beinamar", "Melfi", "Beboto", "Massenya" ];
					
							
					
				var availableTags4 = [ "Bangui", "Bimbo" , "Berberati" , "Carnot" , "Bambari" , "Bouar" , "Bria" , "Bossangoa" , "Nola" , "Bangassou" , "Boda" , "Sibut" , "Kaga-Bandoro" , "Mbaiki" , "Bozoum" , "Batangafo" , "Paoua" , "Ippy" , "Bocaranga" , "Kabo" , "Alindao" , "Yaloke" , "Baoro" , "Gamboula" , "Ndele" , "Dekoa" , "Bouca" , "Grimari" , "Bossembele" , "Kembe" , "Zemio" , "Mobaye" , "Kouango" , "Baboua" , "Damara" , "Birao", "Obo" ];
					
					
					
				var availableTags5 = [ "Bata", "Malabo", "Ebebiyín", "Aconibe", "Añisoc", "Luba", "Evinayong", "Mongomo", "Mengomeyen", "Mikomeseng", "Rebola", "Bidjabidjan", "Niefang", "Cogo", "Nsok", "San Antonio de Pale", "Mbini", "Nsork", "Ayene", "Nkimi", "Machinda", "Acurenam", "Corisco", "Baney", "Bicurga", "Nsang" ];
					
				
				switch(select.value) {
						

					case "Cameroun":
					select_s.backgroundImage = "url('./img/flags/cameroon.svg')";
					select_s.backgroundRepeat = "no-repeat";
					select_s.backgroundSize = "25px";
					select_s.backgroundColor= "#eeecec";
					select_s.backgroundPosition= "8px 7px";
					select_s.paddingLeft= "35px";
					tel.value="00237";
					tel.pattern="00237[0-9]{9}";
						
					$( "#tag"+a).autocomplete({
						
							source: availableTags
					});			
						
					break;

					case "Senegal":
					select_s.backgroundImage = "url('./img/flags/senegal.jpg')";
					select_s.backgroundRepeat = "no-repeat";
					select_s.backgroundSize = "25px";
					select_s.backgroundColor= "#eeecec";
					select_s.backgroundPosition= "8px 7px";
					select_s.paddingLeft= "35px";
					tel.value="00237";
					tel.pattern="00237[0-9]{9}";
						
					$( "#tag"+a).autocomplete({
						
							source: availableTags
					});				
						
					break;

					case "Côte d'Ivoire":
					select_s.backgroundImage = "url('./img/flags/ivoire.png')";
					select_s.backgroundRepeat = "no-repeat";
					select_s.backgroundSize = "25px";
					select_s.backgroundColor= "#eeecec";
					select_s.backgroundPosition= "8px 7px";
					select_s.paddingLeft= "35px";
					tel.value="00237";
					tel.pattern="00237[0-9]{9}";
						
					$( "#tag"+a).autocomplete({
						
							source: availableTags
					});				
						
					break;

					case "Togo":
					select_s.backgroundImage = "url('./img/flags/togo.png')";
					select_s.backgroundRepeat = "no-repeat";
					select_s.backgroundSize = "25px";
					select_s.backgroundColor= "#eeecec";
					select_s.backgroundPosition= "8px 7px";
					select_s.paddingLeft= "35px";
					tel.value="00237";
					tel.pattern="00237[0-9]{9}";
						
					$( "#tag"+a).autocomplete({
						
							source: availableTags
					});				
						
					break;

					case "Congo(R)" :
					select_s.backgroundImage = "url('./img/flags/congo.svg')";
					select_s.backgroundRepeat = "no-repeat";
					select_s.backgroundSize = "25px";
					select_s.backgroundColor= "#eeecec";
					select_s.backgroundPosition= "8px 7px";
					select_s.paddingLeft= "35px";
					tel.value="00242";
					tel.pattern="00242[0-9]{9}";
						
					$( "#tag"+a).autocomplete({
						
							source: availableTags1
					});

						
					break;
						
						

					case "Gabon" :
					select_s.backgroundImage = "url('./img/flags/gabon.svg')";
					select_s.backgroundRepeat = "no-repeat";
					select_s.backgroundSize = "25px";
					select_s.backgroundColor= "#eeecec";
					select_s.backgroundPosition= "8px 7px";
					select_s.paddingLeft= "35px";
					tel.value="00241";
					tel.pattern="00241[0-9]{8}";
						
					$( "#tag"+a).autocomplete({
						
							source: availableTags2
					});

						
					break;

					case "Tchad" :
					select_s.backgroundImage = "url('./img/flags/chad.svg')";
					select_s.backgroundRepeat = "no-repeat";
					select_s.backgroundSize = "25px";
					select_s.backgroundColor= "#eeecec";
					select_s.backgroundPosition= "8px 7px";
					select_s.paddingLeft= "35px";
					tel.value="00235";
					tel.pattern="00235[0-9]{8}";
				
					$( "#tag"+a).autocomplete({
						
							source: availableTags3
					});

						
					break;

					case "République centrafricaine" :
					select_s.backgroundImage = "url('./img/flags/central-african-republic.svg')";
					select_s.backgroundRepeat = "no-repeat";
					select_s.backgroundSize = "25px";
					select_s.backgroundColor= "#eeecec";
					select_s.backgroundPosition= "8px 7px";
					select_s.paddingLeft= "35px";
					tel.value="00236";
					tel.pattern="00236[0-9]{8}";
						
					   $( "#tag"+a).autocomplete({
						
							source: availableTags4
					});

						
					break;

					case "Guinée équatoriale" :
					select_s.backgroundImage = "url('./img/flags/equatorial-guinea.svg')";
					select_s.backgroundRepeat = "no-repeat";
					select_s.backgroundSize = "25px";
					select_s.backgroundColor= "#eeecec";
					select_s.backgroundPosition= "8px 7px";
					select_s.paddingLeft= "35px";
					tel.value="00240";
					tel.pattern="00240[0-9]{9}";
						
					$( "#tag"+a).autocomplete({
						
							source: availableTags5
					});

						
					break;
					
					case 6 :
					select_s.backgroundImage = "";
					select_s.backgroundRepeat = "no-repeat";
					select_s.backgroundSize = "25px";
					select_s.backgroundColor= "#eeecec";
					select_s.backgroundPosition= "8px 7px";
					select_s.paddingLeft= "10px";
					tel.pattern="00237[0-9]{9}";
					select_s.value="";
					tel.value="";
				}
            }                   
        </script>
		
		<script type="text/javascript">
			window.jssor_1_slider_init = function() {

				var jssor_1_SlideshowTransitions = [
				  {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
				  {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
				];

				var jssor_1_options = {
				  $AutoPlay: 1,
				  $SlideshowOptions: {
					$Class: $JssorSlideshowRunner$,
					$Transitions: jssor_1_SlideshowTransitions,
					$TransitionsOrder: 1
				  },
				  $ArrowNavigatorOptions: {
					$Class: $JssorArrowNavigator$
				  },
				  $ThumbnailNavigatorOptions: {
					$Class: $JssorThumbnailNavigator$,
					$Orientation: 2,
					$NoDrag: true
				  }
				};

				var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

				/*#region responsive code begin*/

				var MAX_WIDTH = 2000;

				function ScaleSlider() {
					var containerElement = jssor_1_slider.$Elmt.parentNode;
					var containerWidth = containerElement.clientWidth;

					if (containerWidth) {

						var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

						jssor_1_slider.$ScaleWidth(expectedWidth);
					}
					else {
						window.setTimeout(ScaleSlider, 30);
					}
				}

				ScaleSlider();

				$Jssor$.$AddEvent(window, "load", ScaleSlider);
				$Jssor$.$AddEvent(window, "resize", ScaleSlider);
				$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
				/*#endregion responsive code end*/
			};
		</script>
		<!-- -->
		<script type="text/javascript">jssor_1_slider_init();
		</script>
		<!-- liste deroulante pour le camion -->
	<script>
var VehiculesByPoid = {
    Fourgon: ["2 Tonnes", "3 Tonnes", "5 Tonnes", "8 Tonnes","10 Tonnes","15 Tonnes","20 Tonnes","24 Tonnes","27 Tonnes","30 Tonnes"],
    plateau: ["20 Tonnes", "27 Tonnes", "30 Tonnes", "32 Tonnes"],
    Benne: ["7 Tonnes", "15 Tonnes", "20 Tonnes", "30 Tonnes", "35 Tonnes"],
    carrosserie: ["3 Tonnes", "5 Tonnes", "7 Tonnes", "12 Tonnes", "15 Tonnes","20 Tonnes","27 Tonnes","30 Tonnes"],
    frigorifique: ["7 Tonnes", "15 Tonnes", "20 Tonnes", "30 Tonnes", "35 Tonnes"],
    citerne: ["10000 Litres","20000 Litres","33000 Litres"],
    portechar: ["30 - 35 Tonnes", "35 - 40 Tonnes", "40 - 45 Tonnes", "45 - 50 Tonnes"]
}

    function changecat(value) {
        if (value.length == 0) document.getElementById("Poid").innerHTML = "<option></option>";
        else {
            var catOptions = "";
            for (PoidId in VehiculesByPoid[value]) {
                catOptions += "<option>" + VehiculesByPoid[value][PoidId] + "</option>";
            }
            document.getElementById("Poid").innerHTML = catOptions;
        }
    }

</script>
<script type="text/javascript">
  $(document).ready(function(){	

	$("#pays2").on('change', function(ret) {  
         console.log(ret.target.value)
		 changePaysD(ret.target.value)
    });
	
	$("#pays3").on('change', function(ret) {  
         console.log(ret.target.value)
		 changePaysA(ret.target.value)
    });

	$("#pays21").on('change', function(ret) {  
         console.log(ret.target.value)
		 changePaysD1(ret.target.value)
    });
	
	$("#pays31").on('change', function(ret) {  
         console.log(ret.target.value)
		 changePaysA3(ret.target.value)
    });

	$("#pays4").on('change', function(ret) {  
         console.log(ret.target.value)
		 changePaysA1(ret.target.value)
    });
	changePaysA1(0);
	$("#pays5").on('change', function(ret) {  
         console.log(ret.target.value)
		 changePaysA2(ret.target.value)
    });
	changePaysA2(0);
  });
</script>


<script>
	function changePaysA2(a) {
		select = document.getElementById("pays5");
		//tel = document.getElementById("tel");
		select_s =select.style;
		console.log("selectselectselectselect",select.value)

		var availableTags = [ "Douala", "Yaounde", "Garoua", "Bamenda", "Maroua", "Nkongsamba", "Bafoussam", "Ngaoundere", "Bertoua", "Loum", "Kumba", "Edea", "Kumbo", "Foumban", "Mbouda", "Dschang", "Limbe", "Ebolowa", "Kousseri", "Guider", "Meiganga", "Mbalmayo", "Bafang", "Tiko", "Bafia", "Wum", "Kribi", "Buea", "Sangmelima", "Foumbot", "Bangangte", "Batouri", "Banyo", "Nkambe", "Bali", "Mbanga", "Mokolo", "Melong", "Manjo", "Garoua-Boulaï", "Mora", "Kaele", "Tibati", "Ndop", "Akonolinga", "Eseka", "Mamfe", "Obala", "Muyuka", "Nanga-Eboko", "Abong-Mbang", "Fundong", "Nkoteng", "Fontem", "Mbandjock", "Touboro", "Ngaoundal", "Yokadouma", "Pitoa", "Tombel", "Kekem", "Magba", "Belabo", "Tonga", "Maga", "Koutaba", "Blangoua", "Guidiguis", "Bogo", "Batibo", "Yabassi", "Figuil", "Makenene", "Gazawa", "Tchollire"];                
			
			
		var availableTags1 = [ "Brazzaville", "Pointe-Noire", "Dolisie", "Nkayi", "Loandjili", "Ouesso", "Madingou", "Owando", "Gamboma", "Impfondo", "Sibiti", "Mossendjo", "Ngamaba-Mfilou", "Kinkala", "Makoua"];
			
			
			
		var availableTags2 = [ "Libreville", "Port-Gentil", "Franceville", "Oyem", "Moanda", "Mouila", "Lambarene", "Tchibanga", "Koulamoutou", "Makokou", "Bitam", "Tsogni", "Gamba", "Mounana", "Ntoum", "Nkan", "Lastourville", "Okondja", "Ndende", "Booue", "Fougamou", "Ndjole", "Mbigou", "Mayumba", "Mitzic", "Mekambo", "Lekoni", "Mimongo", "Minvoul", "Medouneu", "Omboue", "Cocobeach", "Kango" ];
			

			
		var availableTags3 = [ "NDjamena", "Moundou", "Sarh", "Abeche", "Faya-Largeau", "Koumra", "Kelo", "Mongo", "Pala", "Am Timan", "Ati", "Bongor", "Doba", "Mao", "Oum Hadjer", "Moussoro", "Bitkine", "Biltine", "Massaguet", "Dourbali", "Laï", "Lere", "Kyabe", "Massakory", "Bokoro", "Bousso", "Benoye", "Adre", "Ngama", "Bere", "Fianga", "Bol", "Moïssala", "Guelendeng", "Goundi", "Gounou Gaya", "Baïbokoum", "Aozou", "Beinamar", "Melfi", "Beboto", "Massenya" ];
			
					
			
		var availableTags4 = [ "Bangui", "Bimbo" , "Berberati" , "Carnot" , "Bambari" , "Bouar" , "Bria" , "Bossangoa" , "Nola" , "Bangassou" , "Boda" , "Sibut" , "Kaga-Bandoro" , "Mbaiki" , "Bozoum" , "Batangafo" , "Paoua" , "Ippy" , "Bocaranga" , "Kabo" , "Alindao" , "Yaloke" , "Baoro" , "Gamboula" , "Ndele" , "Dekoa" , "Bouca" , "Grimari" , "Bossembele" , "Kembe" , "Zemio" , "Mobaye" , "Kouango" , "Baboua" , "Damara" , "Birao", "Obo" ];
			
			
			
		var availableTags5 = [ "Bata", "Malabo", "Ebebiyín", "Aconibe", "Añisoc", "Luba", "Evinayong", "Mongomo", "Mengomeyen", "Mikomeseng", "Rebola", "Bidjabidjan", "Niefang", "Cogo", "Nsok", "San Antonio de Pale", "Mbini", "Nsork", "Ayene", "Nkimi", "Machinda", "Acurenam", "Corisco", "Baney", "Bicurga", "Nsang" ];
			
		
		switch(select.value) {

			case "Cameroun":
			
			select_s.backgroundImage = "url('./img/flags/cameroon.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00237";
			//tel.pattern="00237[0-9]{9}";
				
			$( "#ville5").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});		
				
			break;

			case "Côte d'Ivoire":
			
			select_s.backgroundImage = "url('./img/flags/ivoire.png')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00237";
			//tel.pattern="00237[0-9]{9}";
				
			$( "#ville5").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});		
				
			break;

			case "Togo":
			
			select_s.backgroundImage = "url('./img/flags/togo.png')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00237";
			//tel.pattern="00237[0-9]{9}";
				
			$( "#ville5").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});		
				
			break;

			case "Senegal":
			select_s.backgroundImage = "url('./img/flags/senegal.jpg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00242";
			//tel.pattern="00242[0-9]{9}";
				
			$( "#ville5").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags1.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;
			
			case "Congo(R)" :
			select_s.backgroundImage = "url('./img/flags/congo.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00242";
			//tel.pattern="00242[0-9]{9}";
				
			$( "#ville5").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags1.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;
				

			case "Gabon" :
			select_s.backgroundImage = "url('./img/flags/gabon.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00241";
			//tel.pattern="00241[0-9]{8}";
				
			$( "#ville5").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags2.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;

			case "Tchad" :
			select_s.backgroundImage = "url('./img/flags/chad.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00235";
			//tel.pattern="00235[0-9]{8}";
		
			$( "#ville5").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags3.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;

			case "République centrafricaine" :
			select_s.backgroundImage = "url('./img/flags/central-african-republic.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00236";
			//tel.pattern="00236[0-9]{8}";
				
			   $( "#ville5").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags4
			});

				
			break;

			case "Guinée équatoriale" :
			select_s.backgroundImage = "url('./img/flags/equatorial-guinea.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00240";
			//tel.pattern="00240[0-9]{9}";
				
			$( "#ville5").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags5.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;
		
		}
	}  
	function changePaysA1(a) {
		select = document.getElementById("pays4");
		//tel = document.getElementById("tel");
		select_s =select.style;
		console.log("selectselectselectselect",select.value)

		var availableTags = [ "Douala", "Yaounde", "Garoua", "Bamenda", "Maroua", "Nkongsamba", "Bafoussam", "Ngaoundere", "Bertoua", "Loum", "Kumba", "Edea", "Kumbo", "Foumban", "Mbouda", "Dschang", "Limbe", "Ebolowa", "Kousseri", "Guider", "Meiganga", "Mbalmayo", "Bafang", "Tiko", "Bafia", "Wum", "Kribi", "Buea", "Sangmelima", "Foumbot", "Bangangte", "Batouri", "Banyo", "Nkambe", "Bali", "Mbanga", "Mokolo", "Melong", "Manjo", "Garoua-Boulaï", "Mora", "Kaele", "Tibati", "Ndop", "Akonolinga", "Eseka", "Mamfe", "Obala", "Muyuka", "Nanga-Eboko", "Abong-Mbang", "Fundong", "Nkoteng", "Fontem", "Mbandjock", "Touboro", "Ngaoundal", "Yokadouma", "Pitoa", "Tombel", "Kekem", "Magba", "Belabo", "Tonga", "Maga", "Koutaba", "Blangoua", "Guidiguis", "Bogo", "Batibo", "Yabassi", "Figuil", "Makenene", "Gazawa", "Tchollire"];                
			
			
		var availableTags1 = [ "Brazzaville", "Pointe-Noire", "Dolisie", "Nkayi", "Loandjili", "Ouesso", "Madingou", "Owando", "Gamboma", "Impfondo", "Sibiti", "Mossendjo", "Ngamaba-Mfilou", "Kinkala", "Makoua"];
			
			
			
		var availableTags2 = [ "Libreville", "Port-Gentil", "Franceville", "Oyem", "Moanda", "Mouila", "Lambarene", "Tchibanga", "Koulamoutou", "Makokou", "Bitam", "Tsogni", "Gamba", "Mounana", "Ntoum", "Nkan", "Lastourville", "Okondja", "Ndende", "Booue", "Fougamou", "Ndjole", "Mbigou", "Mayumba", "Mitzic", "Mekambo", "Lekoni", "Mimongo", "Minvoul", "Medouneu", "Omboue", "Cocobeach", "Kango" ];
			

			
		var availableTags3 = [ "NDjamena", "Moundou", "Sarh", "Abeche", "Faya-Largeau", "Koumra", "Kelo", "Mongo", "Pala", "Am Timan", "Ati", "Bongor", "Doba", "Mao", "Oum Hadjer", "Moussoro", "Bitkine", "Biltine", "Massaguet", "Dourbali", "Laï", "Lere", "Kyabe", "Massakory", "Bokoro", "Bousso", "Benoye", "Adre", "Ngama", "Bere", "Fianga", "Bol", "Moïssala", "Guelendeng", "Goundi", "Gounou Gaya", "Baïbokoum", "Aozou", "Beinamar", "Melfi", "Beboto", "Massenya" ];
			
					
			
		var availableTags4 = [ "Bangui", "Bimbo" , "Berberati" , "Carnot" , "Bambari" , "Bouar" , "Bria" , "Bossangoa" , "Nola" , "Bangassou" , "Boda" , "Sibut" , "Kaga-Bandoro" , "Mbaiki" , "Bozoum" , "Batangafo" , "Paoua" , "Ippy" , "Bocaranga" , "Kabo" , "Alindao" , "Yaloke" , "Baoro" , "Gamboula" , "Ndele" , "Dekoa" , "Bouca" , "Grimari" , "Bossembele" , "Kembe" , "Zemio" , "Mobaye" , "Kouango" , "Baboua" , "Damara" , "Birao", "Obo" ];
			
			
			
		var availableTags5 = [ "Bata", "Malabo", "Ebebiyín", "Aconibe", "Añisoc", "Luba", "Evinayong", "Mongomo", "Mengomeyen", "Mikomeseng", "Rebola", "Bidjabidjan", "Niefang", "Cogo", "Nsok", "San Antonio de Pale", "Mbini", "Nsork", "Ayene", "Nkimi", "Machinda", "Acurenam", "Corisco", "Baney", "Bicurga", "Nsang" ];
			
		
		switch(select.value) {

			case "Cameroun":
			
			select_s.backgroundImage = "url('./img/flags/cameroon.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00237";
			//tel.pattern="00237[0-9]{9}";
				
			$( "#ville4").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});			
				
			break;

			case "Senegal":
			
			select_s.backgroundImage = "url('./img/flags/senegal.jpg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00237";
			//tel.pattern="00237[0-9]{9}";
				
			$( "#ville4").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});			
				
			break;

			case "Côte d'Ivoire":
			
			select_s.backgroundImage = "url('./img/flags/ivoire.png')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00237";
			//tel.pattern="00237[0-9]{9}";
				
			$( "#ville4").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});			
				
			break;

			case "Togo":
			
			select_s.backgroundImage = "url('./img/flags/togo.png')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00237";
			//tel.pattern="00237[0-9]{9}";
				
			$( "#ville4").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});			
				
			break;

			
			case "Congo(R)" :
			select_s.backgroundImage = "url('./img/flags/congo.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00242";
			//tel.pattern="00242[0-9]{9}";
				
			$( "#ville4").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags1.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;
				
				

			case "Gabon" :
			select_s.backgroundImage = "url('./img/flags/gabon.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00241";
			//tel.pattern="00241[0-9]{8}";
				
			$( "#ville4").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags2.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;

			case "Tchad" :
			select_s.backgroundImage = "url('./img/flags/chad.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00235";
			//tel.pattern="00235[0-9]{8}";
		
			$( "#ville4").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags3.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;

			case "République centrafricaine" :
			select_s.backgroundImage = "url('./img/flags/central-african-republic.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00236";
			//tel.pattern="00236[0-9]{8}";
				
			   $( "#ville4").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags4
			});

				
			break;

			case "Guinée équatoriale" :
			select_s.backgroundImage = "url('./img/flags/equatorial-guinea.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00240";
			//tel.pattern="00240[0-9]{9}";
				
			$( "#ville4").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags5.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;
		
		}
	}                   
</script>
<script>

	function changePaysA(a) {
		select = document.getElementById("pays3");
		//tel = document.getElementById("tel");
		select_s =select.style;
			console.log("selectselectselectselect",select.value)
		var availableTags = [ "Douala", "Yaounde", "Garoua", "Bamenda", "Maroua", "Nkongsamba", "Bafoussam", "Ngaoundere", "Bertoua", "Loum", "Kumba", "Edea", "Kumbo", "Foumban", "Mbouda", "Dschang", "Limbe", "Ebolowa", "Kousseri", "Guider", "Meiganga", "Mbalmayo", "Bafang", "Tiko", "Bafia", "Wum", "Kribi", "Buea", "Sangmelima", "Foumbot", "Bangangte", "Batouri", "Banyo", "Nkambe", "Bali", "Mbanga", "Mokolo", "Melong", "Manjo", "Garoua-Boulaï", "Mora", "Kaele", "Tibati", "Ndop", "Akonolinga", "Eseka", "Mamfe", "Obala", "Muyuka", "Nanga-Eboko", "Abong-Mbang", "Fundong", "Nkoteng", "Fontem", "Mbandjock", "Touboro", "Ngaoundal", "Yokadouma", "Pitoa", "Tombel", "Kekem", "Magba", "Belabo", "Tonga", "Maga", "Koutaba", "Blangoua", "Guidiguis", "Bogo", "Batibo", "Yabassi", "Figuil", "Makenene", "Gazawa", "Tchollire"];                
			
			
		var availableTags1 = [ "Brazzaville", "Pointe-Noire", "Dolisie", "Nkayi", "Loandjili", "Ouesso", "Madingou", "Owando", "Gamboma", "Impfondo", "Sibiti", "Mossendjo", "Ngamaba-Mfilou", "Kinkala", "Makoua"];
			
			
			
		var availableTags2 = [ "Libreville", "Port-Gentil", "Franceville", "Oyem", "Moanda", "Mouila", "Lambarene", "Tchibanga", "Koulamoutou", "Makokou", "Bitam", "Tsogni", "Gamba", "Mounana", "Ntoum", "Nkan", "Lastourville", "Okondja", "Ndende", "Booue", "Fougamou", "Ndjole", "Mbigou", "Mayumba", "Mitzic", "Mekambo", "Lekoni", "Mimongo", "Minvoul", "Medouneu", "Omboue", "Cocobeach", "Kango" ];
			

			
		var availableTags3 = [ "NDjamena", "Moundou", "Sarh", "Abeche", "Faya-Largeau", "Koumra", "Kelo", "Mongo", "Pala", "Am Timan", "Ati", "Bongor", "Doba", "Mao", "Oum Hadjer", "Moussoro", "Bitkine", "Biltine", "Massaguet", "Dourbali", "Laï", "Lere", "Kyabe", "Massakory", "Bokoro", "Bousso", "Benoye", "Adre", "Ngama", "Bere", "Fianga", "Bol", "Moïssala", "Guelendeng", "Goundi", "Gounou Gaya", "Baïbokoum", "Aozou", "Beinamar", "Melfi", "Beboto", "Massenya" ];
			
					
			
		var availableTags4 = [ "Bangui", "Bimbo" , "Berberati" , "Carnot" , "Bambari" , "Bouar" , "Bria" , "Bossangoa" , "Nola" , "Bangassou" , "Boda" , "Sibut" , "Kaga-Bandoro" , "Mbaiki" , "Bozoum" , "Batangafo" , "Paoua" , "Ippy" , "Bocaranga" , "Kabo" , "Alindao" , "Yaloke" , "Baoro" , "Gamboula" , "Ndele" , "Dekoa" , "Bouca" , "Grimari" , "Bossembele" , "Kembe" , "Zemio" , "Mobaye" , "Kouango" , "Baboua" , "Damara" , "Birao", "Obo" ];
			
			
			
		var availableTags5 = [ "Bata", "Malabo", "Ebebiyín", "Aconibe", "Añisoc", "Luba", "Evinayong", "Mongomo", "Mengomeyen", "Mikomeseng", "Rebola", "Bidjabidjan", "Niefang", "Cogo", "Nsok", "San Antonio de Pale", "Mbini", "Nsork", "Ayene", "Nkimi", "Machinda", "Acurenam", "Corisco", "Baney", "Bicurga", "Nsang" ];
			
		
		switch(select.value) {

				case "" :
			select_s.backgroundImage = "";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "0px";
			// select_s.backgroundColor= "#eeecec";
			// select_s.backgroundPosition= "8px 7px";
			// select_s.paddingLeft= "35px";
			//tel.value="00237";
			//tel.pattern="00237[0-9]{9}";
		
			break;	

			case "Cameroun":
			select_s.backgroundImage = "url('./img/flags/cameroon.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00237";
			//tel.pattern="00237[0-9]{9}";
				
			$( "#villef").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

			
				
			break;

			case "Senegal":
				select_s.backgroundImage = "url('./img/flags/senegal.jpg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00242";
			//tel.pattern="00242[0-9]{9}";
				
			$( "#villef").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags1.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;

			case "Côte d'Ivoire":
				select_s.backgroundImage = "url('./img/flags/ivoire.png')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00242";
			//tel.pattern="00242[0-9]{9}";
				
			$( "#villef").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags1.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;

			case "Togo":
				select_s.backgroundImage = "url('./img/flags/togo.png')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00242";
			//tel.pattern="00242[0-9]{9}";
				
			$( "#villef").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags1.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;

			case "Congo(R)" :
			select_s.backgroundImage = "url('./img/flags/congo.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00242";
			//tel.pattern="00242[0-9]{9}";
				
			$( "#villef").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags1.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;
				
				

			case "Gabon" :
			select_s.backgroundImage = "url('./img/flags/gabon.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00241";
			//tel.pattern="00241[0-9]{8}";
				
			$( "#villef").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags2.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;

			case "Tchad" :
			select_s.backgroundImage = "url('./img/flags/chad.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00235";
			//tel.pattern="00235[0-9]{8}";
		
			$( "#villef").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags3.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;

			case "République centrafricaine" :
			select_s.backgroundImage = "url('./img/flags/central-african-republic.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00236";
			//tel.pattern="00236[0-9]{8}";
				
			   $( "#villef").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags4
			});

				
			break;

			case "Guinée équatoriale" :
			select_s.backgroundImage = "url('./img/flags/equatorial-guinea.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00240";
			//tel.pattern="00240[0-9]{9}";
				
			$( "#villef").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags5.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;
			default :
			select_s.backgroundImage = "";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "0px";	
		}
	}    
	
	function changePaysA3(a) {
		select = document.getElementById("pays31");
		//tel = document.getElementById("tel");
		select_s =select.style;
			console.log("selectselectselectselect",select.value)
		var availableTags = [ "Douala", "Yaounde", "Garoua", "Bamenda", "Maroua", "Nkongsamba", "Bafoussam", "Ngaoundere", "Bertoua", "Loum", "Kumba", "Edea", "Kumbo", "Foumban", "Mbouda", "Dschang", "Limbe", "Ebolowa", "Kousseri", "Guider", "Meiganga", "Mbalmayo", "Bafang", "Tiko", "Bafia", "Wum", "Kribi", "Buea", "Sangmelima", "Foumbot", "Bangangte", "Batouri", "Banyo", "Nkambe", "Bali", "Mbanga", "Mokolo", "Melong", "Manjo", "Garoua-Boulaï", "Mora", "Kaele", "Tibati", "Ndop", "Akonolinga", "Eseka", "Mamfe", "Obala", "Muyuka", "Nanga-Eboko", "Abong-Mbang", "Fundong", "Nkoteng", "Fontem", "Mbandjock", "Touboro", "Ngaoundal", "Yokadouma", "Pitoa", "Tombel", "Kekem", "Magba", "Belabo", "Tonga", "Maga", "Koutaba", "Blangoua", "Guidiguis", "Bogo", "Batibo", "Yabassi", "Figuil", "Makenene", "Gazawa", "Tchollire"];                
			
			
		var availableTags1 = [ "Brazzaville", "Pointe-Noire", "Dolisie", "Nkayi", "Loandjili", "Ouesso", "Madingou", "Owando", "Gamboma", "Impfondo", "Sibiti", "Mossendjo", "Ngamaba-Mfilou", "Kinkala", "Makoua"];
			
			
			
		var availableTags2 = [ "Libreville", "Port-Gentil", "Franceville", "Oyem", "Moanda", "Mouila", "Lambarene", "Tchibanga", "Koulamoutou", "Makokou", "Bitam", "Tsogni", "Gamba", "Mounana", "Ntoum", "Nkan", "Lastourville", "Okondja", "Ndende", "Booue", "Fougamou", "Ndjole", "Mbigou", "Mayumba", "Mitzic", "Mekambo", "Lekoni", "Mimongo", "Minvoul", "Medouneu", "Omboue", "Cocobeach", "Kango" ];
			

			
		var availableTags3 = [ "NDjamena", "Moundou", "Sarh", "Abeche", "Faya-Largeau", "Koumra", "Kelo", "Mongo", "Pala", "Am Timan", "Ati", "Bongor", "Doba", "Mao", "Oum Hadjer", "Moussoro", "Bitkine", "Biltine", "Massaguet", "Dourbali", "Laï", "Lere", "Kyabe", "Massakory", "Bokoro", "Bousso", "Benoye", "Adre", "Ngama", "Bere", "Fianga", "Bol", "Moïssala", "Guelendeng", "Goundi", "Gounou Gaya", "Baïbokoum", "Aozou", "Beinamar", "Melfi", "Beboto", "Massenya" ];
			
					
			
		var availableTags4 = [ "Bangui", "Bimbo" , "Berberati" , "Carnot" , "Bambari" , "Bouar" , "Bria" , "Bossangoa" , "Nola" , "Bangassou" , "Boda" , "Sibut" , "Kaga-Bandoro" , "Mbaiki" , "Bozoum" , "Batangafo" , "Paoua" , "Ippy" , "Bocaranga" , "Kabo" , "Alindao" , "Yaloke" , "Baoro" , "Gamboula" , "Ndele" , "Dekoa" , "Bouca" , "Grimari" , "Bossembele" , "Kembe" , "Zemio" , "Mobaye" , "Kouango" , "Baboua" , "Damara" , "Birao", "Obo" ];
			
			
			
		var availableTags5 = [ "Bata", "Malabo", "Ebebiyín", "Aconibe", "Añisoc", "Luba", "Evinayong", "Mongomo", "Mengomeyen", "Mikomeseng", "Rebola", "Bidjabidjan", "Niefang", "Cogo", "Nsok", "San Antonio de Pale", "Mbini", "Nsork", "Ayene", "Nkimi", "Machinda", "Acurenam", "Corisco", "Baney", "Bicurga", "Nsang" ];
			
		
		switch(select.value) {

				case "" :
			select_s.backgroundImage = "";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "0px";
			// select_s.backgroundColor= "#eeecec";
			// select_s.backgroundPosition= "8px 7px";
			// select_s.paddingLeft= "35px";
			//tel.value="00237";
			//tel.pattern="00237[0-9]{9}";
		
			break;	

			case "Cameroun":
			select_s.backgroundImage = "url('./img/flags/cameroon.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00237";
			//tel.pattern="00237[0-9]{9}";
				
			$( "#villef").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

			
				
			break;

			case "Senegal":
				select_s.backgroundImage = "url('./img/flags/senegal.jpg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00242";
			//tel.pattern="00242[0-9]{9}";
				
			$( "#villef").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags1.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;

			case "Côte d'Ivoire":
				select_s.backgroundImage = "url('./img/flags/ivoire.png')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00242";
			//tel.pattern="00242[0-9]{9}";
				
			$( "#villef").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags1.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;

			case "Togo":
				select_s.backgroundImage = "url('./img/flags/togo.png')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00242";
			//tel.pattern="00242[0-9]{9}";
				
			$( "#villef").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags1.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;

			case "Congo(R)" :
			select_s.backgroundImage = "url('./img/flags/congo.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00242";
			//tel.pattern="00242[0-9]{9}";
				
			$( "#villef").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags1.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;
				
				

			case "Gabon" :
			select_s.backgroundImage = "url('./img/flags/gabon.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00241";
			//tel.pattern="00241[0-9]{8}";
				
			$( "#villef").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags2.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;

			case "Tchad" :
			select_s.backgroundImage = "url('./img/flags/chad.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00235";
			//tel.pattern="00235[0-9]{8}";
		
			$( "#villef").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags3.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;

			case "République centrafricaine" :
			select_s.backgroundImage = "url('./img/flags/central-african-republic.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00236";
			//tel.pattern="00236[0-9]{8}";
				
			   $( "#villef").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags4
			});

				
			break;

			case "Guinée équatoriale" :
			select_s.backgroundImage = "url('./img/flags/equatorial-guinea.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00240";
			//tel.pattern="00240[0-9]{9}";
				
			$( "#villef").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags5.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;
			default :
			select_s.backgroundImage = "";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "0px";	
		}
	}
</script>

<script>

	function changePaysD(a) {
		select = document.getElementById("pays2");
		//tel = document.getElementById("tel");
		select_s =select.style;
		console.log("selectselectselectselect",select.value)

		var availableTags = [ "Douala", "Yaounde", "Garoua", "Bamenda", "Maroua", "Nkongsamba", "Bafoussam", "Ngaoundere", "Bertoua", "Loum", "Kumba", "Edea", "Kumbo", "Foumban", "Mbouda", "Dschang", "Limbe", "Ebolowa", "Kousseri", "Guider", "Meiganga", "Mbalmayo", "Bafang", "Tiko", "Bafia", "Wum", "Kribi", "Buea", "Sangmelima", "Foumbot", "Bangangte", "Batouri", "Banyo", "Nkambe", "Bali", "Mbanga", "Mokolo", "Melong", "Manjo", "Garoua-Boulaï", "Mora", "Kaele", "Tibati", "Ndop", "Akonolinga", "Eseka", "Mamfe", "Obala", "Muyuka", "Nanga-Eboko", "Abong-Mbang", "Fundong", "Nkoteng", "Fontem", "Mbandjock", "Touboro", "Ngaoundal", "Yokadouma", "Pitoa", "Tombel", "Kekem", "Magba", "Belabo", "Tonga", "Maga", "Koutaba", "Blangoua", "Guidiguis", "Bogo", "Batibo", "Yabassi", "Figuil", "Makenene", "Gazawa", "Tchollire"];                
			
			
		var availableTags1 = [ "Brazzaville", "Pointe-Noire", "Dolisie", "Nkayi", "Loandjili", "Ouesso", "Madingou", "Owando", "Gamboma", "Impfondo", "Sibiti", "Mossendjo", "Ngamaba-Mfilou", "Kinkala", "Makoua"];
			
			
			
		var availableTags2 = [ "Libreville", "Port-Gentil", "Franceville", "Oyem", "Moanda", "Mouila", "Lambarene", "Tchibanga", "Koulamoutou", "Makokou", "Bitam", "Tsogni", "Gamba", "Mounana", "Ntoum", "Nkan", "Lastourville", "Okondja", "Ndende", "Booue", "Fougamou", "Ndjole", "Mbigou", "Mayumba", "Mitzic", "Mekambo", "Lekoni", "Mimongo", "Minvoul", "Medouneu", "Omboue", "Cocobeach", "Kango" ];
			

			
		var availableTags3 = [ "NDjamena", "Moundou", "Sarh", "Abeche", "Faya-Largeau", "Koumra", "Kelo", "Mongo", "Pala", "Am Timan", "Ati", "Bongor", "Doba", "Mao", "Oum Hadjer", "Moussoro", "Bitkine", "Biltine", "Massaguet", "Dourbali", "Laï", "Lere", "Kyabe", "Massakory", "Bokoro", "Bousso", "Benoye", "Adre", "Ngama", "Bere", "Fianga", "Bol", "Moïssala", "Guelendeng", "Goundi", "Gounou Gaya", "Baïbokoum", "Aozou", "Beinamar", "Melfi", "Beboto", "Massenya" ];
			
					
			
		var availableTags4 = [ "Bangui", "Bimbo" , "Berberati" , "Carnot" , "Bambari" , "Bouar" , "Bria" , "Bossangoa" , "Nola" , "Bangassou" , "Boda" , "Sibut" , "Kaga-Bandoro" , "Mbaiki" , "Bozoum" , "Batangafo" , "Paoua" , "Ippy" , "Bocaranga" , "Kabo" , "Alindao" , "Yaloke" , "Baoro" , "Gamboula" , "Ndele" , "Dekoa" , "Bouca" , "Grimari" , "Bossembele" , "Kembe" , "Zemio" , "Mobaye" , "Kouango" , "Baboua" , "Damara" , "Birao", "Obo" ];
			
			
			
		var availableTags5 = [ "Bata", "Malabo", "Ebebiyín", "Aconibe", "Añisoc", "Luba", "Evinayong", "Mongomo", "Mengomeyen", "Mikomeseng", "Rebola", "Bidjabidjan", "Niefang", "Cogo", "Nsok", "San Antonio de Pale", "Mbini", "Nsork", "Ayene", "Nkimi", "Machinda", "Acurenam", "Corisco", "Baney", "Bicurga", "Nsang" ];
			
	
		
		switch(select.value) {
			case "" :
			select_s.backgroundImage = "";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "0px";
			// select_s.backgroundColor= "#eeecec";
			// select_s.backgroundPosition= "8px 7px";
			// select_s.paddingLeft= "35px";
			//tel.value="00237";
			//tel.pattern="00237[0-9]{9}";
		
			break;	

			case "Cameroun":
			select_s.backgroundImage = "url('./img/flags/cameroon.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00237";
			//tel.pattern="00237[0-9]{9}";
				
			$( "#villed").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

			
				
			break;

			case "Senegal":
				select_s.backgroundImage = "url('./img/flags/senegal.jpg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00242";
			//tel.pattern="00242[0-9]{9}";
				
			$( "#villed").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags1.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;

			case "Côte d'Ivoire":
				select_s.backgroundImage = "url('./img/flags/ivoire.png')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00242";
			//tel.pattern="00242[0-9]{9}";
				
			$( "#villed").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags1.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;

			case "Togo":
				select_s.backgroundImage = "url('./img/flags/togo.png')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00242";
			//tel.pattern="00242[0-9]{9}";
				
			$( "#villed").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags1.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;

    		case "Congo(R)" :
			select_s.backgroundImage = "url('./img/flags/congo.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00242";
			//tel.pattern="00242[0-9]{9}";
				
			$( "#villed").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags1.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;
				
				

			case "Gabon" :
			select_s.backgroundImage = "url('./img/flags/gabon.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00241";
			//tel.pattern="00241[0-9]{8}";
				
			$( "#villed").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags2.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;

			case "Tchad" :
			select_s.backgroundImage = "url('./img/flags/chad.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00235";
			//tel.pattern="00235[0-9]{8}";
		
			$( "#villed").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags3.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;

			case "République centrafricaine" :
			select_s.backgroundImage = "url('./img/flags/central-african-republic.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00236";
			//tel.pattern="00236[0-9]{8}";
				
			   $( "#villed").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags4
			});

				
			break;

			case "Guinée équatoriale" :
			select_s.backgroundImage = "url('./img/flags/equatorial-guinea.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00240";
			//tel.pattern="00240[0-9]{9}";
				
			$( "#villed").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags5.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;
			default:
			select_s.backgroundImage = "";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "0px";
			// select_s.backgroundColor= "#eeecec";
			// select_s.backgroundPosition= "8px 7px";
			// select_s.paddingLeft= "35px";
			//tel.value="00237";
			//tel.pattern="00237[0-9]{9}";
		
			break;
		
		}
	} 
	function changePaysD1(a) {
		select = document.getElementById("pays21");
		//tel = document.getElementById("tel");
		select_s =select.style;
		console.log("selectselectselectselect",select.value)

		var availableTags = [ "Douala", "Yaounde", "Garoua", "Bamenda", "Maroua", "Nkongsamba", "Bafoussam", "Ngaoundere", "Bertoua", "Loum", "Kumba", "Edea", "Kumbo", "Foumban", "Mbouda", "Dschang", "Limbe", "Ebolowa", "Kousseri", "Guider", "Meiganga", "Mbalmayo", "Bafang", "Tiko", "Bafia", "Wum", "Kribi", "Buea", "Sangmelima", "Foumbot", "Bangangte", "Batouri", "Banyo", "Nkambe", "Bali", "Mbanga", "Mokolo", "Melong", "Manjo", "Garoua-Boulaï", "Mora", "Kaele", "Tibati", "Ndop", "Akonolinga", "Eseka", "Mamfe", "Obala", "Muyuka", "Nanga-Eboko", "Abong-Mbang", "Fundong", "Nkoteng", "Fontem", "Mbandjock", "Touboro", "Ngaoundal", "Yokadouma", "Pitoa", "Tombel", "Kekem", "Magba", "Belabo", "Tonga", "Maga", "Koutaba", "Blangoua", "Guidiguis", "Bogo", "Batibo", "Yabassi", "Figuil", "Makenene", "Gazawa", "Tchollire"];                
			
			
		var availableTags1 = [ "Brazzaville", "Pointe-Noire", "Dolisie", "Nkayi", "Loandjili", "Ouesso", "Madingou", "Owando", "Gamboma", "Impfondo", "Sibiti", "Mossendjo", "Ngamaba-Mfilou", "Kinkala", "Makoua"];
			
			
			
		var availableTags2 = [ "Libreville", "Port-Gentil", "Franceville", "Oyem", "Moanda", "Mouila", "Lambarene", "Tchibanga", "Koulamoutou", "Makokou", "Bitam", "Tsogni", "Gamba", "Mounana", "Ntoum", "Nkan", "Lastourville", "Okondja", "Ndende", "Booue", "Fougamou", "Ndjole", "Mbigou", "Mayumba", "Mitzic", "Mekambo", "Lekoni", "Mimongo", "Minvoul", "Medouneu", "Omboue", "Cocobeach", "Kango" ];
			

			
		var availableTags3 = [ "NDjamena", "Moundou", "Sarh", "Abeche", "Faya-Largeau", "Koumra", "Kelo", "Mongo", "Pala", "Am Timan", "Ati", "Bongor", "Doba", "Mao", "Oum Hadjer", "Moussoro", "Bitkine", "Biltine", "Massaguet", "Dourbali", "Laï", "Lere", "Kyabe", "Massakory", "Bokoro", "Bousso", "Benoye", "Adre", "Ngama", "Bere", "Fianga", "Bol", "Moïssala", "Guelendeng", "Goundi", "Gounou Gaya", "Baïbokoum", "Aozou", "Beinamar", "Melfi", "Beboto", "Massenya" ];
			
					
			
		var availableTags4 = [ "Bangui", "Bimbo" , "Berberati" , "Carnot" , "Bambari" , "Bouar" , "Bria" , "Bossangoa" , "Nola" , "Bangassou" , "Boda" , "Sibut" , "Kaga-Bandoro" , "Mbaiki" , "Bozoum" , "Batangafo" , "Paoua" , "Ippy" , "Bocaranga" , "Kabo" , "Alindao" , "Yaloke" , "Baoro" , "Gamboula" , "Ndele" , "Dekoa" , "Bouca" , "Grimari" , "Bossembele" , "Kembe" , "Zemio" , "Mobaye" , "Kouango" , "Baboua" , "Damara" , "Birao", "Obo" ];
			
			
			
		var availableTags5 = [ "Bata", "Malabo", "Ebebiyín", "Aconibe", "Añisoc", "Luba", "Evinayong", "Mongomo", "Mengomeyen", "Mikomeseng", "Rebola", "Bidjabidjan", "Niefang", "Cogo", "Nsok", "San Antonio de Pale", "Mbini", "Nsork", "Ayene", "Nkimi", "Machinda", "Acurenam", "Corisco", "Baney", "Bicurga", "Nsang" ];
			
	
		
		switch(select.value) {
			case "" :
			select_s.backgroundImage = "";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "0px";
			// select_s.backgroundColor= "#eeecec";
			// select_s.backgroundPosition= "8px 7px";
			// select_s.paddingLeft= "35px";
			//tel.value="00237";
			//tel.pattern="00237[0-9]{9}";
		
			break;	

			case "Cameroun":
			select_s.backgroundImage = "url('./img/flags/cameroon.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00237";
			//tel.pattern="00237[0-9]{9}";
				
			$( "#villed").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

			
				
			break;

			case "Senegal":
				select_s.backgroundImage = "url('./img/flags/senegal.jpg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00242";
			//tel.pattern="00242[0-9]{9}";
				
			$( "#villed").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags1.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;

			case "Côte d'Ivoire":
				select_s.backgroundImage = "url('./img/flags/ivoire.png')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00242";
			//tel.pattern="00242[0-9]{9}";
				
			$( "#villed").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags1.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;

			case "Togo":
				select_s.backgroundImage = "url('./img/flags/togo.png')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00242";
			//tel.pattern="00242[0-9]{9}";
				
			$( "#villed").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags1.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;

    		case "Congo(R)" :
			select_s.backgroundImage = "url('./img/flags/congo.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00242";
			//tel.pattern="00242[0-9]{9}";
				
			$( "#villed").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags1.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;
				
				

			case "Gabon" :
			select_s.backgroundImage = "url('./img/flags/gabon.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00241";
			//tel.pattern="00241[0-9]{8}";
				
			$( "#villed").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags2.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;

			case "Tchad" :
			select_s.backgroundImage = "url('./img/flags/chad.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00235";
			//tel.pattern="00235[0-9]{8}";
		
			$( "#villed").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags3.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;

			case "République centrafricaine" :
			select_s.backgroundImage = "url('./img/flags/central-african-republic.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00236";
			//tel.pattern="00236[0-9]{8}";
				
			   $( "#villed").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags4
			});

				
			break;

			case "Guinée équatoriale" :
			select_s.backgroundImage = "url('./img/flags/equatorial-guinea.svg')";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "25px";
			select_s.backgroundColor= "#eeecec";
			select_s.backgroundPosition= "8px 7px";
			select_s.paddingLeft= "35px";
			//tel.value="00240";
			//tel.pattern="00240[0-9]{9}";
				
			$( "#villed").autocomplete({
				
					onSelect: function (suggestion) {
				$('#selected_option').html(suggestion.value);
			},
					lookup: availableTags5.map((x,id)=>{
						return{'value' : x, 'data' : id};
					})
			});

				
			break;
			default:
			select_s.backgroundImage = "";
			select_s.backgroundRepeat = "no-repeat";
			select_s.backgroundSize = "0px";
			// select_s.backgroundColor= "#eeecec";
			// select_s.backgroundPosition= "8px 7px";
			// select_s.paddingLeft= "35px";
			//tel.value="00237";
			//tel.pattern="00237[0-9]{9}";
		
			break;
		
		}
	}                   
</script>

<!-- Fin liste deroulante pour le camion -->
<!-- liste autocomplete des villes -->

<script type="text/javascript" src="js/datatable/jquery-3.5.1.js"></script>
<script src="js/jquery.autocomplete.min.js"></script>

<script src="https://maps.google.com/maps/api/js?key=AIzaSyBzlVZve6W0EpZiZdIx5FZbz9fcZ0Lje0g&libraries=places&callback=initAutocomplete" type="text/javascript"></script>
    <script>  
	$(document).ready(function() {
        $("#lat_area").addClass("d-none");
        $("#long_area").addClass("d-none");
		
   });
   var country = document.getElementById('pays4');
   var country1 = document.getElementById('pays5');

   country.addEventListener('change', (event) => {
	$('#autocomplete').val('');

  if(country.value==''){
	$('#autocomplete')[0].disabled = true;
  }else{
	$('#autocomplete')[0].disabled = false;
	console.log(event,country.value)


  }


});
google.maps.event.addDomListener(window, 'load', initialize);

country1.addEventListener('change', (event) => {
	$('#autocomplete1').val('');

if(country1.value==''){
  $('#autocomplete1')[0].disabled = true;
}else{
  $('#autocomplete1')[0].disabled = false;
  console.log(event,country1.value)


}


});
google.maps.event.addDomListener(window, 'load', initialize1);


function getCountry(a) {

	if(a==="Cameroun")
	return 'CM';
	if(a==="Senegal")
	return 'SN';
	if(a==="Côte d'Ivoire")
	return 'CI';
	if(a==="Togo")
	return 'TG';
	if(a==="Congo(R)")
	return 'CG';
	if(a==="Gabon")
	return 'GA';
	if(a==="Tchad")
	return 'TD';
	if(a==="République centrafricaine")
	return 'CF';
	if(a==="Guinée équatoriale")
	return 'GQ';

}

   function initialize(isedit=false) {

	var inputdel = document.getElementById('autocomplete');
	   inputdel.remove();
	var defaultValue="";
	if(isedit){
	<?php if(isset($res) && !empty($res['ville_charg'])){ ?>
		defaultValue='<?php echo $res['ville_charg'] ?>';
<?php } ?>
}
	   var inputs = [
        `<input type="text"  name="autocomplete" id="autocomplete" class="form-control" value="${defaultValue}" placeholder="Select Location">`
    ].sort().join(" ");
   document.querySelector('#depdiv').innerHTML = inputs;
   var input = document.getElementById('autocomplete');
          var country = document.getElementById('pays4');

       const options = {
 
    componentRestrictions: { country:getCountry( country.value) },
    
  };
       var autocomplete = new google.maps.places.Autocomplete(input,options);
autocomplete.setComponentRestrictions({
  country: [getCountry( country.value)],
});
       autocomplete.addListener('place_changed', function() {
           var place = autocomplete.getPlace();

           console.log(place)

           $('#latitude').val(place.geometry['location'].lat());
           $('#longitude').val(place.geometry['location'].lng());
		   $('#ville4').val(place.name);

        // --------- show lat and long ---------------
           $("#lat_area").removeClass("d-none");
           $("#long_area").removeClass("d-none");	   

       });
   }

   function initialize1(isedit=false) {
	var inputdel = document.getElementById('autocomplete1');
	   inputdel.remove();
	   var defaultValue="";
	   if(isedit){

	<?php if(isset($res) && !empty($res['ville_liv'])){ ?>
		defaultValue='<?php echo $res['ville_liv'] ?>';
<?php } ?>
	}
	   var inputs = [
        `<input type="text"  name="autocomplete1" id="autocomplete1" value="${defaultValue}" class="form-control" placeholder="Select Location">`
    ].sort().join(" ");
   document.querySelector('#arrdiv').innerHTML = inputs;
   var input = document.getElementById('autocomplete1');
          var country = document.getElementById('pays5');

       const options = {
 
    componentRestrictions: { country:getCountry( country.value) },
    
  };
       var autocomplete = new google.maps.places.Autocomplete(input,options);
       autocomplete.addListener('place_changed', function() {
           var place = autocomplete.getPlace();

           console.log(place)

           $('#latitude1').val(place.geometry['location'].lat());
           $('#longitude1').val(place.geometry['location'].lng());
		   $('#ville5').val(place.name);
        // --------- show lat and long ---------------
           $("#lat_area").removeClass("d-none");
           $("#long_area").removeClass("d-none");
		   if ( $('#latitude1').val() &&  $('#latitude').val()) {
			   console.log("getDistanceAndPricegetDistanceAndPricegetDistanceAndPrice")
		getDistanceAndPrice();
	    }
       });
   }




   
   function initializeDispo(isedit=false) {

var inputdel = document.getElementById('autocomplete');
   inputdel.remove();
var defaultValue="";
if(isedit){
<?php if(isset($res) && !empty($res['ville_dep'])){ ?>
	defaultValue='<?php echo $res['ville_dep'] ?>';
<?php } ?>
}
   var inputs = [
	`<input type="text"  name="autocomplete" id="autocomplete" class="form-control" value="${defaultValue}" placeholder="Select Location">`
].sort().join(" ");
console.log("inputsinputsinputsinputsinputs",inputs)
document.querySelector('#depdiv').innerHTML = inputs;
var input = document.getElementById('autocomplete');
	  var country = document.getElementById('pays4');

   const options = {

componentRestrictions: { country:getCountry( country.value) },

};
   var autocomplete = new google.maps.places.Autocomplete(input,options);
autocomplete.setComponentRestrictions({
country: [getCountry( country.value)],
});
   autocomplete.addListener('place_changed', function() {
	   var place = autocomplete.getPlace();

	   console.log(place)

	   $('#latitude').val(place.geometry['location'].lat());
	   $('#longitude').val(place.geometry['location'].lng());
	   $('#ville4').val(place.name);

	// --------- show lat and long ---------------
	   $("#lat_area").removeClass("d-none");
	   $("#long_area").removeClass("d-none");
   });
}

function initializeDispo1(isedit=false) {
var inputdel = document.getElementById('autocomplete1');
   inputdel.remove();
   var defaultValue="";
   if(isedit){

<?php if(isset($res) && !empty($res['ville_arr'])){ ?>
	defaultValue='<?php echo $res['ville_arr'] ?>';
<?php } ?>
}
   var inputs = [
	`<input type="text"  name="autocomplete1" id="autocomplete1" value="${defaultValue}" class="form-control" placeholder="Select Location">`
].sort().join(" ");
document.querySelector('#arrdiv').innerHTML = inputs;
var input = document.getElementById('autocomplete1');
	  var country = document.getElementById('pays5');

   const options = {

componentRestrictions: { country:getCountry( country.value) },

};
   var autocomplete = new google.maps.places.Autocomplete(input,options);
   autocomplete.addListener('place_changed', function() {
	   var place = autocomplete.getPlace();

	   console.log(place)

	   $('#latitude1').val(place.geometry['location'].lat());
	   $('#longitude1').val(place.geometry['location'].lng());
	   $('#ville5').val(place.name);
	// --------- show lat and long ---------------
	   $("#lat_area").removeClass("d-none");
	   $("#long_area").removeClass("d-none");
	   
   });
}
    </script>
	<script>
  const mySelect = document.getElementById("vehicule");
  const myDiv = document.getElementById("FACULTATIF");

  mySelect.addEventListener("change", () => {
	var divpriceestimated = document.getElementById("divpriceestimated");

// Add the class to the element
    if (mySelect.value === "Moto") {
      myDiv.style.display = "none";
    } else {
      myDiv.style.display = "block";
	  divpriceestimated.classList.add("hidden");

    }
  });

  function setMyLocation(a,b,c,d){
	  // Get the input field element
const input = document.getElementById(a);

// Check if the Geolocation API is supported by the browser
if (navigator.geolocation) {
  // Get the user's current position using the Geolocation API
  navigator.geolocation.getCurrentPosition(
    // Success callback
    function(position) {
      // Create a new instance of the Google Maps Places service
      const service = new google.maps.places.PlacesService(input);

      // Create a new LatLng object with the user's coordinates
      const latLng = new google.maps.LatLng(
        position.coords.latitude,
        position.coords.longitude
      );
	  const geocoder = new google.maps.Geocoder();

// Create a new LatLng object with the desired coordinates
const latLng1 = new google.maps.LatLng(position.coords.latitude,
        position.coords.longitude);

// Use the geocode() method of the Geocoder object to perform a reverse geocoding request
geocoder.geocode(
  { location: latLng1 },
  function(results, status) {
    if (status === google.maps.GeocoderStatus.OK) {
      if (results.length > 0) {
		console.log(results); // formatted_address for the location

        console.log(results[0].formatted_address); // formatted_address for the location
		input.value = results[0].formatted_address;

           $('#'+b).val(position.coords.latitude);
           $('#'+c).val(position.coords.longitude);
		   $('#'+d).val(results[0].formatted_address);
      } else {
        console.error('No results found');
      }
    } else {
      console.error('Geocoding request failed:', status);
    }
  }
);
    },
    // Error callback
    function(error) {
      console.error('Error getting current position:', error);
    }
  );
} else {
  console.error('Geolocation API not supported by browser');
}

  }

  function getDistanceAndPrice(){
	const directionsService = new google.maps.DirectionsService();
	const lag = document.getElementById('latitude').value;
	const lag1 = document.getElementById('latitude1').value;
	const long = document.getElementById('longitude').value;
	const long1 = document.getElementById('longitude1').value;
if (lag && lag.trim() !== ''&&lag1 && lag1.trim() !== '') {
	const origin = new google.maps.LatLng(lag,  long); // San Francisco, CA
	const destination = new google.maps.LatLng(lag1,  long1); // Los Angeles, CA

// Set the waypoints (if any)
const waypoints = [
//   {
//     location: new google.maps.LatLng(37.3382, -121.8863), // San Jose, CA
//     stopover: true
//   }
];

// Set the travel mode
const travelMode = 'DRIVING';

// Create a request object
const request = {
  origin: origin,
  destination: destination,
  waypoints: waypoints,
  travelMode: travelMode
};

// Send the request to the DirectionsService object
directionsService.route(request, function(result, status) {
  if (status == 'OK') {
    // Extract the route information from the response
    const route = result.routes[0];
    const legs = route.legs;
    const distance = route.legs.reduce((total, leg) => total + leg.distance.value, 0);
    const duration = route.legs.reduce((total, leg) => total + leg.duration.value, 0);

    // Display the route information
    console.log(`Distance: ${distance} meters`);
    console.log(`Duration: ${duration} seconds`);
	const seconds = duration; // Example number of seconds

const hours = Math.floor(seconds / 3600);
const minutes = Math.floor((seconds % 3600) / 60);
const remainingSeconds = seconds % 60;

const timeString = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}`;
 // Example output: "00:20:34"
$('#distance').val(distance/1000);
	   $('#date_liv').val(timeString);

	   var dist=Math.ceil(distance/1000);
	   var price=0;
// 	   O km <d<= 3km  ...... ... 500 F
if(dist>0 && dist <=3){
	price=500;
	console.log("O km <d<= 3km  ...... ... 500 F");

}else if(dist>=4 && dist <=9){
	price=500+(dist-3)*150;
	console.log("4 km <= d <= 9 km......... 500F + 150 F/km");

}else if(dist >=9){
	price= 1400+(dist-9)*100;
	console.log("10 km <= d <N km ........ 1400+ 100F/km");

}
$('#priceestimated').val(price);

// 4 km <= d <= 9 km......... 500F + 150 F/km

// 10 km <= d <N km ........ 1400+ 100F/km
	   console.log(timeString);
  }
});
} else {
	Alert("empty")

}
	
  }

  
</script>
<script>
	// Get the modal and buttons
// Get the modal and buttons
var modal1 = document.getElementById("myModal");
var okBtn1 = document.getElementById("okBtn");
var cancelBtn1 = document.getElementById("cancelBtn");
var submitBtn1 = document.getElementById("submitBtn");
var form1 = document.getElementById("myForm");

// Show the modal when the submit button is clicked
submitBtn1.addEventListener("click", function(event) {
  event.preventDefault(); // Prevent form submission

  // Check if the form is valid
  if (form1.checkValidity()) {
    modal1.style.display = "block";
  } else {
    form1.reportValidity();
  }
});
// Hide the modal when the cancel button is clicked
cancelBtn1.addEventListener("click", function() {
	console.log("cancelBtn1cancelBtn1cancelBtn1")
  modal1.style.display = "none";
});

// Submit the form when the OK button is clicked
okBtn1.addEventListener("click", function() {
	console.log("okBtn1okBtn1okBtn1okBtn1")

  modal1.style.display = "none";
  const disabledInputs = form1.querySelectorAll('input[disabled]');
  for (let i = 0; i < disabledInputs.length; i++) {
    disabledInputs[i].disabled = false;
  }
  form1.submit();
});

</script>

<script>
	// Get the modal and buttons
// Get the modal and buttons
var modal = document.getElementById("myModal");
var okBtn = document.getElementById("okBtn");
var cancelBtn = document.getElementById("cancelBtn");
var submitBtn = document.getElementById("submitBtnEdit");
var form = document.getElementById("form1");

// Show the modal when the submit button is clicked
submitBtn.addEventListener("click", function(event) {
  event.preventDefault(); // Prevent form submission

  // Check if the form is valid
  if (form.checkValidity()) {
    modal.style.display = "block";
  } else {
    form.reportValidity();
  }
});

// Hide the modal when the cancel button is clicked
cancelBtn.addEventListener("click", function() {
  modal.style.display = "none";
});

// Submit the form when the OK button is clicked
okBtn.addEventListener("click", function() {
  modal.style.display = "none";
  const disabledInputs = form.querySelectorAll('input[disabled]');
  for (let i = 0; i < disabledInputs.length; i++) {
    disabledInputs[i].disabled = false;
  }
  form.submit();
});

</script>

<script>

function showModalRate(itemId) {
	$('#evaluation-modal').attr('data-item-id', itemId);
    $('#evaluation-modal').show();
}

$(document).ready(function() {
  // Show evaluation modal on button click
 
  // Handle star clicks
  $('span.star').click(function() {
    $(this).addClass('selected').prevAll().addClass('selected');
    $(this).nextAll().removeClass('selected');
  });

  // Handle evaluation confirm button click
  $('#evaluate-confirm-btn').click(function() {
    var itemId = $('#evaluation-modal').data('item-id');
    var rating = $('span.star.selected').last().data('value');

    // Make AJAX request to save rating
    $.ajax({
      url: 'post_rating.php',
      type: 'POST',
      data: {
        item_id: itemId,
        rating: rating
      },
      success: function(response) {
        // Handle success
        $('#evaluation-modal').hide();
      },
      error: function(xhr, status, error) {
        // Handle error
        alert('Error saving rating: ' + error);
      }
    });
  });

  $('#evaluate-cancel-btn').click(function() {
	$('#evaluation-modal').hide();
  });
});


$(document).ready(function() {
  // Store references to the select elements
  var fruitSelect = $('#vehicule');
  var colorSelect = $('#marchandise');
  
  // Define the color options for each fruit
  var fruitColors = {
    '': [], // Empty option for default selection
    'Moto': ["repas", "plis", "Médicaments", 
"Vêtements", "Sac à main", "téléphone", "petit colis", "Autres" ],
    'Tricycle': ["Appareils électroménagers", "Ouvrage d’art", "Pièce de voiture", "Vêtements", "Electronique", 
"Fleurs", "Meubles", "Décoration de maison", "déménagement", "Equipements de bureau", "Autres" ],
    'Van': ["Appareils électroménagers",
"Ouvrage d’art", "Pièce de voiture, Vêtements", "Electronique", "Fleurs", "Meubles", 
"Décoration de maison", "déménagement", "Equipements de bureau", "Autres"]
  };
  
  
  // Add change event listener to the fruit select
  fruitSelect.on('change', function() {
    var selectedFruit = $(this).val();
    
    // Remove existing color options
    colorSelect.empty();

	document.getElementById('othervalue').style.display = 'none';
    
    // If a fruit is selected, add its color options
    if (selectedFruit) {
      // Get the color options for the selected fruit
      var fruitColorOptions = fruitColors[selectedFruit];
      
      // Add each color option as an option in the color select
      $.each(fruitColorOptions, function(index, color) {
        var option = $('<option>').attr('value', color).text(color);
        colorSelect.append(option);
      });
      
      // Show the color select
      colorSelect.show();
    } else {
      // If no fruit is selected, hide the color select
      colorSelect.hide();
    }
  });

  colorSelect.on('change', function(){
    //alert(this.value)
        if( $(this).val() == 'Autres'){
           document.getElementById('othervalue').style.display = 'block';
           } else {
           document.getElementById('othervalue').style.display = 'none';
           } });
});

$('body').find('*').each(function() {
  var color = $(this).css('color');
  if (color == '#19b835') {
    $(this).css('color', '#313389');
  }
});

  </script>

<script>
                                            
											// get the table element by ID
											const table = document.getElementById("empTableAbon");
											const form = document.getElementById("postuler");

											// add a "change" event listener to the table element
											table.addEventListener("change", function(event) {
												alert(event.target.tagName)
											  // get the target element of the event
											  const target = event.target;
											  let atLeastOneChecked = false;
								// if the target element is a checkbox input
											if (target.type === "checkbox") {

												// disable all other checkbox inputs in the table
												const checkboxes = table.getElementsByTagName("input");
												for (let i = 0; i < checkboxes.length; i++) {
												if (checkboxes[i].type === "checkbox" && checkboxes[i] !== target) {
													checkboxes[i].checked = false;
												}
												}
											}
											});

											
											  </script>
											
    <script type="text/javascript" src="js/datatable/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/datatable/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="js/datatable/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="js/datatable/buttons.bootstrap.min.js"></script>
    <script type="text/javascript" src="js/datatable/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script type="text/javascript" src="js/datatable/buttons.html5.min.js"></script>
    <script type="text/javascript" src="js/datatable/buttons.print.min.js"></script>
    <script type="text/javascript" src="js/datatable/buttons.colVis.min.js"></script>
  
    <!-- <script type="text/javascript" src="scripts/jquery.mockjax.js"></script> -->
    <script type="text/javascript" src="scripts/countries.js"></script>
    <script type="text/javascript" src="scripts/demo.js"></script>

	<script>
    $(document).ready(function () {
        $('.selectpicker').selectpicker();
    })
</script>
<a href="https://wa.me/+237655767535" target="_blank" class="whatsapp-button center">
  <i class="fab fa-whatsapp"></i>
</a>
    <!-- liste autocomplete des villes -->
	</body>
</html>