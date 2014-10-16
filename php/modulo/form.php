<form action="<?php basename($_SERVER['PHP_SELF']) ?>" method="post" id="formYIW">
  <fieldset>
    <legend><span>Inviaci un messaggio</span></legend>
    <ol>
      <li>
        <label for="nome">Nome <abbr title="campo obbligatorio">*</abbr></label>
        <input type="text" name="nome" id="nome" tabindex="1"
	       value="<?php if ( isset( $missing ) && isset($nome) ) echo $nome; ?>"
	       class="<?php if (isset( $missing ) && in_array('nome',$missing))
			echo 'error';
	       ?>"/>
      </li>
      <li>
        <label for="email">Email <abbr title="campo obbligatorio">*</abbr></label>
        <input type="text" name="email" id="email" tabindex="2"
	       value="<?php if ( isset( $missing ) && isset($email) ) echo $email; ?>"
	       class="<?php if (isset( $missing ) && in_array('email',$missing))
			echo 'error';
	       ?>"/>
      </li>
      <li>
        <label for="sito">Sito web</label>
        <input type="text" name="sito" id="sito" tabindex="3"
	       value="<?php if ( isset( $missing ) && isset($sito) ) echo $sito; ?>"
	       class="<?php if (isset( $missing ) && in_array('sito',$missing))
			echo 'error';
	       ?>"/>
      </li>
      <li>
        <label for="messaggio">Messaggio <abbr title="campo obbligatorio">*</abbr></label>
        <textarea name="messaggio" id="messaggio" rows="10" cols="30" tabindex="4"
	class="<?php if (isset( $missing ) && in_array('messaggio',$missing))
			echo 'error';
	       ?>"><?php if ( isset( $missing ) && isset($messaggio) ) echo $messaggio; ?></textarea>
      </li>
    </ol>
  </fieldset>
  <p class="controls">
   <input type="submit" name="submit" id="submit" value="Invia Mail" tabindex="5" />
  </p>
</form>