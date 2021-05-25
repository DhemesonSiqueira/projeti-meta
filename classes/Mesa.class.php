<?php

class Mesa
{
    private $id;
    private $descricao;
    private $numero;
    private $status;

    public function __construct($id = false)
    {
        if ($id) {
            $sql = "SELECT * FROM mesa WHERE id_mesa =  :id";
            $stmt = DB::Conexao()->prepare($sql);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();

            foreach ($stmt as $registro) {
                $this->setId($registro['id_mesa']);
                $this->setDescricao($registro['descricao']);
                $this->setNumero($registro['numero']);
                $this->setStatus($registro['status']);
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

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public static function listar()
    {
        $sql = "SELECT * FROM mesa";
        $stmt = DB::conexao()->prepare($sql);
        $stmt->execute();
        $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($registros) {
            $itens = array();

            foreach ($registros as $registro) {
                $objTemporario = new Mesa();
                $objTemporario->setId($registro['id_mesa']);
                $objTemporario->setDescricao($registro['descricao']);
                $objTemporario->setStatus($registro['status']);
                $objTemporario->setNumero($registro['numero']);
                $itens[] = $objTemporario;
            }

            return $itens;
        }
        return false;
    }

    public function adicionar()
    {

        try {
            $sql = "INSERT INTO mesa ('descricao', 'status', 'numero')
            VALUES (':descricao', ':status', ':numero')";

            $conexao = DB::conexao();
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(':descricao', $this->descricao);
            $stmt->bindParam(':status', $this->status);
            $stmt->bindParam(':numero', $this->quantidade);
            $stmt->execute();

            return $conexao->lastInsertId();
        } catch (PDOException $e) {
            echo "ERRO AO ADICIONAR: " . $e->getMessage();
        }
    }

    public function atualizar()
    {
        if ($this->id) {
            try {
                $sql = "UPDATE mesa SET
                        descricao = :descricao,
                        'status' = ':status',
                        numero = :numero
                        WHERE id_mesa = :id";
                $stmt = DB::conexao()->prepare($sql);
                $stmt->bindParam(':descricao', $this->descricao);
                $stmt->bindParam(':status', $this->status);
                $stmt->bindParam(':id', $this->id);
                $stmt->bindParam(':numero', $this->numero);
                $stmt->execute();
            } catch (PDOException $e) {
                echo "ERRO AO ATUALIZAR: " . $e->getMessage();
            }
        }
    }

    public function excluir()
    {
        if ($this->id) {
            try {
                $sql = "DELETE FROM mesa WHERE id_mesa = :id";

                $stmt = DB::Conexao()->prepare($sql);
                $stmt->bindParam(":id", $this->id);
                $stmt->execute();
            } catch (PDOException $e) {
                echo "ERRO AO EXCLUIR: " . $e->getMessage();
            }
        }
    }
}
