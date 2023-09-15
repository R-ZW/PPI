<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    $_SESSION['mensagem'] = "Você deve primeiro realizar o login!";
    header("Location: 00___entrada.php");
}
$paginaCorrente = basename($_SERVER['SCRIPT_NAME']);

include_once "conexao_bd.php";

$sql = "SELECT nome_usuario FROM usuarios WHERE id_usuario=".$_SESSION['id_usuario'];
$resultado = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_assoc($resultado);
?>

<script>
    function confirmacao1(){
    var resposta = confirm ("Deseja realmente excluir sua conta do sistema?");
    if (resposta == true){
        window.location.href = "00__excluir_usuario.php"
    }
    }
</script>

<link rel="stylesheet" type="text/css" href="configs.css">

<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a class="teal-text white center-align a1 bold" href="00__form_altera_usuario.php">EDITAR</a></li>
    <li><a class="teal-text white center-align a1 bold" href='#' onclick='confirmacao1()'>EXCLUIR</a></li>
</ul>


<nav class="teal lighten-1">
    <div class="nav-wrapper fixed container">
    

      <ul class="left hide-on-med-and-down">

        <li <?php if($paginaCorrente == "01_capa.php"){echo 'class = "teal darken-2"';}?>><a href="01_capa.php"><i class="material-icons">home</i></a></li>
        <li <?php if($paginaCorrente == "02_index.php"){echo 'class = "teal darken-2"';}?>><div class="bold"><a href="02_index.php">LISTAR BIOGRAFIAS</a></div></li>      
      
      </ul>

      <a href="#" class="brand-logo center teal lighten-1"><i class="fa fa-address-card" style="margin-right:0px; margin-top:10px;"></i></a>

      <ul class="right hide-on-med-and-down">
        
        <li><a href="#" class="dropdown-button bold" data-activates="dropdown1" data-beloworigin="true"><?php echo $linha['nome_usuario'];?><i class="material-icons right">arrow_drop_down</i></a></li>
        <li><div class="bold"><a href="00_logout.php"><i class="material-icons right">logout</i></a></div></li>

      </ul>
    </div>
  </nav>
