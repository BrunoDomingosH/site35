<?php
  include("conecta.php");
    $email="";
    $senha="";
    $senha2="";
    $cep="";
    $cpf="";
    $nome="";
    $sobrenome="";
    $data_aniversario="";
  if(isset($_GET["email"]))
  {
    $email=$_GET["email"];
    $comando = $pdo->prepare("SELECT * FROM cadastro WHERE email='$email'");
    $resultado = $comando->execute();
    while($linha=$comando->fetch() )
    {
      $email=$linha["email"];
      $senha=$linha["senha"];
      $senha2=$linha["senha2"];
      $cep=$linha["cep"];
      $cpf=$linha["cpf"];
      $nome=$linha["nome"];
      $sobrenome=$linha["sobrenome"];
      $data_aniversario=$linha["data_aniversario"];
    
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logar com email adm</title>

    <link rel="stylesheet" href="pagina_registro_por_email.css">
   
    <script src="pagina_registro_por_email.js"></script>        

</head>
<body>
 
    <div class="d1">
        <div class="d2">
            <div class="dd1"><img onclick="Aparecer();" src="dd1.png" alt="" width="15px"></div>
            <a href="p.principal.html"> <img src="dd3.png" alt="" width="120px"></a>
            <a href="pagina_carrinho_vazio.html"><div class="dd1"><img src="dd2.png" alt="" width="20px"></div></a>
        </div>
    </div>

    <div class="lateral" id="lateral"> 
        <div class="logo"><img src="dd3.png" alt="" width="150px"></div>
        <div class="opcoes">    
            <a href="pagina_entrar_cadastrar.html"><div class="cadastro"> 
                <img class="imagem" src="usuario.png" width="17px">USUARIO
            </div></a>
            <a href="p.principal.html"><div class="cadastro"> 
                <img class="imagem" src="produtos.png" width="20px">PRODUTOS
            </div></a>
            <div class="cadastro">
                <a href="pagina_carrinho_vazio.html"><img class="imagem" src="dd2.png" width="20px"> CARRINHO
            </div></a>
            <div class="cadastro">
                <a href="fale_conosco.html"> FALE CONOSCO
            </div></a>
            <div onclick="Fechar();" class="fechar">FECHAR</div>
        </div>
    
    </div>
    <form action="crud.php" method="post" class="formu_tam">
    <div class="divp12">
        <div class="divp2"><b>Registro por email ADM</b><img width="25px" src="LOGO1.png"></div>
        <div class="divp2">Solicitamos apenas algumas<br>
        informações,essenciais
        </div>
        
        <div class="divp3">
            <div class=><table>
                <tr>
                  <td>Email:</td>
                  <td><input class="caixa_de_resposta" value="<?php echo($email); ?>" type="text" name="email" size="15"> <img src="lupa.png" width="15px"> <br /></td>
                </tr>
                <tr>
                  <td>Senha:</td>
                  <td><input class="caixa_de_resposta" value="<?php echo($senha); ?>"  type="password" name="senha" size="20"> <br /></td>
                </tr>
                <tr>
                    <td>Repetir senha:</td>
                    <td><input  class="caixa_de_resposta" value="<?php echo($senha2); ?>" type="password" name="senha2" size="20"> <br /></td>
                  </tr>
                  <tr>
                    <td>CEP:</td>
                    <td><input class="caixa_de_resposta" value="<?php echo($cep); ?>" type="text" name="cep" size="5" maxlength="8"> </td>
                  </tr>
                  <tr>
                    <td>CPF:</td>
                    <td><input class="caixa_de_resposta" value="<?php echo($cpf); ?>" type="text" name="cpf" size="9" maxlength="11"> </td>
                  </tr>
                  <tr>
                    <td>Nome:</td>
                    <td><input class="caixa_de_resposta" type="text" value="<?php echo($nome); ?>" name="nome" size="20"> <br /></td>
                  </tr>
                  <tr>
                    <td>Sobrenome:</td>
                    <td><input class="caixa_de_resposta" value="<?php echo($sobrenome); ?>" type="text" name="sobrenome" size="20"> <br /></td>
                  </tr>
                  <tr>
                    <td>Data de nascimento:</td>
                    <td><input class="caixa_de_resposta" value="<?php echo($data_aniversario); ?>" type="date" name="data_aniversario" size="20"> <br /></td>
                  </tr>
                
                

               </table></div>
               
        </div>
        <div class="botao">
            <input type="submit" value="Excluir" name="excluir" class="botoes">
            <input type="submit" value="Alterar" name="alterar" class="botoes">
            <input type="submit" value="Inserir" name="inserir" class="botoes">
            <input type="submit" value="Listar" name="listar" class="botoes">
        </div>
    
        <div class="divp4"><input id="termo" class="quadradotermo" type="checkbox">Eu li e concordo com os termos de uso</div>
        <div class="divp5"><a onclick="abrir();" href="#">Finalizar cadastro</a> </div>
    </div>
    </form>

</body>
</html>