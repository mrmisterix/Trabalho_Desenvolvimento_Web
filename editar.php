<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>TRABALHO 1</title>

 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
     <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Navegação</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <a class="navbar-brand" href="#">Cadastro</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Início</a></li>
          <li><a href="#">Consultar</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="main" class="container-fluid">
  <div id="main" class="container-fluid">
  <br><br>
  <h4 class="page-header">Dados Item</h4>
  <form action="index.html">

  </form>
  <div class="row">

  <!-- Formulario Cadastro -->
  <form method="POST" action="cadastrar.php">
     <!-- Campo de Texto -->
     <div class="form-group col-md-4">
       <label for="campo1"  >Nome</label>
       <input type="text" name="tx_nome" class="form-control" id="campo1">
     </div>
     
     <div class="form-group col-md-4">
       <label for="campo2">Descrição</label>
       <input type="text" name="tx_descricao" class="form-control" id="campo3">
     </div>
     
     <div class="form-group col-md-4">
       <label for="campo3">Fabricante</label>
       <input type="text" name="tx_fabricante" class="form-control" id="campo3">
     </div>
    <br><br><br>

    <!-- Campo do Tipo Radio Button -->
    <h4 class="page-header">Tipo do Produto</h4>
    <div class="radio">
      <label><input type="radio" name="rb_tipo" value="Pefume">Perfume</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="rb_tipo" value="Creme">Creme</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="rb_tipo" value="Shampoo">Shampoo</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="rb_tipo" value="Protetor Solar">Protetor Solar</label>
    </div>

    <!-- Campos do Tipo Checkbox--> 
    <h4 class="page-header">Indicação do Produto</h4>
    <div class="checkbox">
      <label><input type="checkbox" name="cb_crianca" value="Criança">Criança</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="cb_adolescente" value="Adolescente">Adolescente</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="cb_adulto" value="Adulto">Adulto</label>
    </div>
    <br>
  </div>
    <div id="actions" class="row">
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="reset" class="btn btn-secundary">Limpar</button>
      </div>
    </div>
  </form>
<br>
 <h3 class="page-header">Sistema desenvolvido por Ariel Lopes e Márlon da Rosa</h3>
</div>
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php 
    //Abertura do Arquivo
    $abrir_arquivo = fopen("arquivos/" .$_POST['tx_nome'].".txt", "w");

    //Tratamento Caso Algum Campo esteja Vazio!
    if (empty($_POST['tx_nome'])) echo "O Campo Nao Pode Ser Vazio!<br>";
    if (empty($_POST['tx_email'])) echo "O Campo Nao Pode Ser Vazio!<br>";
    if (empty($_POST['cb_pessoal']) && empty($_POST['cb_profissional'])) echo "Pelo menos um campo deve ser marcado!<br>";
    if (empty($_POST['rb_grupo'])) echo "Marque uma Opçao!<br>";

    //Gravaçao das linhas do arquivo
    fwrite($abrir_arquivo, $_POST['tx_nome'] ."\r\n");
    fwrite($abrir_arquivo, $_POST['tx_email'] ."\r\n");
    if(isset($_POST['cb_pessoal'])) fwrite($abrir_arquivo, $_POST['cb_pessoal'] ."\r\n");
    if(isset($_POST['cb_profissional']))fwrite($abrir_arquivo, $_POST['cb_profissional'] ."\r\n");
    fwrite($abrir_arquivo, $_POST['rb_grupo'] ."\r\n");
    
    //Fechando o Arquivo
    fclose($abrir_arquivo);

    //Mensagem de Confirmaçao
    echo "Seus Dados Foram Salvos Com Sucesso!!!";
?>

<html>
<body>
    <p><a href="cadastrar.php">Cadastrar</a></p>
    <p><a href="listar.php">Editar</a></p>
    <p><a href="listar_completo.php">Listar Produtos</a></p>
</body>
</html>
