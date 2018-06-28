<?php 

//função recursiva

//árvore de função
$hierarquia = array(
	array(
		'nome_cargo' => 'CEO',
		'subordinados' => array(
			//inicio: Diretor Comercial
			array(
				'nome_cargo' => 'Diretor Comercial',
				'subordinados' => array(
					//inicio: Gerente de Vendas					
					array(
					'nome_cargo' => 'Gerente de Vendas'
					)
					//Término: Gerente de Vendas	
				)
			),
			//Termino: Diretor Comercial
			//Início: Diretor Financeiro
			array(
				'nome_cargo' => 'Diretor Financeiro',
				'subordinados' => array(
					//Inicio: Gerente de Contas a Pagar
					array(
						'nome_cargo' => 'Gerente Contas a Pagar',
						'subordinados' => array(
							//Inicio: Supervisor de Pagamentos
								'nome_cargo' => 'Supervisor de Pagamentos'
							//Termino: Supervisor de Pagamentos
						)
					),
					//Término: Gerente de Contas a Pagar
					//Inicio: Gerente de Compras
					array(
						'nome_cargo' => 'Gerente de Compras',
						'subordinados' => array(
							//Inicio: Supervisor de Suprimentos
							array(
								'nome_cargo' => 'Supervisor de Suprimentos'
							)

						)
					)
					//Termino: Gerente de Compras	
				)
			)
			//Termino: Diretor Financeiro

		)
	)
);

//função recursiva para exibir os arrays

function exibe($cargos){
	$html = "<ul>";

		foreach ($cargos as $cargo) {

			$html .= "<li>";

			$html .= $cargo['nome_cargo'];
			
			//verificando se exite subordinados
			if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
			$html .= exibe($cargo['subordinados']);
			}
			$html .= "</li>";


		}
	$html .= "</ul>";

	return $html;
}

echo exibe($hierarquia);

 ?>