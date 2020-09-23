<?php
class ContratoVenda extends Contrato
{
	private $objetos;

	public function __construct()
    {
        $this->setObjetoContrato('Contrato de Venda');

	}

	public function getObjetos(){
		return $this->objetos;
	}

	public function setObjetos($indice, $objeto){
		return $this->objetos[$indice];
	}

	public function pushObjetos($objeto){
		return $this->objetos[] = $objeto;
	}
}
?>