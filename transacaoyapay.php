<?php 

class Comunicacao {
	public function enviaTransacaoYapay($cabecalho = array(), $method, $url, $data){

		try{

		    //Inicializa cURL para uma url
			$curl = curl_init($url);

			 //Marca que vai enviar por POST, o $method seja igual a post
			if($method == 'POST'){
				curl_setopt($curl, CURLOPT_POST,1 );

			  //Passa o conteudo para o campo de envio por POST
				curl_setopt($curl, CURLOPT_POSTIFIELDS, $data);


			   //Marca que vai receber string
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

				curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json');

			   //Inicia a conexão
				$resposta = curl_exec($curl);

				Fecha a conexão
				curl_close($curl)


			}catch(Exception $e){
				return $e->getMessage();
			}
			return $resposta;
		}


	}	


	?>