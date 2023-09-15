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
    
    <title>Home</title>

</head>
<body>

  <?php require_once ".cabecalho.php"; ?>
       
    <main>

    <br><br>
      
    <h4 class="center-align">OBJETIVO DA PRÁTICA PROFISSIONAL INTEGRADA:</h4>

    <br>
    <h5 class="container texto indent"> A prática profissional integrada tem como objetivo a pesquisa e síntese 
    de informações biograficas específicas de personagens históricos em um trabalho escrito e a posterior criação
    de um sistema de manutenção de objetos (CRUD - Create Read Update Delete) e a inserção
    das informações dentro do mesmo.<br></h5><br>

    <h5 class="container texto indent"> O presente sistema é essa resolução final da PPI. O arquivo contendo a
    resolução da parte escrita e a opção de listagem das biografias encontram-se abaixo: <br><br></h5><br>
    <h5 class="container texto indent bold"> Disciplinas:</h5><br><br>

    <h5 class="container texto indent italic">- Área Básica:</h5><br>
    <h5 class="container texto indent">   . Física<br></h5>
    <h5 class="container texto indent">   . História<br></h5>
    <h5 class="container texto indent">   . Sociologia<br></h5>
    
    <br>
    <br>

    <h5 class="container texto indent italic">- Área Técnica:</h5><br>
    <h5 class="container texto indent">   . Programação III<br></h5>
    <h5 class="container texto indent">   . Tópicos Emergentes em Informática<br></h5>
    <br>
    <br>

      <h5 class="container center-align">

        <a href="arquivos/Prática Profissional Integrada ~ Resolução Escrita - Biografias de Personalidades Históricas, Eduardo B. Gomes e Reinaldo Z. Wendt.pdf" target="_blank" class="waves-effect btn btn_a">
          Download<i class="material-icons right">file_download</i>
        </a>

          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

        <a href="02_index.php" class="waves-effect btn btn_a">
          Listar Biografias
        </a>
      </h5>
      <br>
      <br>
    
    </main>

    <?php require_once ".rodape.php"; ?>
      
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>