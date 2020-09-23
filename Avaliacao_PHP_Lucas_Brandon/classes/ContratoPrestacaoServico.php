<?php
class ContratoPrestacaoServico extends Contrato
{
	private $servicos;

	public function __construct()
    {
        $this->setObjetoContrato('Contrato de Prestação de Serviços');

	}

	public function getServicos(){
		return $this->servicos;
	}

	public function setServicos($indice, $objeto){
		return $this->servicos[$indice];
	}

	public function pushServicos($objeto){
		return $this->servicos[] = $objeto;
	}
}
?>