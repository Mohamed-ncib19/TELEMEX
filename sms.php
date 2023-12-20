







 <!--ajout SMS-->
                    <div role="tabpanel" class="tab-pane fade in" id="pub_disponibilite">
                        <div class="css-tab-content">
                            <div class="tab-pane fade in active">
                                <div class="css-tab-content formulaires">
                                    
                                </div>
                                <div class="container">
                                    <div class="col-md-12">
                                        <div class="contact-map">
                                            <h3 class=" sections-title">Send SMS</h3>
                                           <form action="https://api.1s2u.io/bulksms" method="get">
                                            <input  name="username" type="hidden" value="smscontact020">
                                            <input  name="password" type="hidden" value="web89355">

	                                        <label for="phone">Votre Numéro</label>
	                                        <input type="tel" name="mno"/><br/>
	                                        <label for="body">Votre Message</label>
                                            <input  name="sid" type="hidden" value="Telefret">
	                                        <textarea name="msg" maxlength="160"></textarea><br/>
                                            <input  name="mt" type="hidden" value="0">
                                            <input  name="fl" type="hidden" value="1">
	                                        <input type="submit" />
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--fin ajout SMS-->