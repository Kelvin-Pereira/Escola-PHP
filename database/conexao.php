<?php

class Conexao {
	protected $conexao;

	public function conectar()
	{
		$this->conexao = new PDO('mysql:host=localhost;dbname=escola;charset=utf8', 'root', 'root');
	}
	
	public function desconectar()
	{
		$this->conexao = null;
	}
	
	public function executar($sql)
	{
		$this->conectar();
		$this->conexao->query($sql);
		$this->desconectar();

    
	}
	
	public function recuperarDados($sql)
	{
		$this->conectar();

        $retorno = $this->conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

		$this->desconectar();
		return $retorno;
	}
	
	public function EditarAluno($sql)
	{
		$this->conectar();

		
        $retorno = $this->conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);
		$this->desconectar();
		
		$_SESSION['retornoAluno'] = $retorno;
	}
}