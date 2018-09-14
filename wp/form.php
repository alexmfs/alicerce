// view do form
<form method="POST">

  // Form vai aqui

  <?php

    if ( $_SERVER['REQUEST_METHOD'] == "POST" ){

        send_contact_form('contato');

    }

  ?>

</form>

// functions.php

<?php 
function send_contact_form($key){

  $siteurl = trailingslashit(get_option('home'));

  if($key == 'contato'){
    $mailto = 'contato@bateriasherbo.com.br';
} else {
  $mailto = 'rh@bateriasherbo.com.br';
}

if($key == 'contato'){
    $subject = get_option('blogname'). ' - Novo contato através do site';
} else {
  $subject = get_option('blogname'). ' - Novo candidato a emprego';
}

  $headers = 'From: ' . get_option('blogname') . ' <'. $mailto .'>' . "\r\n";
  $headers.= 'Reply-To: '.$_POST['email']. "\r\n";

  $message  = 'Olá!' . "\r\n\r\n";
  $message .= 'A mensagem abaixo foi enviada em ' .date("d/m/Y \à\s H:i:s"). "\r\n\r\n";
  $message .= 'MENSAGEM' . "\r\n";
  $message .= '-----------------------' . "\r\n";

  while(list($campo, $valor) = each($_POST)){
      if($campo != "submit"){

          $message.= ucfirst($campo) .":  ". $valor . "\r\n\r\n";
      }

  }

  $message .= '-----------------------' . "\r\n\r\n";
  $message .= 'Atenciosamente,' . "\r\n";
  $message .= get_option('blogname') . "\r\n";
  $message .= $siteurl . "\r\n\r\n\r\n\r\n";

  // ok let's send the email
  if( !wp_mail($mailto, $subject, $message, $headers) ){
      echo '<div class="aviso error"><a href="javascript:;" title="fechar" class="fechar">x</a><p>A mensagem não pôde ser enviada. Por favor, tente novamente.</p></div>';
  } else {
      echo '<div class="aviso success"><a href="javascript:;" title="fechar" class="fechar">x</a><p>Obrigado pela mensagem, logo logo entramos em contato. :)</p></div>';
  }
