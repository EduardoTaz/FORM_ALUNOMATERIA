<?php 

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$matematica = $_POST['matematica'];
$portugues = $_POST['portugues'];
$historia = $_POST['historia'];

include "aluno.php";
include "disciplina.php";

$aluno = new Aluno();
$aluno->nome = $nome;
$aluno->idade = $idade;
$aluno->email = $email;
$aluno->cidade = $cidade;

$disciplinas = [
    new Disciplina("Matemática", $matematica),
    new Disciplina("Português", $portugues),
    new Disciplina("História", $historia)
];

$aluno->disciplinas = $disciplinas;

$json = json_encode($aluno, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);


file_put_contents('aluno.json', $json);

header("Location: ../html/form.html");
exit();

?>
