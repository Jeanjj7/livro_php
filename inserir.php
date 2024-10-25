<div>
<?php
include "conexao.php";


$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$ano_publicacao = $_POST['ano_publicacao'];
$categoria = $_POST['categoria'];

// 1º Passo - Comando SQL
$sql = "INSERT INTO tb_livros (titulo, autor, ano_publicacao, categoria) 
VALUES ('$titulo', '$autor', '$ano_publicacao', '$categoria' )";

// 2º Passo - Preparar a conexão
$inserir = $pdo->prepare($sql);

// 3º Passo - Tentar executar
try {
    
    $inserir->execute();
    echo "<h1>Livro cadastrado com sucesso!</h1>";
} catch (PDOException $erro) {
    echo "Falha ao inserir! " . $erro->getMessage();
}
?>
</div>
