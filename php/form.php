<form action="<?php basename($_SERVER['PHP_SELF']) ?>" method="post" id="formswd" name="modulo" class="contact-form">
  <div class="form-row">
    <label for="nome">Nome *</label>
    <input type="text" name="nome" id="nome" tabindex="1" placeholder="Il tuo nome*"
	       value="<?php if ( isset( $missing ) && isset($nome) ) echo $nome; ?>"
	       class="<?php if (isset( $missing ) && in_array('nome',$missing))
			echo 'error';
	       ?> text login_input" required minlength="3" />
  </div>
  <div class="form-row">
    <label for="email">Email *</label>
    <input type="text" name="email" id="email" tabindex="2" placeholder="La tua mail*"
	       value="<?php if ( isset( $missing ) && isset($email) ) echo $email; ?>"
	       class="<?php if (isset( $missing ) && in_array('email',$missing))
			echo 'error';
	       ?>  text login_input" data-rule-required="true" data-rule-email="true" data-msg-email="Inserisci una mail valida" required/>
  </div>
  <div class="form-row">
    <label for="telefono">Telefono</label>
    <input type="number" name="sito" id="telefono" tabindex="3" placeholder="Il tuo telefono"
	       value="<?php if ( isset( $missing ) && isset($sito) ) echo $sito; ?>"
	       class="<?php if (isset( $missing ) && in_array('sito',$missing))
			echo 'error';
	       ?>  text login_input" minlength="9" />
  </div>
  <div class="form-row">
    <label for="messaggio">Messaggio</label>
    <textarea name="messaggio"  id="messaggio" tabindex="4" placeholder="Il tuo messaggio"
	class="<?php if (isset( $missing ) && in_array('messaggio',$missing))
			echo 'error';
	       ?>"><?php if ( isset( $missing ) && isset($messaggio) ) echo $messaggio; ?>
</textarea>
  </div>
   <div class="form-row">
    <input type="submit" name="submit" id="submit" value="Invia Mail" tabindex="5" class="btn" />
  </div>
</form>
