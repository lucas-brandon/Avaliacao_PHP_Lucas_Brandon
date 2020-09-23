<?php
class CertidaoPropriedade extends Certidao
{
	private $nomePropriedade;
	
	public function __construct()
    {
        $this->setTipoCertidao('Certidao de Propriedade');
    }

    public function getNomePropriedade(){
		return $this->nomePropriedade;
	}

	public function setNomePropriedade($nome){
		$this->nomePropriedade = $nome;
	}
}
?>