<?php

class Pedido
{
    private $id;
    private $numero;
    private $descricao;
    private $valor;
    private $itens;

    public function __construct($id = false)
    {
        if ($id) {
            $sql = "SELECT * FROM pedido WHERE id_pedido =  :id";
            $stmt = DB::Conexao()->prepare($sql);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();

            foreach ($stmt as $registro) {
                $this->setId($registro['id_pedido']);
                $this->setNumero($registro['numero']);
                $this->setDescricao($registro['descricao']);
                $this->setValor($registro['valor']);
                $this->setItens($registro['itens']);
            }
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getItens()
    {
        return $this->itens;
    }

    public function setItens($itens)
    {
        $this->itens = $itens;
    }

    public static function listar()
    {
        $sql = "SELECT * FROM pedido";
        $stmt = DB::conexao()->prepare($sql);
        $stmt->execute();
        $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($registros) {
            $itens = array();

            foreach ($registros as $registro) {
                $objTemporario = new Pedido();
                $objTemporario->setId($registro['id']);
                $objTemporario->setNumero($registro['numero']);
                $objTemporario->setDescricao($registro['descricao']);
                $objTemporario->setValor($registro['valor']);
                $objTemporario->setItens($registro['itens']);
                $itens[] = $objTemporario;
            }

            return $itens;
        }
        return false;
    }

    public function adicionar()
    {
        try {

            $sql = "INSERT INTO pedido (numero, descricao, valor, itens )
                VALUES (:numero, :descricao, :valor, :itens)";

            $conexao = DB::conexao();
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(':numero', $this->numero);
            $stmt->bindParam(':descricao', $this->descricao);
            $stmt->bindParam(':valor', $this->valor);
            $stmt->bindParam(':itens', $this->itens);
            $stmt->execute();

            return $conexao->lastInsertId();
        } catch (PDOException $e) {
            echo "ERRO AO ADICIONAR: " . $e->getMessage();
        }
    }

    public function excluir()
    {
        if ($this->id) {
            try {
                $sql = "DELETE FROM pedido WHERE id_pedido = :id";

                $stmt = DB::Conexao()->prepare($sql);
                $stmt->bindParam(":id", $this->id);
                $stmt->execute();
            } catch (PDOException $e) {
                echo "ERRO AO EXCLUIR: " . $e->getMessage();
            }
        }
    }
}
