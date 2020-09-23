<?php

abstract class Certidao implements Registravel
{
    private $numeroRegistro;
    private $nomeDeclarantes;
    private $tipoCertidao;
    private $dataEmissao;
    private $nomeTabeliao;
    private $nomeCartorio;

    public function getNumeroRegistro(){
		return $this->numeroRegistro;
	}

	public function setNumeroRegistro($numeroRegistro){
		$this->numeroRegistro = $numeroRegistro;
	}

	public function getNomeDeclarantes(){
		return $this->nomeDeclarantes;
	}

	public function setNomeDeclarantes($indice, $nomeDeclarantes){
		$this->nomeDeclarantes[$indice] = $nomeDeclarantes;
    }
    
    public function pushNomeDeclarantes($nomeDeclarantes){
		$this->nomeDeclarantes[] = $nomeDeclarantes;
	}

	public function getTipoCertidao(){
		return $this->tipoCertidao;
	}

	public function setTipoCertidao($tipoCertidao){
		$this->tipoCertidao = $tipoCertidao;
	}

	public function getDataEmissao(){
		return $this->dataEmissao;
	}

	public function setDataEmissao($dataEmissao){
		$this->dataEmissao = $dataEmissao;
	}

	public function getNomeTabeliao(){
		return $this->nomeTabeliao;
	}

	public function getNomeCartorio(){
		return $this->nomeCartorio;
	}

	public function registrar($nomeTabeliao, $nomeCartorio,
							  $numeroRegistro, $dataRegistro)
	{
		$this->nomeTabeliao = $nomeTabeliao;
		$this->nomeCartorio = $nomeCartorio;
		$this->numeroRegistro = $numeroRegistro;
		//enunciado não descreve que a certidão possui data de registro
	}

}


?>