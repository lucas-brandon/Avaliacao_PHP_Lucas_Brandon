<?php
abstract class Contrato implements Registravel
{
    private $numeroRegistro;
    private $nomeTestemunhas;
    private $objetoContrato;
    private $dataEmissao;
    private $dataRegistro;
    private $nomeTabeliao;
    private $nomeCartorio;

    public function getNumeroRegistro(){
		return $this->numeroRegistro;
	}

	public function setNumeroRegistro($numeroRegistro){
		$this->numeroRegistro = $numeroRegistro;
	}
    
    public function getNomeTestemunhas(){
		return $this->nomeTestemunhas;
	}

	public function setNomeTestemunhas($indice, $nomeTestemunhas){
		$this->nomeTestemunhas[$indice] = $nomeTestemunhas;
    }
    
    public function pushNomeTestemunhas($nomeTestemunhas){
		$this->nomeTestemunhas[] = $nomeTestemunhas;
	}

	public function getObjetoContrato(){
		return $this->objetoContrato;
	}

	public function setObjetoContrato($objetoContrato){
		$this->objetoContrato = $objetoContrato;
	}

	public function getDataEmissao(){
		return $this->dataEmissao;
	}

	public function setDataEmissao($dataEmissao){
		$this->dataEmissao = $dataEmissao;
	}

	public function getDataRegistro(){
		return $this->dataRegistro;
	}

	public function getNomeTabeliao(){
		return $this->nomeTabeliao;
	}

	public function getNomeCartorio(){
		return $this->nomeCartorio;
	}

	public function setNomeCartorio($nomeCartorio){
		$this->nomeCartorio = $nomeCartorio;
	}

	public function registrar($nomeTabeliao, $nomeCartorio,
							  $numeroRegistro, $dataRegistro)
	{
		$this->nomeTabeliao = $nomeTabeliao;
		$this->nomeCartorio = $nomeCartorio;
		$this->numeroRegistro = $numeroRegistro;
		$this->dataRegistro = $dataRegistro;
	}
}
?>