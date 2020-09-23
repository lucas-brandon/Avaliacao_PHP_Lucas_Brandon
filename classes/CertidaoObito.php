<?php
class CertidaoObito extends Certidao
{
	private $nomeFalecido;
	
	public function __construct()
    {
        $this->setTipoCertidao('Certidao de Obto');
    }

    public function getNomeFalecido(){
		return $this->nomeFalecido;
	}

	public function setNomeFalecido($nomeFalecido){
		$this->nomeFalecido = $nomeFalecido;
	}

}
?>