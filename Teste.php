<?php

	class Teste{
		public $nome = 'Osvaldo';

		public function escreve_nome(){
				echo "nome=$this->nome;cara=$this->nome";
		}
	}

	$teste = new Teste();
	$teste->escreve_nome();