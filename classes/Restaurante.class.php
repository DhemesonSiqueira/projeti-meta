<?php

class Restaurante
{
    private $id;
    private $nome;
    private $email;
    private $endereco;

    public function __construct($id = false)
    {
        if ($id) {
            $sql = "SELECT * FROM restaurante WHERE id_restaurante =  :id";
            $stmt = DB::Conexao()->prepare($sql);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();

            foreach ($stmt as $registro) {
                $this->setId($registro['id_restaurante']);
                $this->setNome($registro['nome']);
                $this->setEmail($registro['email']);
                $this->setEndereco($registro['endereco']);
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

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public static function listar()
    {
        $sql = "SELECT * FROM restaurante";
        $stmt = DB::conexao()->prepare($sql);
        $stmt->execute();
        $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($registros) {
            $itens = array();

            foreach ($registros as $registro) {
                $objTemporario = new Restaurante();
                $objTemporario->setId($registro['id']);
                $objTemporario->setNome($registro['nome']);
                $objTemporario->setEmail($registro['email']);
                $objTemporario->setEndereco($registro['endereco']);
                $itens[] = $objTemporario;
            }

            return $itens;
        }
        return false;
    }

    public function adicionar()
    {
        try {

            $sql = "INSERT INTO restaurante (nome, email, endereco )
                VALUES (:nome, :email, :endereco)";

            $conexao = DB::conexao();
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':endereco', $this->endereco);
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
                $sql = "UPDATE restaurante SET
                            nome = :nome,
                            email = :email,
                            endereco = :endereco
                            WHERE id_cliente = :id";
                $stmt = DB::conexao()->prepare($sql);
                $stmt->bindParam(':nome', $this->nome);
                $stmt->bindParam(':email', $this->email);
                $stmt->bindParam(':endereco', $this->endereco);
                $stmt->bindParam(':id', $this->id);
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
                $sql = "DELETE FROM restaurante WHERE id_restaurante = :id";

                $stmt = DB::Conexao()->prepare($sql);
                $stmt->bindParam(":id", $this->id);
                $stmt->execute();
            } catch (PDOException $e) {
                echo "ERRO AO EXCLUIR: " . $e->getMessage();
            }
        }
    }
}
