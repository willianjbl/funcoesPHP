<?php
	/*
		Desenvolvi esta função com o intuito de formatar um nome recebido por input,
		o qual poderia ser por ex.: 'JOão ClÁudio dE oLivEira Da sIlvA',
		e após a função processar, retornar: 'João Cláudio de Oliveira da Silva'
	*/

	// Nome a ser testado pela função
	$nome = "wiLLiaN Dos saNtOs DoS ReIs dAs Chagas Da SiLvA dO CaRmo e rAmoS LúCiO";

	echo formatarNome($nome);

	//--------------------------------------------------------------------------------

	function formatarNome($inputNome)
	{
		// Passando o nome para letras minúsculas.
		$nomeC = strtolower($inputNome);
		// Transformando o nome em uma array.
		$nomeC = explode(" ", $nomeC);

		foreach ($nomeC as $nome)
		{
			// Se algum valor da array atingir algumas das condições abaixo, adicionar o valor a nova array.
			if($nome == "das" || $nome == "da" || $nome == "dos" || $nome == "do" || $nome == "de" || $nome == "e")
			{
				$nomeF[] = $nome;
			}
			// Se não, deixar a primeira letra maiúscula e adicionar a nova array.
			else
			{
				$nomeF[] = ucfirst($nome);
			}
		}

		// Transformando a array em string.
		$nome = implode(" ", $nomeF);

		// Retornando nome formatado.
		return $nome;
	}

?>