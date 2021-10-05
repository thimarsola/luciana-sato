<?php
require_once (dirname(__DIR__, 2) . '/vendor/autoload.php');

use Source\Support\Email;

if ($_POST) {
	$subjectForm = 'Formulário de Contato Website ' . SITE['name'];
	$nameForm = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$mailForm = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
	$phoneForm = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
	$messageForm = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

	$email = new Email();

	$email->add(
		$subjectForm,
		"<h1>Mensagem de Contato - Site ". SITE['name'] ."</h1>
                    <br>
                    <p>Olá " . SITE['name'] . ",</p>
                    <p>Me chamo <strong>{$nameForm}</strong>, estou entrando em contato através do formulário do site.</p>
                    <br>
                    <p>Aqui estão os meus dados para o contato</p>
                    <p><strong>E-mail:</strong><br>{$mailForm}</p>
                    <p><strong>Telefone | Whatsapp:</strong><br>{$phoneForm}</p>
                    <br>
                    <p><strong>Mensagem:</strong><p>
                    <p>$messageForm</p>",
		SITE['name'],
        MAIL['from_email']
	)->send($nameForm, $mailForm);

	if (!$email->error()) {
		echo
			'<script>
	            $(document).ready(function(){
	                swal("'.$nameForm.'", "Sua mensagem foi enviada.  \n Obrigado pelo contato!", "success");
                });
        	</script>';
	} else {
		echo
		'<script>        
	         $(document).ready(function(){swal("Ops...", "Houve um erro ao enviar a mensagem, tente novamente!", "error");
	         });
         </script>';
	}
}