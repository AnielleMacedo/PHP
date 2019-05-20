<?php

//exemplo de  funcao RECURSIVA
//faco um array BIDIMENSIONAL pra criar a hierarquia de uma azienda
$hierarquia = array(
	array(
		'nome_cargo' =>'CEO',
		'subordinados'=>array(
			//inicio: diretor comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					//inicio: gerente de vendas
					array(
						'nome_cargo'=> 'gerente de vendas'
					)
					//termino: gerente de vendas
				) 
			
		),

			//Termino: diretor comercial
			//inicio diretor financeirro
			array(

				'nome_cargo'=>'Diretor financeiro',
				'subordinados'=>array(
				//inicio gerente de contas
				array(
					'nome_cargo'=> 'Gerente de contas',
					'subordinados'=>array(
				//inicio supervisor
					array(
						'nome_cargo'=> 'Supervisor'
					)
					//termino supervisor

				)
				
		),
			//termino gerente de contas
			//inicio gerente compras
				array(
					'nome_cargo'=>'gerente compras',
					'subordinados'=>array(
						//inciio supervisor suplementos
						array(
							'nome_cargo'=>'Supervisor de suplementos'
						)
						//termino supervisor suplementos
					)

				)
				//termino gerente compras
			)
	    )
			//termino direitor financeiro
		
	)
		
  )

);

//print_r($hierarquia);


//crio uma funcao recursiva pra mostrar na tela cada item d array um cargo
function exibe($cargos){

//crio  uma tag html (com dentro uma lista ordenada)e com fechamento
	$html = '<ul>';

	foreach ($cargos as $cargo){
		
		//faz com q a tag html concatene o q ela ja tem abrindo com a tag <li>
		$html .= '<li>';

		//acesso o nome de cada cargo
		$html .= $cargo['nome_cargo'];

		//verifica se a chave subordinados existir e se dentro dele tem mais de 0 itens
		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
			//dai è so chamar a funcao stessa denovo dessa vez chamando a chave subordinados. Veja q sem precisar criar outros ciclos por isso que se chama funcao recursiva
			$html .= exibe($cargo['subordinados']);
		}

		$html .= '<li>';
	}

	$html .= '</ul>';//coloca .= pra ela ir acumulando, concatenando com o proprio valor q recenber

	return $html;

}

//o codigo inteligente pq se eu adicionar outro cargo em qq lugar ele aceita

echo exibe($hierarquia);
?>

