<?php
  
    $senha = $_POST['senha'];
    $login = $_POST['login'];


if($senha == null & $login  == null){

    echo"<form action='form.php' method='post'>";
    echo"<fieldset>";
    echo" <label for='login'>Informe o nome de login</label>";
    echo" <input type='text' name='login'>";
    echo"<br> <label for='senha'> Informe a senha</label>";
    echo"<input type='password' name='senha'>";
    echo"<br><input type='submit' value='logar'>";
    echo" </fieldset>";
    echo"</form>";
     }

    else if($senha == "tds" & ($login == "ifpr" || $login == "IFPR")){
     echo"<h1>BEM VINDO AO TDS</h1>";

   }else if($senha != "tds" || ($login != "ifpr" & $login != "IFPR")){
   
        echo"  <h1>Acesso NEGADO!!</h1> ";
        echo"<a href='form.php'>Tente novamente</a>";
   }

    






   

?>

