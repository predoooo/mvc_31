<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      include "../modelo/estudante.php";

      //captura dos dados digitados 
      $cpf = $_POST["txtCPF"];
      $nome = $_POST["txtNome"];
      $curso = $_POST["txtCurso"];
      $idade = $_POST["txtIdade"];

      //criação do objeto estudante 
      $estudante = new Estudante($cpf,$nome,$curso,$idade);
      // $estudante->setNome("Pedro Oliveira");
      //echo $estudante->getNome();

      if($estudante->matricular())
      {
        echo "<h1>Matriculado</h1>";
      }
      else{
        echo "<h1> Não matriculado</h1>";
      }
    ?>
</body>
</html>