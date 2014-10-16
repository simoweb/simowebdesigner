<form name="example" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
  <div class="ancora" id="form"> </div>
  <div class="form-row">
    <label for="name">Nome e Cognome</label>
    <input type="text" name="name" class="text login_input" placeholder="Il tuo nome" id="user_name">
    <div class="clearfix"></div>
  </div>
  <div class="form-row"> 
    <!--[if lt IE 9]>
		<label for="mail">Email</label>
	<![endif]-->
    
    <input type="email" name="mail" class="text login_input" placeholder="La tua mail" id="user_email">
    <div class="clearfix"></div>
  </div>
  <div class="form-row"> 
    <!--[if lt IE 9]>
	  <label for="mail">Telefono</label>
	<![endif]-->
    
    <input type="tel" name="numero" class="text login_input" placeholder="Il tuo numero" id="">
    <div class="clearfix"></div>
  </div>
  <div class="form-row"> 
    <!--[if lt IE 9]>
	  <label for="messaggio">Messaggio</label>
	<![endif]-->
    <textarea placeholder="Il tuo messaggio" name="messaggio"></textarea>
    <div class="clearfix"></div>
  </div>
  <div class="form-row">
    <input type="submit" data-loading-text="Loading..." class="btn " value="Invia" name="submit">
    <!--<a href="#">Privacy Policy</a> | <a href="#">Terms &amp; Conditions</a>-->
    <div class="clearfix"></div>
  </div>
</form>
