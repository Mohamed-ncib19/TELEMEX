<?php include"header.php" ?>


    <section class="page-title-section consultation">
    </section>
    
    <section class="why-us-setion">
        <div class="container col12">
          <div class="row">
            <div class="col-md-12 ">
				<form id="form1" action="sendpaswd.php" method="POST">

					<div class="container">
						<div class="col-md-8 col-xs-12 formulaire">
							<h3 class="txt-bordure sections-title">Récupérer votre mot de passe</h3>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3 col-xs-12 no-padding left-title">Votre e-mail</div>
									<div class="col-sm-1 hidden-xs no-padding left-title">*</div>
									<div class="col-sm-5 col-xs-12 no-padding">
										<input type="text" name="mail" class="col-xs-12" required>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4 hidden-xs"></div>
									<div class="col-sm-5 col-xs-12 form pull-right">
										<div class="res-flx petit ">
											<input type="submit" value="Valider">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
            </div>
          </div>
        </div>
		
		<div class="container col12">
          <div class="row">
            <div class="col-md-12 ">
				<form id="form1" action="chngepaswd.php" method="POST">

					<div class="container">
						<div class="col-md-8 col-xs-12 formulaire">
							<h3 class="txt-bordure sections-title">Changer votre mot de passe</h3>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3 col-xs-12 no-padding left-title">Votre e-mail</div>
									<div class="col-sm-1 hidden-xs no-padding left-title">*</div>
									<div class="col-sm-5 col-xs-12 no-padding">
										<input type="text" name="mail" class="col-xs-12" required>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-3 col-xs-12 no-padding left-title">Ancien Mot de Passe</div>
									<div class="col-sm-1 hidden-xs no-padding left-title">*</div>
									<div class="col-sm-5 col-xs-12 no-padding">
										<input type="password" name="oldpass" class="col-xs-12" required>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-3 col-xs-12 no-padding left-title">Nouveau Mot de Passe</div>
									<div class="col-sm-1 hidden-xs no-padding left-title">*</div>
									<div class="col-sm-5 col-xs-12 no-padding">
										<input type="password" name="newpass" class="col-xs-12" required>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-4 hidden-xs"></div>
									<div class="col-sm-5 col-xs-12 form pull-right">
										<div class="res-flx petit ">
											<input type="submit" value="Valider">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
            </div>
          </div>
        </div>
    </section>



<?php include"footer.php" ?>