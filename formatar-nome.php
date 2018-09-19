<?php
	/*
		Desenvolvi esta função com o intuito de formatar um nome recebido por input,
		o qual poderia ser por ex.: 'JOão ClÁudio dE oLivEira Da sIlvA',
		e após a função processar, retornar: 'João Cláudio de Oliveira da Silva'.
	*/

	// Nome a ser testado pela função.
	$nome = "wiLLiaN Dos saNtOs DoS ReIs dAs Chagas Da SiLvA dO CaRmo e rAmoS LúCiO";

	echo formatarNomeA($nome);

	echo "<br>";

	echo formatarNomeB($nome);

	//-----------------------------# Método 1 ----------------------------------------

	function formatarNomeA($inputNome)
	{
		// Passando o nome para letras minúsculas e transformando o nome em uma array.
		$nomeC = explode(" ", strtolower($inputNome));

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

	//------------------------------ Método #2 ---------------------------------------

	function formatarNomeB($inputNome)
	{
		// Criando uma array de filtro
		$filtro = ["das", "da", "dos", "do", "de", "e"];
		// Passando o nome para letras minúsculas e transformando o nome em uma array.
		$nomeC = explode(" ", strtolower($inputNome));

		foreach ($nomeC as $nome)
		{
			// Processo os valores da array no filtro.
			$nomeF[] = (in_array($nome, $filtro)) ? $nome : ucfirst($nome);
		}

		// Transformando a array em uma string.
		$nome = implode(" ", $nomeF);

		// Retornando nome formatado.
		return $nome;
	}

?>