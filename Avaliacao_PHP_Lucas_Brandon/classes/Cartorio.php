<?php
class Cartorio
{
    private $nomeTabeliao;
	private $nomeCartorio;
	private $numeroRegistro;
	private $data;
    private $contratos;
    private $certidoes;

    public function registrarDocumento($registravel)
    {
        $registravel->registrar($this->nomeTabeliao, $this->nomeCartorio,
                                $this->numeroRegistro, $this->data);
        $this->numeroRegistro += 1;
    }

    public function gerarContrato($contrato)
    {
        $this->contratos[] = $contrato;
    }

    public function gerarCertidao($certidao)
    {
        $this->certidoes[] = $certidao;
    }

    public function contarContratos()
    {
        $contador = 0;
        foreach($this->contratos as $contrato)
        {
            $contador += 1;
        }

        return $contador;
    }

    public function contarCertificados()
    {
        $contador = 0;
        foreach($this->certificado as $certificado)
        {
            $contador += 1;
        }

        return $contador;
    }

    public function getNomeTabeliao(){
		return $this->nomeTabeliao;
	}

	public function setNomeTabeliao($nomeTabeliao){
		$this->nomeTabeliao = $nomeTabeliao;
	}

	public function getNomeCartorio(){
		return $this->nomeCartorio;
	}

	public function setNomeCartorio($nomeCartorio){
		$this->nomeCartorio = $nomeCartorio;
	}

	public function getNumeroRegistro(){
		return $this->numeroRegistro;
	}

	public function setNumeroRegistro($numeroRegistro){
		$this->numeroRegistro = $numeroRegistro;
	}

	public function getData(){
		return $this->data;
	}

	public function setData($data){
		$this->data = $data;
	}
}


?>