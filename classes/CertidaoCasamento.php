<?php
class CertidaoCasamento extends Certidao
{
	private $nomeCasados;
	
	public function __construct()
    {
        $this->setTipoCertidao('Certidao de Casamento');
    }

    public function getNomeCasado(){
		return $this->nomeCasados;
	}

	public function setNomeCasados($indice, $nome){
		$this->nomeCasados[$indice] = $nome;
	}

	public function pushNomeCasados($nome){
		$this->nomeCasados[] = $nome;
	}

}
?>