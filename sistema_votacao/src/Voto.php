<?php

class Voto implements ActiveRecord{

    private int $idUsuario;

    private int $idTime;
    
    // public function __construct( private string $email,private string $senha){
    // }
    
    public function setIdUsuario(int $idUsuario):void{
        $this->idUsuario = $idUsuario;
    }

    public function getIdUsuario():int{
        return $this->idUsuario;
    }

    public function setIdTime():int{
        return $this->idTime;
    }

    public function getIdTime():int{
        return $this->idTime;
    }

    public function save():bool{
        $conexao = new MySQL();
        $sql = "INSERT INTO voto (idUsuario,idTime) VALUES ('{$this->isUsuario}','{$this->idTime}')";
        return $conexao->executa($sql);
    }

    public static function find($idUsuario):Voto{
        // $conexao = new MySQL();
        // $sql = "SELECT * FROM usuarios WHERE idUsuario = {$idUsuario}";
        // $resultado = $conexao->consulta($sql);
        // $u = new Usuario($resultado[0]['email'],$resultado[0]['senha']);
        // $u->setIdUsuario($resultado[0]['idUsuario']);
        // return $u;
        return new Voto();
    }

    public function delete():bool{
        // $conexao = new MySQL();
        // $sql = "DELETE FROM usuarios WHERE idUsuario = {$this->idUsuario}";
        // return $conexao->executa($sql);
        return true;
    }

    public static function findall():array{
        $conexao = new MySQL();
        $sql = "SELECT * FROM voto";
        $resultados = $conexao->consulta($sql);
        $votos = array();
        foreach($resultados as $resultado){
            $t = new Voto($resultado['idUsuario'],$resultado['idTime']);
            $t->setIdUsuario($resultado['idUsuario']);
            $t->setIdTime($resultado['idTime']);
            $votos[] = $t;
        }
        return $votos;
    }
}
