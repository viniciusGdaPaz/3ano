<?php

    include"conexao.php";
    $dados = $conn->query('select * from tds');
    echo"<style>";
    echo"td{ font-size:20px;}";
    echo"</style>";

    echo"<table border='10px'>";
    echo"<header>";
    echo"<th>ID</th>";
    echo"<th>NOME</th>";
    echo"<th>IDADE</th>";
    echo"<th>ANO</th>";
    echo"</header>";
    foreach($dados as $aluno){
        echo"<tr>";
        echo"<td>";
        print_r($aluno["id"]);
        echo"</td>";

        echo"<td>";
        print_r($aluno["nome"]);
        echo"</td>";
        
        echo"<td>";
        print_r($aluno["idade"]);
        echo"</td>";
        

        echo"<td>";
       print_r($aluno["ano"]);
        echo"</td>";
        
    }

    echo"</table>";

?>
