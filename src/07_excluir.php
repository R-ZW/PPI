<?php
include "conexao_bd.php";
$id_biografia = $_GET['id_biografia'];

$sql = "DELETE FROM biografias WHERE id_biografia=$id_biografia";
$resultado = mysqli_query($conexao,$sql);

mysqli_close($conexao);

if($resultado){
    header("Location: 02_index.php");
}
?>
