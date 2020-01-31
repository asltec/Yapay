<!DOCTYPE html>
<html>
<head>
	<title>Comunicação API - POST</title>
</head>
<body>



<?php

//include da classe comunicação
include 'comunicacao.php';

$Comunicacao = new Comunicacao;

	
// DADOS DO PEDIDO
$data["token_account"] = "3f35bb4dc40f28b";

$data["customer"]["contacts"][1]["type_contact"] = "H";
$data["customer"]["contacts"][1]["number_contact"] = "1133221122";

$data["customer"]["addresses"][1]["type_address"] = "B";
$data["customer"]["addresses"][1]["postal_code"] = "17516000";
$data["customer"]["addresses"][1]["postal_code"] = "17000-000";
$data["customer"]["addresses"][1]["street"] = "Av Esmeralda";
$data["customer"]["addresses"][1]["number"] = "1001";
$data["customer"]["addresses"][1]["neighborhood"] = "Jd Esmeralda";
$data["customer"]["addresses"][1]["city"] = "Marilia";
$data["customer"]["addresses"][1]["state"] = "SP";

$data["customer"]["name"] = "Stephen Strange";
$data["customer"]["cpf"] = "74279789517";
$data["customer"]["email"] = "teste.teste@teste.com";

$data["transaction_product"][1]["description"] = "Camiseta Tony Stark";
$data["transaction_product"][1]["quantity"] = "1";
$data["transaction_product"][1]["price_unit"] = "130.00";

$data["transaction"]["shipping_type"] = "Sedex";
$data["transaction"]["shipping_price"] = "";
$data["transaction"]["url_notification"] = "";

$data["payment"]["payment_method_id"] = "6";
$data["payment"]["split"] = "1";

 //Define a URL para consumo do serviço
 $url = 'https://api.intermediador.yapay.com.br/api/v3/transactions/payment';

 
 //Tipo de requisição: POST
 $method = 'POST';

 //Faz a chamada da função, passando os parâmetros
 $resposta = $Comunicacao->enviaTransacaoParaAPI($cabecalho, $method, $url, $data);

 //Exibe a resposta da API
 echo $resposta;


?>

</body>
</html>