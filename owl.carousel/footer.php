        <footer class="copyright-section">
			        	<div class="container text-center">
                            
                            <div class="col-xs-12">
                                <ul>
			        				<li><a href="condition.php">Conditions générales d'utilisation</a></li>
			        				<li><a href="mention-legal.php">Mentions légales</a></li>
									<?php if((isset($_SESSION['login_user'])) AND ($_SESSION['type']=="transporteur")) { ?>
                                        <li><a href="packs.php">Abonnez-vous</a></li>
										<li><a href="mon-compte.php">Mon compte</a></li>
                                    <?php } ?>
			        			</ul>
			        		</div>
                        
                            <div class="col-xs-12 footer-menu">
                                <ul>
                                    <li><a href="callto:80081"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="https://www.facebook.com/telefretcom"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://wa.me/+237655767535"><i class="fab fa-whatsapp"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/telefret/"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="https://twitter.com/Telefret_com"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            
                            <div class="col-xs-12 footer-menu hidden-sm hidden-md hidden-lg">
                                <ul class="social-links list-inline">
                                    <i class="fa fa-phone"></i> <a href="tel:+237655767535">+237 655 767 535</a>&nbsp; 
                                    <i class="fa fa-envelope"></i> <a href="mailto:contact@telefret.com">commercial@telemex.cm </a> &nbsp;
                                </ul>
                            </div>
                            
			        		<div class="copyright-info">
			        			<span>© Copyright 2018 TELEFRET - All Rights Reserved.</span>
			        		</div>
                            
			        	</div><!-- /.container -->
			        </footer>
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
			            <li class=""><a href="index.php">Home<span class="sr-only"></span></a></li>
                        
                        
                        <?php 
                                            if  (isset($_SESSION['login_user'])) { 
                                                
                                                if ($_SESSION['type']=='admin'){
                                        ?> 
                                                    <li><a href="index-admin.php">Espace Admin</a></li>        
                                       <?php 
                                                }
    
                                                else if($_SESSION['type']=='transporteur'){ 
                                        ?>
                                        
                                                    <li><a href="espace-transporteur.php">Espace Commercial</a></li> 
													<li><a href="espace-client.php">Espace Expéditeurs</a></li>
													
                                       <?php    
                                                }
                                                else if($_SESSION['type']=='client'){ 
                                        ?>
                                        
                                                    <li><a href="espace-client.php">Espace Expéditeurs</a></li> 
                                        
                                       <?php        
                                                } 
                                            }
                                        
                                            else {
                                        ?>
                                            <li><a href="espace-transporteur.php">Espace Commercial</a></li>
                                            <li><a href="espace-client.php">Espace Expéditeurs</a></li>
                                        <?php
                                            }
                                        ?>    
                                    
                                        <?php
                                             if((isset($_SESSION['login_user'])) AND ($_SESSION['type']!="admin")) {
                                                 if ($_SESSION['type']=="transporteur"){
                                        ?>
                                                     <li><a href="abonnement.php">Votre abonnement</a></li>
                                                <?php } ?>
                                        <li><a href="historique.php" >Votre historique</a></li>
										<!--<li><a href="mon-compte.php">Mon compte</a></li>-->
										<li><a href="http://www.fleet.tn/fl">GPS Tracking</a></li>
										<?php if((isset($_SESSION['login_user'])) AND ($_SESSION['type']=="transporteur")) { ?>
                                        <li><a href="packs.php">Abonnez-vous</a></li>
										<?php } ?>

                                        <?php
                                             }
                                        ?>
						
                        <!--<li><a href="apropo.php">à Propos</a></li>-->
                        <li><a href="contact.php">Contactez-Nous</a></li>
			            
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
                        $("#position").append('<input type="text" id="r_s" name="r_s" placeholder="Raison Sociale">');
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
				//$( "input#r_s2" ).prop( "disabled", false );
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
				var text = document.getElementById("meNot");
				// If the checkbox is checked, display the output text
				if (checkBox.checked == false){
					text.style.display = "block";
				} 
				else {
					text.style.display = "none";
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
					
				var availableTags = [ "Douala", "Yaounde", "Garoua", "Bamenda", "Maroua", "Nkongsamba", "Bafoussam", "Ngaoundere", "Bertoua", "Loum", "Kumba", "Edea", "Kumbo", "Foumban", "Mbouda", "Dschang", "Limbe", "Ebolowa", "Kousseri", "Guider", "Meiganga", "Mbalmayo", "Bafang", "Tiko", "Bafia", "Wum", "Kribi", "Buea", "Sangmelima", "Foumbot", "Bangangte", "Batouri", "Banyo", "Nkambe", "Bali", "Mbanga", "Mokolo", "Melong", "Manjo", "Garoua-Boulaï", "Mora", "Kaele", "Tibati", "Ndop", "Akonolinga", "Eseka", "Mamfe", "Obala", "Muyuka", "Nanga-Eboko", "Abong-Mbang", "Fundong", "Nkoteng", "Fontem", "Mbandjock", "Touboro", "Ngaoundal", "Yokadouma", "Pitoa", "Tombel", "Kekem", "Magba", "Belabo", "Tonga", "Maga", "Koutaba", "Blangoua", "Guidiguis", "Bogo", "Batibo", "Yabassi", "Figuil", "Makenene", "Gazawa", "Tchollire"];                
					
					
				var availableTags1 = [ "Brazzaville", "Pointe-Noire", "Dolisie", "Nkayi", "Loandjili", "Ouesso", "Madingou", "Owando", "Gamboma", "Impfondo", "Sibiti", "Mossendjo", "Ngamaba-Mfilou", "Kinkala", "Makoua"];
					
					
					
				var availableTags2 = [ "Libreville", "Port-Gentil", "Franceville", "Oyem", "Moanda", "Mouila", "Lambarene", "Tchibanga", "Koulamoutou", "Makokou", "Bitam", "Tsogni", "Gamba", "Mounana", "Ntoum", "Nkan", "Lastourville", "Okondja", "Ndende", "Booue", "Fougamou", "Ndjole", "Mbigou", "Mayumba", "Mitzic", "Mekambo", "Lekoni", "Mimongo", "Minvoul", "Medouneu", "Omboue", "Cocobeach", "Kango" ];
					
	   
					
				var availableTags3 = [ "N'Djamena", "Moundou", "Sarh", "Abeche", "Faya-Largeau", "Koumra", "Kelo", "Mongo", "Pala", "Am Timan", "Ati", "Bongor", "Doba", "Mao", "Oum Hadjer", "Moussoro", "Bitkine", "Biltine", "Massaguet", "Dourbali", "Laï", "Lere", "Kyabe", "Massakory", "Bokoro", "Bousso", "Benoye", "Adre", "Ngama", "Bere", "Fianga", "Bol", "Moïssala", "Guelendeng", "Goundi", "Gounou Gaya", "Baïbokoum", "Aozou", "Beinamar", "Melfi", "Beboto", "Massenya" ];
					
							
					
				var availableTags4 = [ "Bangui", "Bimbo" , "Berberati" , "Carnot" , "Bambari" , "Bouar" , "Bria" , "Bossangoa" , "Nola" , "Bangassou" , "Boda" , "Sibut" , "Kaga-Bandoro" , "Mbaiki" , "Bozoum" , "Batangafo" , "Paoua" , "Ippy" , "Bocaranga" , "Kabo" , "Alindao" , "Yaloke" , "Baoro" , "Gamboula" , "Ndele" , "Dekoa" , "Bouca" , "Grimari" , "Bossembele" , "Kembe" , "Zemio" , "Mobaye" , "Kouango" , "Baboua" , "Damara" , "Birao", "Obo" ];
					
					
					
				var availableTags5 = [ "Bata", "Malabo", "Ebebiyín", "Aconibe", "Añisoc", "Luba", "Evinayong", "Mongomo", "Mengomeyen", "Mikomeseng", "Rebola", "Bidjabidjan", "Niefang", "Cogo", "Nsok", "San Antonio de Pale", "Mbini", "Nsork", "Ayene", "Nkimi", "Machinda", "Acurenam", "Corisco", "Baney", "Bicurga", "Nsang" ];
					
				select_s.backgroundImage = "url('./img/flags/cameroon.svg')";
				
				switch(select.selectedIndex) {
						

					case 0 :
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

					case 1 :
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
						
						

					case 2 :
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

					case 3 :
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

					case 4 :
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

					case 5 :
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
		<script type="text/javascript">jssor_1_slider_init();
		</script>
	</body>
</html>