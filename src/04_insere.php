<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">	
</head>
<body>

<?php
include_once "conexao_bd.php";

$nome_conhecido= $_POST['nome_conhecido'];
$nome_verdadeiro= $_POST['nome_verdadeiro'];

if(isset($_FILES['endereco_imagem'])){

	$ext = strrchr($_FILES['endereco_imagem']['name'], '.');
	$nome = md5(time()).$ext;
	$dir = "upload/";

	move_uploaded_file($_FILES['endereco_imagem']['tmp_name'], $dir.$nome);

}
if($ext != ""){

	$endereco_imagem= $dir.$nome;

}else{

    $endereco_imagem= "upload/default_imgs/sem_imagem.png";

}
$data_nascimento= $_POST['data_nascimento'];
$data_falecimento= $_POST['data_falecimento']; 
$local_nascimento= $_POST['local_nascimento']; 
$local_falecimento= $_POST['local_falecimento']; 
$pais= $_POST['pais'];
$famosos_familia= $_POST['famosos_familia'];
$grupo_social_familia= $_POST['grupo_social_familia'];
$formacao= $_POST['formacao'];
$profissao= $_POST['profissao'];
$importancia_area_conhecimento= $_POST['importancia_area_conhecimento'];
$mudanca_grupo_social= $_POST['mudanca_grupo_social'];
$evento_historico= $_POST['evento_historico'];
$preconceito= $_POST['preconceito'];
$contribuicao= $_POST['contribuicao'];
$legado= $_POST['legado'];
$ato_politico= $_POST['ato_politico'];
$ideias_reacao= $_POST['ideias_reacao'];
$frase_marcante= $_POST['frase_marcante'];
$referencias= $_POST['referencias'];

$sql = "INSERT INTO biografias(nome_conhecido, nome_verdadeiro, endereco_imagem, data_nascimento, data_falecimento, local_nascimento, local_falecimento, pais, famosos_familia, grupo_social_familia, formacao, profissao, importancia_area_conhecimento, mudanca_grupo_social, evento_historico, preconceito, contribuicao, legado, ato_politico, ideias_reacao, frase_marcante, referencias) 
VALUES ('$nome_conhecido', '$nome_verdadeiro', '$endereco_imagem', '$data_nascimento', '$data_falecimento', '$local_nascimento', '$local_falecimento', '$pais', '$famosos_familia', '$grupo_social_familia', '$formacao', '$profissao', '$importancia_area_conhecimento', '$mudanca_grupo_social', '$evento_historico', '$preconceito', '$contribuicao', '$legado', '$ato_politico', '$ideias_reacao', '$frase_marcante', '$referencias'
)";

$resultado = mysqli_query($conexao,$sql);
mysqli_close($conexao);

if ($resultado)
{
	header("Location:02_index.php");
}
?>
</body>
</html>