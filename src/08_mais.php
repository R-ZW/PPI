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

<title>Visualização de Biografia</title>

</head>
<body>

<?php require_once ".cabecalho.php";?>

<main class="container">

<br>
<br>

<h4 class="center-align">VISUALIZAÇÃO DE BIOGRAFIA</h4>

<br>
<br>

    <?php
    include "conexao_bd.php";
    $id_biografia= $_GET['id_biografia'];

    $sql = "SELECT * FROM biografias WHERE id_biografia=$id_biografia";
    $resultado = mysqli_query($conexao, $sql);

    $linha = mysqli_fetch_assoc($resultado);

    $id_biografia= $linha['id_biografia'];
    $nome_conhecido= $linha['nome_conhecido'];
    $nome_verdadeiro= $linha['nome_verdadeiro'];
    $endereco_imagem= $linha['endereco_imagem'];
    $data_nascimento= $linha['data_nascimento'];
    $data_nascimento = date('d/m/Y',strtotime($data_nascimento));
    $data_falecimento= $linha['data_falecimento']; 
    $data_falecimento = date('d/m/Y',strtotime($data_falecimento));
    $local_nascimento= $linha['local_nascimento']; 
    $local_falecimento= $linha['local_falecimento']; 
    $pais= $linha['pais'];
    $famosos_familia= $linha['famosos_familia'];
    $grupo_social_familia= $linha['grupo_social_familia'];
    $formacao= $linha['formacao'];
    $profissao= $linha['profissao'];
    $importancia_area_conhecimento= $linha['importancia_area_conhecimento'];
    $mudanca_grupo_social= $linha['mudanca_grupo_social'];
    $evento_historico= $linha['evento_historico'];
    $preconceito= $linha['preconceito'];
    $contribuicao= $linha['contribuicao'];
    $legado= $linha['legado'];
    $ato_politico= $linha['ato_politico'];
    $ideias_reacao= $linha['ideias_reacao'];
    $frase_marcante= $linha['frase_marcante'];
    $referencias= $linha['referencias'];
    $referencias= explode("**-**", $referencias);?>

    <div class="card-panel">
    
    <?php

    echo "<h6 class='teal-text'>1. Nome ou apelido pelo qual ficou conhecido:</h6><p>$nome_conhecido </p><br><br>";
    echo "<h6 class='teal-text'>2. Nome verdadeiro completo:</h6><p>$nome_verdadeiro </p><br><br>";
    echo "<h6 class='teal-text'>3. Foto ou ilustração do personagem:</h6><p>"?> <img src="<?php echo $endereco_imagem;?>" class="materialboxed" width="40%"> <?php echo "</p><br><br>";
    echo "<h6 class='teal-text'>4. Data de nascimento:</h6><p>$data_nascimento </p><br><br>";
    echo "<h6 class='teal-text'>5. Data de falecimento:</h6><p>$data_falecimento </p><br><br>";
    echo "<h6 class='teal-text'>6. Local de nascimento:</h6><p>$local_nascimento </p><br><br>";
    echo "<h6 class='teal-text'>7. Local de falecimento:</h6><p>$local_falecimento </p><br><br>";
    echo "<h6 class='teal-text'>8. Pais:</h6><p>$pais </p><br><br>";
    echo "<h6 class='teal-text'>9. Outras pessoas famosas da família:</h6><p>$famosos_familia </p><br><br>";
    echo "<h6 class='teal-text'>10. Grupo social da família:</h6><p>$grupo_social_familia </p><br><br>";
    echo "<h6 class='teal-text'>11. Formação (onde estudou e o que estudou):</h6><p>$formacao </p><br><br>";
    echo "<h6 class='teal-text'>12. Profissão:</h6><p>$profissao </p><br><br>";
    echo "<h6 class='teal-text'>13. Área do conhecimento para a qual foi importante:</h6><p>$importancia_area_conhecimento </p><br><br>";
    echo "<h6 class='teal-text'>14. Mudança de grupo social durante sua vida, e qual foi a mudança:</h6><p>$mudanca_grupo_social </p><br><br>";
    echo "<h6 class='teal-text'>15. Evento histórico que participou e sua participação/influência dentro dele:</h6><p>$evento_historico </p><br><br>";
    echo "<h6 class='teal-text'>16. Interferência de sua raça ou gênero dentro de sua carreira profissional:</h6><p>$preconceito </p><br><br>";
    echo "<h6 class='teal-text'>17. Maior contribuição para a sociedade de sua época:</h6><p>$contribuicao </p><br><br>";
    echo "<h6 class='teal-text'>18. Legado deixado pelo personagem:</h6><p>$legado </p><br><br>";
    echo "<h6 class='teal-text'>19. Envolvimento em ato político e qual:</h6><p>$ato_politico </p><br><br>";
    echo "<h6 class='teal-text'>20. Ideias defendidas que geraram reação por parte da sociedade (ideias e reação):</h6><p>$ideias_reacao </p><br><br>";
    echo "<h6 class='teal-text'>21. Frase ou trecho marcante do personagem:</h6><p class='italic'>$frase_marcante </p><br><br>";
    echo "<h6 class='teal-text'>22. Referências:</h6><br>";
    for($i=0; $i<count($referencias); $i++){
        echo $referencias[$i]."<br><br>";
    }
    ?>
    <br>
    <div class="col s12 center">
    <a href="02_index.php" class="waves-effect waves-light btn btn_a">Voltar<i class="material-icons left">keyboard_backspace</i></a>
    </div>
    <br>
    </div>
    <br>
</main>
<?php require_once ".rodape.php"; ?>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>