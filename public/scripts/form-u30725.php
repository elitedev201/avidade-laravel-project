<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.0.0.379
*/

require_once('form_process.php');

$form = array(
	'subject' => 'NOVA_REQUISICAO Form envio',
	'heading' => 'Envio de novo formulário',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Marcado',
		'checkbox_unchecked' => 'Desmarcado',
		'submitted_from' => 'Formulário enviado do site: %s',
		'submitted_by' => 'Endereço IP do visitante: %s',
		'too_many_submissions' => 'Muitos envios recentes deste IP',
		'failed_to_send_email' => 'Falha no envio do email',
		'invalid_reCAPTCHA_private_key' => 'Chave privada do reCAPTCHA inválida.',
		'invalid_reCAPTCHA2_private_key' => 'Chave privada do reCAPTCHA 2.0 inválida.',
		'invalid_reCAPTCHA2_server_response' => 'Resposta do servidor reCAPTCHA 2.0 inválida.',
		'invalid_field_type' => 'Tipo de campo desconhecido \"%s\".',
		'invalid_form_config' => 'O campo \"%s\" possui uma configuração inválida.',
		'unknown_method' => 'Método de solicitação de servidor desconhecido'
	),
	'email' => array(
		'from' => 'contato@itanio.com.br',
		'to' => 'contato@itanio.com.br'
	),
	'fields' => array(
		'custom_U30727' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Nome do Médico',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Nome do Médico\" é obrigatório.'
			)
		),
		'custom_U30731' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'CRM',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"CRM\" é obrigatório.'
			)
		),
		'custom_U30744' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'UF do CRM',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"UF do CRM\" é obrigatório.'
			)
		),
		'custom_U30768' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Medicamento',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Medicamento\" é obrigatório.'
			)
		),
		'custom_U30782' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Apresentação',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Apresentação\" é obrigatório.'
			)
		),
		'custom_U30748' => array(
			'order' => 6,
			'type' => 'checkbox',
			'label' => 'Conheço o regulamento do programa e concordo as cláusulas previstas nele',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Conheço o regulamento do programa e concordo as cláusulas previstas nele\" é obrigatório.'
			)
		)
	)
);

process_form($form);
?>