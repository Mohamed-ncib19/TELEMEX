
<?php 
    include("config.php");
    session_start();
	header("Content-Type: text/html;charset=UTF-8");

?>


<html>
	<head>
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	    <meta name="description" content="transport afrique">
	    <meta name="author" content="telefret-afrique">

		<meta http-equiv="Content-language" content="fr" />
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta charset="UTF-8">


	    <title>TELEFRET</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        

    <link href="js/datatable/bootstrap.min.css" rel="stylesheet">
    <link href="js/datatable/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="js/datatable/buttons.bootstrap.min.css" rel="stylesheet">

    <link href='DataTables/datatables.min.css' rel='stylesheet' type='text/css'>

<!-- jQuery Library -->
<script type="text/javascript" src="js/datatable/jquery-3.5.1.js"></script>

<!-- Datatable JS -->
<script src="DataTables/datatables.min.js"></script>


	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="fonts/flaticon/flaticon.css" rel="stylesheet">
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/hippo-off-canvas.css" rel="stylesheet">
	    <link href="css/animate.css" rel="stylesheet">
	    <link href="css/language-select.css" rel="stylesheet">
	    <link href="owl.carousel/assets/owl.carousel.css" rel="stylesheet">
	    <!-- auto complete -->
	  <link href="content/styles.css" rel="stylesheet" /> 
	     <!-- fin auto complete -->
    	<link href="css/magnific-popup.css" rel="stylesheet">
    	<link href="css/menu.css" rel="stylesheet">
    	<link href="css/template.css" rel="stylesheet">
	    <link href="css/style.css" rel="stylesheet">
	    <link href="css/responsive.css" rel="stylesheet">
        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <style>
	.autocomplete-suggestions { border: 1px solid #999; background: #FFF; overflow: auto; }
	  .autocomplete-suggestion { padding: 2px 5px; white-space: nowrap; overflow: hidden; }
	  .autocomplete-selected { background: #F0F0F0; }
	  .autocomplete-suggestions strong { font-weight: normal; color: #3399FF; }
	  .autocomplete-group { padding: 2px 5px; }
	  .autocomplete-group strong { display: block; border-bottom: 1px solid #000; }
	</style>
        
        <script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
         <script src="https://www.google.com/recaptcha/api.js" async defer></script>
	    <script src="js/vendor/modernizr-2.8.1.min.js"></script>
        
        <script type="text/javascript">


function validsuivi(id_notification) {
     
     $.ajax({
         type: "post",
         url: "change_statusgps.php?id_charg=" <?php echo $_GET['id_charg'];?> ,
         'data':{"id_abonnement":id_notification},
                                 'success': function(data) {

                                     $("#"+'tablelinesuivi'+id_notification).removeClass("testclassvalid");
                                     $("#"+'tablelinesuivi'+id_notification).addClass("testclass");
                                     $("#btssuivi"+id_notification).html(suivi?"Activer":"Désactiver");   

                                 },
                                 'error': function(data) {
                                     console.log(data)
                                 }
       
     });
 }
// function submitCheck(id_notification) {

// var form = $('#postuler'+id_notification)[0];

// // Create an FormData object 
// var data = new FormData(form);

// console.log("datadatadatadatadatadatadatadatadata",'#postuler'+id_notification,data,$('#postuler'+id_notification)[0])
// params   = $('#postuler'+id_notification).serializeArray();

// var formData = new FormData($('#postuler'+id_notification)[0]);
// var isValid=0;
// var ToControle=0;
// $.each(params, function(i, val) {
// console.log(val.name, val.value)
// if (val.name=="check[]" && val.value=="1" ) {
// isValid=isValid+1
// }
// if (val.name=="ToControle" ) {
//     ToControle=val.value;
// }

// });
// if (ToControle>0) {
    
// }

// if (isValid>0) {
// console.log("okcool")
// $("#btnSubmit"+id_notification).prop( "disabled", false );
// }else{
// $("#btnSubmit"+id_notification).prop( "disabled", true );

// }
 
// }

function submitCheck(id_notification) {

    var form = $('#postuler'+id_notification)[0];
 
 // Create an FormData object 
  var data = new FormData(form);

    console.log("datadatadatadatadatadatadatadatadata",'#postuler'+id_notification,data,$('#postuler'+id_notification)[0])
    params   = $('#postuler'+id_notification).serializeArray();

    var formData = new FormData($('#postuler'+id_notification)[0]);
    var isValid=0;
    var ToControle=0;
$.each(params, function(i, val) {
    console.log(val.name, val.value)
if (val.name=="check[]" && val.value=="1" ) {
    isValid=isValid+1
}
if (val.name=="ToControle") {
    ToControle=val.value;
}

});
        if (ToControle==0) {


if (isValid>0) {
    console.log("okcool")
    $("#btnSubmit"+id_notification).prop( "disabled", false );
}else{
    $("#btnSubmit"+id_notification).prop( "disabled", true );

}
        }else{

            console.log(ToControle)
            $("#btnSubmit"+id_notification).prop( "disabled", false );

        }
  
     
 }
 
 function functionConfirm(msg, myYes, myNo) {
                var confirmBox = $("#confirm");
                confirmBox.find(".message").text(msg);
                confirmBox.find(".yes,.no").unbind().click(function() {
                        confirmBox.hide();
                            });
                        confirmBox.find(".yes").click(myYes);
                        confirmBox.find(".no").click(myNo);
                        confirmBox.show();
            }

            function DeleteChargement(id_disp) {
    functionConfirm("Voulez vous continuez?", function yes() {
        $.ajax({
         type: "post",
         url: "supp-charg-ajax.php",
         'data':{"id_charg":id_disp},
                                 'success': function(data) {

                                     $("#"+'tablelinechargement'+id_disp).addClass("hidden");


                                 },
                                 'error': function(data) {
                                     console.log(data)
                                 }
       
     });
            },
            function no() {
            
            });
            
               
 }

 function DeleteAbonnements(id_disp) {
    functionConfirm("Voulez vous continuez?", function yes() {
        $.ajax({
         type: "post",
         url: "supp-abmt-ajax.php",
         'data':{"id_abn":id_disp},
                                 'success': function(data) {

                                     $("#"+'tablelineAbonnements'+id_disp).addClass("hidden");


                                 },
                                 'error': function(data) {
                                     console.log(data)
                                 }
       
     });
            },
            function no() {
            
            });
            
               
 }
 function DeleteCompte(id_disp) {
    functionConfirm("Voulez vous continuez?", function yes() {
        $.ajax({
         type: "post",
         url: "supp-compte-ajax.php",
         'data':{"telephone":id_disp},
                                 'success': function(data) {

                                     $("#"+'tablelinecompte'+id_disp).addClass("hidden");
                                     $("#"+'tablelinecompteA'+id_disp).addClass("hidden");


                                 },
                                 'error': function(data) {
                                     console.log(data)
                                 }
       
     });
            },
            function no() {
            
            });
            
               
 }

 function Deletebancompte(id_disp) {
    functionConfirm("Voulez vous continuez?", function yes() {
        $.ajax({
         type: "post",
         url: "ban-compte-ajax.php",
         'data':{"telephone":id_disp},
                                 'success': function(data) {

                                     $("#"+'tablelinecompte'+id_disp).addClass("hidden");
                                     $("#"+'tablelinecompteA'+id_disp).addClass("hidden");


                                 },
                                 'error': function(data) {
                                     console.log(data)
                                 }
       
     });
            },
            function no() {
            
            });
            
               
 }

 function Deleteunbancompte(id_disp) {
    functionConfirm("Voulez vous continuez?", function yes() {
        $.ajax({
         type: "post",
         url: "unban-compte-ajax.php",
         'data':{"telephone":id_disp},
                                 'success': function(data) {

                                     $("#"+'tableline'+id_disp).addClass("hidden");


                                 },
                                 'error': function(data) {
                                     console.log(data)
                                 }
       
     });
            },
            function no() {
            
            });
            
               
 }

            function DeleteNotification(id_disp) {
    functionConfirm("Voulez vous continuez?", function yes() {
        $.ajax({
         type: "post",
         url: "supp-notification_ajax.php",
         'data':{"id_notification":id_disp},
                                 'success': function(data) {

                                     $("#"+'tableline'+id_disp).addClass("hidden");


                                 },
                                 'error': function(data) {
                                     console.log(data)
                                 }
       
     });
            },
            function no() {
            
            });
            
               
 }
 function DeleteNotification(id_disp) {
    functionConfirm("Voulez vous continuez?", function yes() {
        $.ajax({
         type: "post",
         url: "supp-disp-ajax.php",
         'data':{"id_disp":id_disp},
                                 'success': function(data) {

                                     $("#"+'tablelinedispo'+id_disp).addClass("hidden");


                                 },
                                 'error': function(data) {
                                     console.log(data)
                                 }
       
     });
            },
            function no() {
            
            });
            
               
 }


    function Changetest(id_notification) {
     
        $.ajax({
            type: "post",
            url: "change_notification_status.php",
            'data':{"id_notification":id_notification},
                                    'success': function(data) {

                                        $.ajax({
            type: "post",
            url: "get_notification.php",
            'data':{"id_notification":id_notification},
                                    'success': function(data) {
                                        console.log("==============================0000",data);
                                        $("#nbrnotification").text(data)
                                        $("#"+'tableline'+id_notification).removeClass("testclass");
                                        $("#"+'tableline'+id_notification).addClass("testclassvalid");

                                    },
                                    'error': function(data) {
                                        console.log(data)
                                        
                                    }
          
        });
                                    },
                                    'error': function(data) {
                                        console.log(data)
                                    }
          
        });
    }
             function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah')
                            .attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            function readURLC1(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#blah1')
                            .attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            function readURLC2(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#blah2')
                            .attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            function readURLC3(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#blah3')
                            .attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
			
			function readURL0(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah1').attr('src', e.target.result);
						$("#img_1").attr("value", "image1");
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
			
			function readURL1(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah2').attr('src', e.target.result);
						$("#img_2").attr("value", "image2");
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
			
			function readURL2(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah3').attr('src', e.target.result);
						$("#img_3").attr("value", "image3");
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
			
			function del_img(a){
				$("#blah"+a).attr("src", "./img/pub/none.jpg");
				$("#img_"+a).attr("value", "");
			}
        </script>   

		<!--Start of Tawk.to Script-->

<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5fdaff6adf060f156a8de1cd/1epnnbe11';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

<!--End of Tawk.to Script-->

<!--Start whatsapp-->
<script async data-id="70985" src="https://cdn.widgetwhats.com/script.min.js"></script>

<style>
    .dataTables_wrapper {
        overflow-x: auto!important;
    }
    .testclass{
        background-color: rgba(200,16,16,0.1)!important;
    }
    .testclassvalid{
        background-color: rgba(25,184,53,0.1)!important;
    }
    .btn-group, .btn-group-vertical {
    
   display: unset!important; 
}
table.dataTable,.dataTables_wrapper {
    width: 100%!important;
    }
</style>
<!--Start of whatsapp-->
        
	    <!--[if lt IE 9]>
		    <script src="js/vendor/html5shim.js"></script>
		    <script src="js/vendor/respond.min.js"></script>
	    <![endif]-->
        
	</head>


	<!-- <body id="page-top"
     onload="changePays(1); changePays(6); changePays(7); changePays(8); changePays(9);" onscroll="changePays(2); changePays(3); changePays(4); changePays(5);"
    > -->
    <body id="page-top"
    >
    <style>
            #confirm {
                display: none;
                background-color: #fff;
                border: 2px solid #e9ecef;
    border-top-left-radius: 0.3rem;
    border-top-right-radius: 0.3rem;                position: fixed;
                width: 250px;
                height: 150px;
                left: 50%;
                margin-left: -100px;
                margin-top:100px;
                padding: 8px;
                box-sizing: border-box;
                text-align: center;
                z-index: 99999;
            }
        #confirm button {
            background-color: #fff;
            display: inline-block;
            border-radius: 5px;
            border: 1px solid #aaa;
            padding: 5px;
            text-align: center;
            width: 80px;
            cursor: pointer;
            margin-top: 50px;
        }
        #confirm .message {
            text-align: left;
        }
        </style>

    <div id="confirm">
            <div class="message"></div>
            <button class="yes" style="cusor:pointer;background-color:#f4d1d1!important ;">Yes</button>
            <button class="no danger" style="cusor:pointer;">No</button>
        </div>
        

		<div id="st-container" class="st-container">
		    <div class="st-pusher">
	        	<div class="st-content">
				  	<header class="header">
				  		<nav class="top-bar">
				  			<div class="overlay-bg">
					  			<div class="container">
					  				<div class="row">
					  					<div class="col-lg-5 col-md-5  col-xs-12">
						  					<div class="call-to-action">
						  						<ul class="list-inline">
												
                                                    <?php
                                                        if((isset($_SESSION['login_user'])) AND ($_SESSION['type']!="admin")) {
															 ?>
															 
															 <li><a href="historique_client.php?telephone=<?php echo $_SESSION['telephone'] ?>" class="hidden-xs">Mon historique</a></li>
													<?php
                                                            if ($_SESSION['type']=="transporteur"){
                                                    ?>
														
						  							            <li><a href="abonnement.php" class="hidden-xs">Mes véhicules</a></li>
															<?php 
															} 
                                                            $type=$_SESSION['type'];
                                                            $tel=$_SESSION['telephone'];
                                                            $select="";
                                                          

                                                            if($type=="transporteur"){
                                                                // $select .= "and  ( chargement.telephone = transporteur.telephone and postuler.telephone = '$tel'  and  notifications.to_telephone='$tel'  )   ";
                                                                $select .= "  and notifications.statut=0  and  ( chargement.telephone = transporteur.telephone  and ( (notifications.telephone = '$tel' and notifications.type !='Soumission')   or notifications.to_telephone = '$tel'  ) )   ";

                                                            }else
                                                            if($type=="client"){
                                                                $select .= "and  chargement.telephone = transporteur.telephone and notifications.type='Soumission' and transporteur.telephone='$tel' ";
                                                            }else {
                                                                $select .= "and ( chargement.telephone = transporteur.telephone or postuler.telephone = transporteur.telephone)  ";
                                                            }



                                                            $empQuery = "select *,notifications.telephone as telephonenotifications,notifications.id as id_notifications ,postuler.id as id_postuler ,chargement.telephone as chargement_telephone from chargement, transporteur  ,postuler ,notifications   WHERE 1 and notifications.id_postuler=postuler.id and postuler.id_chargement=chargement.id_charg and notifications.statut=0 ".$select."  GROUP BY notifications.id  ";
                                                            $empRecords = mysqli_query($db, $empQuery);

                                                            $totalRecordwithFilter = mysqli_num_rows($empRecords); 
															?>
															
														
															<li><a href="https://gestionsuivi.telefret.com" target="_blank">Suivi</a></li>

                                                            <li><a href="notifications.php" >Mes Notifications <span class="badge " style="background-color: #e71010;" id="nbrnotification"><?php echo $totalRecordwithFilter; ?></span></a></li>

															
                                                    <?php
                                                        }
                                                    ?>
                                                    
                                                    <?php
                                                        if(!isset($_SESSION['login_user'])) {
													?>
															<li class="pull-right"><a data-toggle="modal" data-target="#inscription" class="hidden-lg hidden-md">S'inscrire</a></li>
                                                    <?php
                                                            if(!empty($_GET['message'])) {
																echo "<li class='pull-right'><a id='logintest' data-toggle='modal' data-target='#login' class='hidden-lg hidden-md'>Réessayer</a></li>" ; 
                                                            }
															else if(!empty($_GET['verif'])) {
																echo "<li class='pull-right'><a id='logintest' data-toggle='modal' data-target='#login' class='hidden-lg hidden-md'>Vérifier votre compte</a></li>" ;
                                                            }
                                                            else{

                                                    ?>
																<li class="pull-right"><a id='logintest' data-toggle="modal" data-target="#login" class="hidden-lg hidden-md">Connexion</a></li>
															<?php
															}
                                                        }
														else{
															?>    
															<li class="hidden-md hidden-lg"><a href="logout.php"> 
																<?php 
																if(($_SESSION['genre'])=="particulier") {
																	echo $_SESSION['nom'];  
																} 
																else {
																	echo $_SESSION['r_s'] ;
																} 
																?> 

                                                            Deconnexion</a></li>  
                                                    <?php
                                                    }
                                                    ?>
                                                    
                                                    
						  							
						  							
						  						</ul>
						  					</div>
					  					</div>

					  					<div class="col-lg-7 col-md-7 hidden-xs hidden-sm">
                                            <div class="topbar-right">
                                                <ul class="social-links list-inline pull-right">
                                                    <i class="fa fa-phone"></i> +237 655 767 535 &nbsp; 
                                                    <i class="fa fa-envelope"></i>commercial@telemex.cm &nbsp;
                                                    <li><a href="callto:80081"><i class="fa fa-skype"></i></a></li>
                                                    <li><a href="https://www.facebook.com/telefretcom"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="https://wa.me/+237655767535"><i class="fab fa-whatsapp"></i></a></li>
                                                    
                                                </ul>
 
                                            </div>
					  					</div>
						  				
					  				</div>
					  			</div>
				  			</div>
				  		</nav>
						
						<nav class="navbar navbar-default" role="navigation">
							
							<div class="container mainnav">
								<div class="navbar-header">
									<div class="logo"><a class="navbar-brand" href="index.php"><img class="slogo" src="img/logo.png" alt=""></a></div>
									<button type="button" class="navbar-toggle collapsed pull-right hidden-lg hidden-sm hidden-md " >
			                          <span class="sr-only">Toggle navigation</span>
			                          <i class="fa fa-bars"></i>
			                        </button>
								</div>

								<div class="collapse navbar-collapse navbar-collapse">
									<ul class="nav navbar-nav pad-l-30 navsze">
                                    
                                        <?php 
                                            if  (isset($_SESSION['login_user'])) { 
                                                
                                                if ($_SESSION['type']=='admin'){
                                        ?> 
                                                    <li><a href="index-admin.php">Espace Admin</a></li> 
													
													<li><a href="pubs.php">Espace Publicités</a></li> 
                                                    
                                                    <li><a href="https://gestionsuivi.telefret.com" target="_blank">Suivi</a></li>

                                       <?php 
                                                }
    
                                                else if($_SESSION['type']=='transporteur'){ 
                                        ?>
                                        
                                                    <li><a href="espace-transporteur.php">Espace Commercial</a></li> 
													<li><a href="espace-client.php">Espace Expediteurs</a></li>
													<!--<li><a href="mon-compte.php">Mon compte</a></li>-->
                                        
                                       <?php    
                                                }
                                                else if($_SESSION['type']=='client'){ 
                                        ?>
                                        
                                                    <li><a href="espace-client.php">Espace Expediteurs</a></li>
													<!-- <li><a href="mon-compte.php">Mon compte</a></li>-->
                                       <?php        
                                                } 
                                            }
                                        
                                            else {
                                        ?>
                                            <li><a href="espace-transporteur.php">Espace Commercial</a></li>
                                            <li><a href="espace-client.php">Espace Expediteurs</a></li>
                                        <?php
                                            }
                                        ?>             
										
										<!-- <li><a href="apropo.php">à Propos</a></li>-->
										<li><a href="contact.php">Contactez-nous</a></li>
									</ul>
                                    <ul class="nav navbar-nav pad-l-30 navsze pull-right right-nav hidden-sm">
                                        
                                        <?php
                                            if(! isset($_SESSION['login_user'])) {
                                                ?>
                                                <li><a data-toggle='modal' data-target='#inscription' href='#'>S'inscrire</a></li>
                                        <?php
                                                if(!empty($_GET['message'])) {
                                                    echo "<li><a data-toggle='modal' data-target='#login' href='#'>Réessayer</a></li>" ; 
                                                }
												else if(!empty($_GET['verif'])) {
													echo "<li><a data-toggle='modal' data-target='#login' href='#'>Vérifier votre compte</a></li>" ;
												}
                                                else{
                                        ?>
                                            <li><a data-toggle="modal" data-target="#login" href='#'>Connexion</a></li>
                                        <?php
                                            }
                                            }
                                        else{
                                        ?>    
                                            <li><a href="logout.php"> 
                                                <?php if(($_SESSION['genre'])=="particulier") { 
                                                          echo $_SESSION['nom'] ; 
                                                      } else { 
                                                          echo $_SESSION['nom'] ;} 
                                                ?> 
                                                
                                                Deconnexion</a></li>  
                                        <?php
                                        }
                                        ?>
                                    </ul>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.container -->
  
							<div class="modal fade fond" id="login" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">
							  <div class="w-50">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							      </div>
							      <div class="modal-body">
                                      <section class="packs-setion">
                                            <div class="flxrow form-group">
                                                <div class="row text-center">
                                                    <div class="col-xs-12">
														<span class="section-sub sections-title">
														
															<?php 
															if(!empty($_GET['verif'])) {
																echo "Vérifier votre compte" ;
															} 
															else {
																echo "Connectez Vous" ;
															} 
															?>
														
														</span>
														<?php
                                                        if(!empty($_GET['message'])) {
															echo "<br><br><span class=''>". $_GET['message'] ."</span>" ; 
														}
														else if(!empty($_GET['verif'])) {
															echo "<br><br><span class=''>". $_GET['verif'] ."</span>" ; 
														}
														?>	
                                                        <br>
                                                        <br>
                                                    </div>
                                                </div>
                                                
                                                <div class="row form w80">
                                                   <! --Pour test Yannick -->
                                                    <form name="login" action="login.php" method="POST">
                                                        <div class="col-sm-12">
                               
                                                            Choisiez la methode 
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="col-md-6">
                                                                <label>
                                                                  
                                                         <p><input type='radio' name='content_type' value='1' checked/>&nbsp;Téléphone&nbsp;&nbsp;&nbsp;&nbsp;
                                                         <input type='radio' name='content_type' value='2' />&nbsp;Email</p>

                                                            </div>
                                                           <!-- <div class="desc">
                                                             <select type='text' name='indicatif' id='pays1' required onchange='changePays(1)'><option value='00237'  no-repeat; width:30px; height:30px selected>Cameroun</option><option value='Congo' no-repeat; width:30px; height:30px;'>Congo</option><option value='Gabon'  no-repeat; width:30px; height:30px;'>Gabon</option><option value='Tchad' no-repeat; width:30px; height:30px;'>Tchad</option><option value='République centrafricaine'  no-repeat; width:30px; height:30px;'>République centrafricaine</option><option value='Guinée équatoriale'  no-repeat; width:30px; height:30px;'>Guinée équatoriale</option><option value='00216' no-repeat; width:30px; height:30px;'>Tunisie</option></select></div><input type='text' id='telephone' name='telephone' placeholder='Numéro de Téléphone sans indicatif *' required></div>
       
                                                             <input type='text' id='user' name='user' placeholder='Email *' required> -->
                                                            </div>
                                                            <div id='show'>
                                                             <select type="text" name="indicatif" id="pays1" required onchange="changePays(1)">
                                                             <option value="00237"  no-repeat; width:30px; height:30px selected>Cameroun</option>
                                                             <option value="00242" no-repeat; width:30px; height:30px ;>Congo</option>
                                                             <option value"00241"  no-repeat; width:30px; height:30px;>Gabon</option>
                                                             <option value="00235" no-repeat; width:30px; height:30px;>Tchad</option>
                                                             <option value="00236"  no-repeat; width:30px; height:30px;>République centrafricaine</option>
                                                             <option value="00240"  no-repeat; width:30px; height:30px;>Guinée équatoriale</option>
                                                             <option value="00216" no-repeat; width:30px; height:30px;>Tunisie</option>
                                                             </select>
                                                             <input type="text" id="telephone" name="telephone" placeholder="Numéro de Téléphone sans indicatif *" required>
                                                            </div>
                                                            <!-- je suis ici -->
                                                             
                                                         
                                                        <div class="col-sm-12">
                                                            <input type="password" name="passwd" placeholder="Mot de Passe" required> 
                                                        </div>
                                                        
                                                       
														<?php
                                                        if(!empty($_GET['verif'])) {
														?>
															<div class="col-sm-12">
																<input type="text" pattern="[0-9]{4}" name="verifcode" placeholder="Code de Vérification de Tél | Email" required>
															</div>
														<?php
														}
														?>
                                                        <div class="col-sm-12 regle-form">
															<?php
															if(!empty($_GET['verif'])) {
															?>
																<a href = "javascript:;" target=_blank onclick = "this.href='sendcode.php?tel=' + document.getElementById('user').value">Cliquer ici pour renvoyer le code</a><br>
															<?php
															}
															?>
															<a href="sendpass.php">Mot de Passe oublié ?</a><br>
															<a href="#" data-toggle="modal" data-target="#inscription" >Vous n'avez pas de compte ? inscrivez vous </a>
															<input class="pull-right" type="submit" value="Connexion">
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </section>
							         </div>
							    </div>
							  </div>
							</div>
							
							<div class="modal fade fond" id="modifmodal" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">
							  <div class="w-50">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							      </div>
							      <div class="modal-body">
                                      <section class="packs-setion">
                                            <div class="flxrow form-group">
                                                <div class="row text-center">
                                                    <div class="col-xs-12">
														<span class="section-sub sections-title">
														
															<?php 
															if(!empty($_GET['success'])) {
																echo "<br>Changement Réussi" ;
															} 
															?>
															
															<?php 
															if(!empty($_GET['ban'])) {
																echo "<br>Compte Banni" ;
															} 
															?>
															
															<?php 
															if(!empty($_GET['ok'])) {
																echo "<br>Poste Réussi" ;
															} 
															?>
															
															<?php 
															if(!empty($_GET['error'])) {
																echo "<br>Erreur" ;
															} 
															?>
														
														</span>
														<?php
                                                        if(!empty($_GET['success'])) {
															echo "<br><br><span class=''>". $_GET['success'] ."</span>" ; 
														}
														?>
														
														<?php
                                                        if(!empty($_GET['ban'])) {
															echo "<br><br><span class=''>". $_GET['ban'] ."</span>" ; 
														}
														?>
														
														<?php
                                                        if(!empty($_GET['ok'])) {
															echo "<br><br><span class=''>". $_GET['ok'] ."</span>" ; 
														}
														?>
														
														<?php
                                                        if(!empty($_GET['error'])) {
															echo "<br><br><span class=''>". $_GET['error'] ."</span>" ; 
														}
														?>	
                                                        <br>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
							         </div>
							    </div>
							  </div>
							</div>
							
							<div class="modal fade fond" id="inscription" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">
							  <div class="w-50">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							      </div>
							      <div class="modal-body">
                                      <section class="packs-setion">
                                            <div class="flxrow form-group">
                                                <div class="row text-center">
                                                    <div class="col-xs-12">
                                                      <span class="section-sub sections-title">Inscription</span>
                                                        <br>
                                                        <br>
                                                    </div>
                                                </div>
                                                
                                                <div class="row form w80">
                                                    <form name="inscription" action="inscription.php" method="POST">
                                                        
                                                        <div class="col-md-12">
                                                            Vous êtes : 
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                        <div class="col-md-6">
                                                                <label>
                                                                  <input type="radio" name="type" value="transporteur"> Transporteur
                                                                  <span class="checkmark"></span>
                                                                </label>
                                                            </div> 
                                                        
                                                        
                                                        <div class="col-md-6">
                                                                 <label>
                                                                  <input type="radio"  checked="checked"  name="type" value="client"> Expéditeur
                                                                  <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <!-- <div class="col-md-6">
                                                            <label>
                                                                  <input type="radio"  checked="checked"  name="genre" value="particulier" id="particulier"> Particulier
                                                                  <span class="checkmark"></span>
                                                                </label>
                                                                
                                                            </div>
                                                        </div>
                                                       <div class="col-md-12"> -->
                                                          
                                                            <!-- <div class="col-md-6">
                                                                <label>
                                                                  <input type="radio"  name="genre" value="entreprise" id="entreprise"> Entreprise
                                                                  <span class="checkmark"></span>
                                                                </label>
                                                            </div> -->
                                                        </div>
                                                        
                                                        <div class="col-sm-12">
                                                            <input type="text" name="nom" placeholder="Nom *" required>
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <input type="text" name="prenom" placeholder="Prenom *" required>
                                                        </div>
                                                        
                                                        
                                                        <div class="col-sm-12">
                                                            <input type="text" name="r_s" placeholder="Entreprise *" required>
                                                        </div>
                                                        
                                                        
                                                        <div class="col-sm-12">
                                                            <select type="text" name="indicatif" id="pays1" placeholder="Pays *" required onchange="changePays(1)">
                                                                <option value="00237" style="background:url('./img/flags/cameroon.svg') no-repeat; width:30px; height:30px;" selected>Cameroun</option>
                                                                <option value="00242" style="background:url('./img/flags/congo.svg') no-repeat; width:30px; height:30px;">Congo</option>
                                                                <option value="00241" style="background:url('./img/flags/gabon.svg') no-repeat; width:30px; height:30px;">Gabon</option>
                                                                <option value="00235" style="background:url('./img/flags/chad.svg') no-repeat; width:30px; height:30px;">Tchad</option>
                                                                <option value="00236" style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">République centrafricaine</option>
                                                                <option value="00240" style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">Guinée équatoriale</option>
                                                                <option value="00216" style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">Tunisie</option>
                                                               
                                                               
                                                            </select>
                                                        </div>
                                                        
                                                        <div class="col-sm-12">
                                                            <input type="text" name="telephone" id="telephone" placeholder="Renseignez votre numéro de téléphone sans indicatif*" required>
                                                            Exemple 65655556
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <input type="text" name="adresse" placeholder="Ville *" required>
                                                        </div>
                                                        
                                                        <div class="col-sm-12">
                                                            <input type="email" name="mail" placeholder="E-mail"  >
                                                        </div>

                                                         <div class="col-sm-12">
                                                            <input type="password" name="passwd" pattern="^\S{6,}$" placeholder="Mot de Passe *" onchange="this.setCustomValidity(this.validity.patternMismatch ? '6 caractère au minimum' : ''); if(this.checkValidity()) form.confirm.pattern = this.value;" required>
                                                        </div>
														
														<div class="col-sm-12">
															<input type="password" id="confirm1" name="confirm" placeholder="Confirmer le mot de passe *" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'vérifier le mot de passe' : '');" required />
                                                        </div>
                                                        	<br>
														<div class"col-sm-12"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="subscribeNews" required > &nbsp; J'ai lu et j'accepte <a href="https://telefret.com/condition.php">les conditions générales </a></div>
                                                        <br>
                                                        <div class="col-sm-12">
														<div class="g-recaptcha" data-sitekey="6LfAXwoaAAAAAL4Bp-qVHLhXLzBW-uYcUykT9592" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div> 
														</div><input class="pull-right" type="submit" value="Valider">
													
                                                            
														
														
                                                        
                                                       
                                                    </form>
                                                </div>

                                            </div>
                                        </section>
							         </div>
							    </div>
							  </div>
							</div>
							
						</nav>
					</header>
                    
                    <!-- **************************************************** CREDIT CARD **************************************************** -->
                    
                    <div class="modal fade fond" id="creditcard" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">
                      <div class="w-80">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          </div>
                          <div class="modal-body">
                            <section class="packs-setion">
                                <div class="flxrow">
                                    <div class="row text-center">
                                    <div class="col-xs-12">
                                      <span class="section-sub sections-title">Commandez l'un de nos pack</span>
                                        <br>
                                        <br>
                                      <p>Nous mettons a votre disposition 3 packs, vous pouvez choisir ce qui vous conviens.</p>
                                    </div>
                                  </div>
                                    <div class="col-xs-12"></div>
                                    <div class="pack">
                                        <form class="form" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                                            <div class="head-pack">Classique</div>
                                            <div class="cont-pack">
                                                <span class="txt-pack">Abonnement 3 mois</span>
                                                <span class="prix">60 €</span>
                                                <span class="txt-pack">20 € HT/mois par Matricule</span>
                                                
                                                <span class="txt-pack padd-t-30">

                                                    <input type="hidden" name="cmd" value="_s-xclick">
                                                    <input type="hidden" name="hosted_button_id" value="4H2BE3YTSHC3E">

                                                    <input type="submit" value="Commander" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                                                </span>

                                            </div>
                                        </form>
                                    </div>
                                    <div class="pack ">
                                        <form class="form" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                                            <div class="head-pack">Pro</div>
                                            <div class="cont-pack">
                                                <span class="txt-pack">Abonnement 6 mois</span>
                                                <span class="prix">108 €</span>
                                                <span class="txt-pack">18 € HT/mois par Matricule </span>
                                                
                                                <span class="txt-pack padd-t-30">

                                                    <input type="hidden" name="cmd" value="_s-xclick">
                                                    <input type="hidden" name="hosted_button_id" value="38QHMED63M68S">

                                                    <input type="submit" value="Commander" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                                                </span>

                                            </div>
                                        </form>
                                    </div>
                                    <div class="pack">
                                        <form class="form" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                                            <div class="head-pack">Performance</div>
                                            <div class="cont-pack">
                                                <span class="txt-pack">Abonnement Annuelle</span>
                                                <span class="prix">180 €</span>
                                                <span class="txt-pack">15 € HT/mois par Matricule</span>
                                                
                                                <span class="txt-pack padd-t-30">

                                                    <input type="hidden" name="cmd" value="_s-xclick">
                                                    <input type="hidden" name="hosted_button_id" value="WSXD2EME3LCN4">

                                                    <input type="submit" value="Commander" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                                                </span>

                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </section>
                            </div>
                          </div>
                        </div>
                    </div>
                    
                    <!-- **************************************************** FLOTTE POPUP **************************************************** -->
                    
                    <div class="modal fade fond" id="flotte" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">
                      <div class="w-80">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          </div>
                          <div class="modal-body">
                            <section class="packs-setion">
                                <div class="flxrow">
                                    <div class="row text-center">
                                        <div class="col-xs-12">
                                            <span class="section-sub sections-title"> Paiement par virement bancaire </span>
                                            <br>
                                            <br>
                                            <p>Vous pouvez par virement bancaire par RIB ou Moneygram ou Western Union.</p>
                                        </div>
                                      </div>
                                    <div class="col-xs-12"></div>
                                    
                                    <div class="packflotte"> 
                                        <a class="head-pack h30" href="#" >RIB</a>
                                        <div class="img-pack"><img src="img/credit-card.png"/></div>
                                    </div>
                                    
                                    <div class="packflotte"> 
                                        <a class="head-pack h30" href="#" >Moneygram</a>
                                        <div class="img-pack"><img src="img/moneygram.png"/></div>
                                    </div>
                                    
                                    <div class="packflotte"> 
                                        <a class="head-pack h30" href="#" >Western Union</a>
                                        <div class="img-pack"><img src="img/western.png"/></div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="cont-pack">
                                            <span class="txt-pack">TELEFRET</span>
                                            <span class="txt-pack">10034  11008  91665820008  20</span>
                                            <span class="txt-pack">Banque Atlantique Cameroun</span>
                                            <span class="txt-pack">Douala, Cameroun</span>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            </div>
                          </div>
                        </div>
                    </div>
                    
                    <!-- ************************************************* MOBILE MONEY ************************************************** -->
                    
                    <div class="modal fade fond" id="mobilemoney" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">
                      <div class="w-80">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          </div>
                          <div class="modal-body">
                            <section class="packs-setion">
                                <div class="flxrow">
                                    <div class="row text-center">
                                        <div class="col-xs-12">
                                            <span class="section-sub sections-title"> Mobile Money </span>
                                            <br>
                                            <br>
                                        </div>
                                      </div>
                                    <div class="col-xs-12"></div>
                                    
                                    <div class="packmobilemoney"> 
                                        <img src="img/mobilemoney.jpg">
                                    </div>
                                    
                                    
                                    <div class="col-xs-12">
                                        <div class="cont-pack">
                                            <!--<span class="txt-pack">TELEFRET</span>-->
                                            <span class="txt-pack">Pour le Cameroun ,envoyer vers le numéro:</span>
                                            <span class="txt-pack">656659384</span>
                                            <!--<span class="txt-pack">+23790465196</span>-->
                                        </div>
                                    </div>
                                </div>
                            </section>
                            </div>
                          </div>
                        </div>
                    </div>