<?php

class Opcao implements ActiveRecord{
    
    private int $idTime;

    public function __construct(private string $nomeTime)
    {}

    public function setIdTime(int $idTime):void{
        $this->idTime = $idTime;
    }
    public function getIdTime():int{
        return $this->idTime;
    }
    public function setNomeTime(string $nomeTime):void{
        $this->nomeTime = $nomeTime;
    }
    public function  getNomeTime():string{
        return $this->nomeTime;
    }

    public function save():bool{
        $conexao = new MySQL();
        if(isset($this->idTime)){
            $sql = "UPDATE opcoes SET  nomeTime = '{$this->nomeTime}' WHERE idTime = {$this->idTime}";
        }else{
            $sql = "INSERT INTO opcpes (nomeTime) VALUES ('{$this->nomeTime}')";
        }
        return $conexao->executa($sql);
    }

    public static function find($idTime):Opcao{
        $conexao = new MySQL();
        $sql = "SELECT * FROM opcoes WHERE idTime = {$idTime}";
        $resultado = $conexao->consulta($sql);
        $t = new Opcao($resultado[0]['nomeTime']);
        $t->setIdTime($resultado[0]['idTime']);
        return $t;
    }

    public function delete():bool{
        $conexao = new MySQL();
        $sql = "DELETE FROM opcoes WHERE idTime = {$this->idTime}";
        return $conexao->executa($sql);
    }

    public static function findall():array{
        $conexao = new MySQL();
        $sql = "SELECT * FROM opcoes";
        $resultados = $conexao->consulta($sql);
        $usuarios = array();
        foreach($resultados as $resultado){
            $t = new Opcao($resultado['nomeTime']);
            $t->setIdTime($resultado['idTime']);
            $times[] = $t;
        }
        return $times;
    }
}