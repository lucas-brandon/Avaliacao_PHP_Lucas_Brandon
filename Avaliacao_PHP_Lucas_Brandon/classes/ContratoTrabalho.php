<?php
class ContratoTrabalho extends Contrato
{
	private $descricaoTrabalho;

	public function __construct()
    {
        $this->setObjetoContrato('Contrato de Trabalho');

	}

	public function getDescricaoTrabalho(){
		return $this->descricaoTrabalho;
	}

	public function setDescricaoTrabalho($indice, $objeto){
		return $this->descricaoTrabalho;
	}
}
?>