<?php
class CertidaoNascimento extends Certidao
{
    private $nomeNascido;

    public function __construct()
    {
        $this->setTipoCertidao('Certidao de Nascimento');
    }

    public function getNomeNascido(){
		return $this->nomeNascido;
	}

	public function setNomeNascido($nomeNascido){
		$this->nomeNascido = $nomeNascido;
	}

}
?>