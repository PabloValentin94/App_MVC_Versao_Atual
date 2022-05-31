<?php

class FuncionarioDAO
{

  private $conexao;

  public function __construct()
  {

    $dsn = "mysql:host=localhost:3307;dbname=db_mvc";

    $this->conexao = new PDO($dsn, "root", "etecjau");

  }

  public function Insert(FuncionarioModel $model)
  {

      $sql = "INSERT INTO Funcionario (nome, cadastro, cpf) VALUES (?, ?, ?)";

      $stmt = $this->conexao->prepare($sql);

      $stmt->bindValue(1, $model->nome);
      $stmt->bindValue(2, $model->cadastro);
      $stmt->bindValue(3, $model->cpf);

      $stmt->execute();

  }

  public function Update(FuncionarioModel $model)
  {

    $sql = "UPDATE Funcionario SET nome=? WHERE id = ?";

    $stmt = $this->conexao->prepare($sql);

    $stmt->bindValue(1, $model->nome);
    $stmt->bindValue(2, $model->id);

    $stmt->execute();

  }

  public function Delete(int $id)
  {

    $sql = "DELETE FROM Funcionario WHERE id = ?";

    $stmt = $this->conexao->prepare($sql);

    $stmt->bindValue(1, $id);

    $stmt->execute();

  }

  public function Select()
  {

    $sql = "SELECT * FROM Funcionario";

    $stmt = $this->conexao->prepare($sql);

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS);

  }

  public function SelectById(int $id)
  {

    include_once "Model/FuncionarioModel.php";

    $sql = "SELECT * FROM Funcionario WHERE id = ?";

    $stmt = $this->conexao->prepare($sql);

    $stmt->bindvalue(1, $id);

    $stmt->execute();

    return $stmt->fetchObject("FuncionarioModel");

  }

}

?>