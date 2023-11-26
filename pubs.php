<?php include"header.php"?>

<section class="page-title-section trouvtrans">
	<div class="container hidden-xs slide-bord">
		<div class="demo-slides">
			<div class="animated lightSpeedIn slide-title">Espace Publicité</div>
			<p class="lead animated lightSpeedIn">Gérer vos Pubs</p>
		</div>
	</div>
</section>
<?php 
	$selectSQL="SELECT * FROM pub";
	$resultat = mysqli_query($db,$selectSQL);
	$res=mysqli_fetch_array($resultat);
	$s=mysqli_num_rows($resultat); 
?>

<section class="contact-info-section">
	<div class="container ">

		<div class="row content-row">
			
			<div class="col-md-12">
				<div class="contact-map pub">
					<h3 class="txt-bordure sections-title">Résolusion des images 1920 x 500 </h3>
					
					<form id="update_pub" action="update_pub.php" method="POST" name="update_pub" enctype="multipart/form-data">
						<div class="form-group">
							<div class="row">
								<div class="col-sm-3 col-xs-12  no-padding left-title">Publicité 1</div>
								<div class="add-img col-sm-7 col-xs-12 no-padding previmg">
									<input id="image1" type="file" class="input-file" name="image1" onchange="readURL0(this);">
									<label for="image1" class="label-file"><span class="plus">+</span></label>
									<div class="imgs-prev">
									
									<img id="blah1" <?php if($res['image1']!=''){ echo"src='./img/pub/image1.jpg'";} else{ echo "src='./img/pub/none.jpg'";} ?> />
									<input class="hidden" type="text" id="img_1" name="img_1" value="<?php if($res['image1']!=''){ echo'image1';}?>" />
									<div class="label-del-file"><span class="fois" onclick="del_img(1)">+</span></div>
									</div>
								</div>
							</div>
							<br>
							
							<div class="row">
								<div class="col-sm-3 col-xs-12  no-padding left-title">Publicité 2</div>
								<div class="add-img col-sm-7 col-xs-12 no-padding previmg">
									<input id="image2" type="file" class="input-file" name="image2" onchange="readURL1(this);">
									<label for="image2" class="label-file"><span class="plus">+</span></label>
									<div class="imgs-prev">
									<img id="blah2" <?php if($res['image2']!=''){ echo"src='./img/pub/image2.jpg'";} else{ echo "src='./img/pub/none.jpg'";} ?> />
									<input class="hidden" type="text" id="img_2" name="img_2" value="<?php if($res['image2']!=''){ echo'image2';}?>" />
									<div class="label-del-file"><span class="fois" onclick="del_img(2)">+</span></div>
									</div>
								</div>
							</div>
							
							<br>
							<div class="row">
								<div class="col-sm-3 col-xs-12  no-padding left-title">Publicité 3</div>
								<div class="add-img col-sm-7 col-xs-12 no-padding previmg">
									<input id="image3" type="file" class="input-file" name="image3" onchange="readURL2(this);">
									<label for="image3" class="label-file"><span class="plus">+</span></label>
									<div class="imgs-prev">
									<img id="blah3" <?php if($res['image3']!=''){ echo"src='./img/pub/image3.jpg'";} else{ echo "src='./img/pub/none.jpg'";} ?> />
									<input class="hidden" type="text" id="img_3" name="img_3" value="<?php if($res['image3']!=''){ echo'image3';}?>" />
									<div class="label-del-file"><span class="fois" onclick="del_img(3)">+</span></div>
									</div>
								</div>
							</div>
						</div>
						
						
						<div class="col-xs-1 form pull-right hidden-xs">
							<div class="res-flx petit ">
								<input type="submit" value="Postuler">
							</div>
						</div>
						
						<div class="col-xs-12 form hidden-lg hidden-sm hidden-md">
							<div class="res-flx petit ">
								<input type="submit" value="Postuler">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>		
			


<?php include"footer.php"?>