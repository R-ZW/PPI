<!DOCTYPE html>
<html lang="pt">  
<head>
<meta charset="UTF-8">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Another Icon Font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Link with configs-->
    <link rel="stylesheet" type="text/css" href="configs.css">

  <script>
    function confirmacao($id_biografia){
    var resposta = confirm ("Deseja realmente excluir esta biografia do sistema?");
    if (resposta == true){
        window.location.href = "07_excluir.php?id_biografia="+$id_biografia
    }
    }
  </script>

    <title>Lista de biografias</title>

</head>
<body>

<?php require_once ".cabecalho.php";?>

<main class="container">

<br>
<br>

<h4 class="center-align">LISTA DE BIOGRAFIAS</h4><br>

<?php 
include_once "conexao_bd.php";
$sql = "SELECT id_biografia, nome_conhecido, importancia_area_conhecimento, data_nascimento, data_falecimento FROM biografias";
$resultado = mysqli_query($conexao,$sql); 
?>

<table class="highlight centered">
        <thead>
          <tr>
              <th>Nome</th>
              <th>Área do conhecimento</th>
              <th>Data de nascimento</th>
              <th>Data de falecimento</th>
              <th>Operações</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          while($linha = mysqli_fetch_assoc($resultado))
            {
              $id_biografia= $linha['id_biografia'];
              $nome_conhecido = $linha['nome_conhecido'];
              $importancia_area_conhecimento= $linha['importancia_area_conhecimento'];
	            $data_nascimento = $linha['data_nascimento'];
              $data_nascimento = date('d/m/Y',strtotime($data_nascimento));
	            $data_falecimento = $linha['data_falecimento'];	
              $data_falecimento = date('d/m/Y',strtotime($data_falecimento));

              echo "<tr><td>$nome_conhecido</td> 
              <td>$importancia_area_conhecimento</td> 
              <td>$data_nascimento</td> 
              <td>$data_falecimento</td> 
              <td><a href='08_mais.php?id_biografia=$id_biografia' class='btn-floating btn-small waves-effect waves-light btn_a'><i class='material-icons'>search</i></a> &nbsp&nbsp 
              <a href='05_formaltera.php?id_biografia=$id_biografia' class='btn-floating btn-small waves-effect waves-light btn_a'><i class='material-icons'>edit</i></a> &nbsp&nbsp 
              <a href='#' onclick='confirmacao($id_biografia)'class='btn-floating btn-small waves-effect waves-light btn_a'><i class='material-icons'>delete</i></a></tr>";
            } 
            ?>
        </tbody>
</table>

<br> 

<div class="center-align"><a href="03_forminsere.php" class="btn-floating btn-large waves-effect waves-light botao_adicionar"><i class="material-icons">add</i></a></div><br><br>
  
</main>

<?php require_once ".rodape.php"; ?>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>