<?php
  //vERIFICAR TIPO DA REQUISIÇÃO
  $usuarioLogado = false;
    if(isset($_POST['login']) && isset($_POST['senha']))   {
        
        //Requisição tipo post
        if($_POST['login'] == "ifpr"  && $_POST['senha'] == "tds"){
            $usuarioLogado = true;
        } else{
            $erro = "login ou senha incorretos";
        }
    }

    if($usuarioLogado){
       echo"<br> Sim" ;   
    }else{
        echo"<br> Não" ; 
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>LOGIN</h1>
    <?php if(! $usuarioLogado):?>
        
    
        <form method="post" >
            

            <label for="login">Login</label>
            <input type="text" name="login" placeholder="informe o login"><br><br>
            

            <label for="senha">Senha</label>
            <input type="password" name="senha" placeholder="informe a senha"><br><br>
           

            <input type="submit" value="Logar">

                

        </form>

        <br>

        <?php  echo "".$erro ?>


    <?php  else :?>
       <p>BEM VINDO AO TDS</p>
       <br>
       <a href="formulario.php"><button>deslogar</button></a>
    <?php endif; ?>
      

</body>
</html>
