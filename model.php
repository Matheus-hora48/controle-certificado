<?php

class Certificado {
	private $id;
	private $nome;
	private $data_vencimento;
  private $telefone;

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
		return $this;
	}
}

?>