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

<title>Cadastro de biografia</title>

</head>
<body>

<?php require_once ".cabecalho.php";?>

<main class="container">

<br>
<br>

<h4 class="center-align">CADASTRO DE BIOGRAFIA</h4>

<br>
<div class="card-panel">
<h6 class="right-align grey-text">  * = campo não obigratório</h6>

<form action="04_insere.php" method="post" class="col s12 l5" enctype="multipart/form-data" id="cadastro_biografia">

        <div class="row">
          <div class="col s12 teal-text big">1.</div>
          <div class="input-field col s12">
            <input id="nome_conhecido" name="nome_conhecido" type="text" class="validate" required>
            <label for="nome_conhecido">	Nome ou apelido pelo qual ficou conhecido:</label>
          </div>

          <br><br><br><br><br><br>

           <div class="col s12 teal-text big">2.</div> 
          <div class="input-field col s12">
            <input id="nome_verdadeiro" name="nome_verdadeiro" type="text" class="validate" required>
            <label for="nome_verdadeiro">	Nome verdadeiro completo: </label>
          </div>

          <br><br><br><br><br>
        </div>
        
        <div class="row">
          
         <div class="col s12 teal-text big">3. <br><br></div>
          <div class="file-field input-field">
            <div class="waves-light btn btn_a">
              <span>Selecionar Arquivo<i class="material-icons right">upload</i></span>
              <input type="file" name="endereco_imagem" form="cadastro_biografia"  accept="image/*">
            </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" placeholder="Foto ou ilustração do personagem:*" type="text">
            </div>
          </div>

          <br>

          
          <div class="input-field col s6">
           <div class="teal-text big">4. <br></div> 
            <label for="data_nascimento"><br> Data de nascimento:</label><br>
            <input id="data_nascimento" name="data_nascimento" type="date" class="validate" required>
          </div>
          
          <div class="input-field col s6">
           <div class="teal-text big">5. <br></div> 
            <label for="data_falecimento"><br>	Data de falecimento: </label><br>
            <input id="data_falecimento" name="data_falecimento" type="date" class="validate" required>
          </div>

          <br><br><br><br><br><br><br>

           <div class="col s12 teal-text big">6.</div> 
          <div class="input-field col s12">
            <input id="local_nascimento" name="local_nascimento" type="text" class="validate" required>
            <label for="local_nascimento">	Local de nascimento: </label>
          </div>

          <br><br><br><br><br><br>

           <div class="col s12 teal-text big">7.</div> 
          <div class="input-field col s12">
            <input id="local_falecimento" name="local_falecimento" type="text" class="validate" required>
            <label for="local_falecimento">	Local de falecimento: </label>
          </div>

          <br><br><br><br><br><br>

           <div class="col s12 teal-text big">8.</div> 
          <div class="input-field col s12">
            <textarea id="pais" name="pais" type="text" class="materialize-textarea" form="cadastro_biografia" required></textarea></textarea>
            <label for="pais">	Pais: </label>
          </div>

          <br><br><br><br><br><br>

           <div class="col s12 teal-text big">9.</div> 
          <div class="input-field col s12">
            <textarea id="famosos_familia" name="famosos_familia" type="text" class="materialize-textarea" form="cadastro_biografia" required></textarea>
            <label for="famosos_familia">	Outras pessoas famosas da família: </label>
          </div>

          <br><br><br><br><br><br>

           <div class="col s12 teal-text big">10.</div> 
          <div class="input-field col s12">
            <textarea id="grupo_social_familia" name="grupo_social_familia" type="text" class="materialize-textarea" form="cadastro_biografia" required></textarea>
            <label for="grupo_social_familia">	Grupo social da família: </label>
          </div>

          <br><br><br><br><br><br>

           <div class="col s12 teal-text big">11.</div> 
          <div class="input-field col s12">
            <textarea id="formacao" name="formacao" type="text" class="materialize-textarea" form="cadastro_biografia" required></textarea>
            <label for="formacao">	Formação (onde estudou e o que estudou): </label>
          </div>

          <br><br><br><br><br><br>

           <div class="col s12 teal-text big">12.</div> 
          <div class="input-field col s12">
            <textarea id="profissao" name="profissao" type="text" class="materialize-textarea" form="cadastro_biografia" required></textarea>
            <label for="profissao">	Profissão: </label>
          </div>

          <br><br><br><br><br><br>

           <div class="col s12 teal-text big">13.</div> <br><br>
          <h6 class="grey-text col s12">	Área do conhecimento para a qual foi importante: <br><br></h6>
          <p>
            &nbsp<input name="importancia_area_conhecimento" id="fisica" type="radio" value="Física"/>
            <label for="fisica">Física</label>
          </p>

          <p>
            &nbsp<input name="importancia_area_conhecimento" id="historia" type="radio" value="História"/>
            <label for="historia">História</label>
          </p>

          <p>
            &nbsp<input name="importancia_area_conhecimento" id="sociologia" type="radio" value="Sociologia"/>
            <label for="sociologia">Sociologia</label>
            </p>

          <br><br>

           <div class="col s12 teal-text big">14.</div> 
          <div class="input-field col s12">
            <textarea id="mudanca_grupo_social" name="mudanca_grupo_social" type="text" class="materialize-textarea" form="cadastro_biografia" required></textarea>
            <label for="mudanca_grupo_social">	Mudança de grupo social durante sua vida, e qual foi a mudança: </label>
          </div>

          <br><br><br><br><br><br>

           <div class="col s12 teal-text big">15.</div> 
          <div class="input-field col s12">
            <textarea id="evento_historico" name="evento_historico" type="text" class="materialize-textarea" form="cadastro_biografia" required></textarea>
            <label for="evento_historico">	Evento histórico que participou e sua participação/influência dentro dele: </label>
          </div>

          <br><br><br><br><br><br>

           <div class="col s12 teal-text big">16.</div> 
          <div class="input-field col s12">
            <textarea id="preconceito" name="preconceito" type="text" class="materialize-textarea" form="cadastro_biografia" required></textarea>
            <label for="preconceito">	Interferência de sua raça ou gênero dentro de sua carreira profissional: </label>
          </div>

          <br><br><br><br><br><br>

           <div class="col s12 teal-text big">17.</div> 
          <div class="input-field col s12">
            <textarea id="contribuicao" name="contribuicao" type="text" class="materialize-textarea" form="cadastro_biografia" required></textarea>
            <label for="contribuicao">	Maior contribuição para a sociedade de sua época: </label>
          </div>

          <br><br><br><br><br><br>

           <div class="col s12 teal-text big">18.</div> 
          <div class="input-field col s12">
            <textarea id="legado" name="legado" type="text" class="materialize-textarea" form="cadastro_biografia" required></textarea>
            <label for="legado">	Legado deixado pelo personagem: </label>
          </div>

          <br><br><br><br><br><br>

           <div class="col s12 teal-text big">19.</div> 
          <div class="input-field col s12">
            <textarea id="ato_politico" name="ato_politico" type="text" class="materialize-textarea" form="cadastro_biografia" required></textarea>
            <label for="ato_politico">	Envolvimento em ato político e qual: </label>
          </div>

          <br><br><br><br><br><br>

           <div class="col s12 teal-text big">20.</div> 
          <div class="input-field col s12">
            <textarea id="ideias_reacao" name="ideias_reacao" type="text" class="materialize-textarea" form="cadastro_biografia" required></textarea>
            <label for="ideias_reacao">	Ideias defendidas que geraram reação por parte da sociedade (ideias e reação): </label>
          </div>

          <br><br><br><br><br><br>

           <div class="col s12 teal-text big">21.</div> 
          <div class="input-field col s12">
            <textarea id="frase_marcante" name="frase_marcante" type="text" class="materialize-textarea" form="cadastro_biografia" required></textarea>
            <label for="frase_marcante">	Frase ou trecho marcante do personagem: </label>
          </div>

          <br><br><br><br><br><br>

           <div class="col s12 teal-text big">22.</div> 
          <div class="input-field col s12">
            <textarea id="referencias" name="referencias" type="text" placeholder="Separe as referências utilizando **-**" class="materialize-textarea" form="cadastro_biografia" required></textarea>
            <label for="referencias"> Referências: </label>
          </div>

          <br><br><br><br><br><br>

          <div class="input-field col s4 center">
            <button type="submit" class="waves-effect waves-light btn btn_a center">Enviar<i class="material-icons right">check</i></button>
          </div>

            <div class="input-field col s4 center">
            <button type="reset" class="waves-effect waves-light btn btn_a">Redefinir<i class="material-icons right">refresh</i></button>
          </div>

          <div class="input-field col s4 center">
            <a href="02_index.php" class="waves-effect waves-light btn btn_a center">Cancelar<i class="material-icons right">close</i></a>
          </div>
        </div>
      </form>
     </div>
     <br>
    </div>
</main>

<?php require_once ".rodape.php"; ?>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>
