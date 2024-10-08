<?php

  //teste de conexão com a base de dados

  /*include_once(__DIR__."/../../util/Connection.php");
  $conn = Connection::getConnection();
  print_r($conn);*/

  include_once(__DIR__."/../../controller/alunoController.php"); 
  $alunoCont = new AlunoController();
  $alunos = $alunoCont->listar();
  //print_r($alunos);





  //inclusão do html com header
  include_once(__DIR__."/../include/header.php");
?>
<h2>Listagem de Alunos</h2>

<table border="1">
    <!--cabeçalho da tabela -->
    <tr>
        <tH>ID</tH>
        <th>Nome</th>
        <th>Idade</th>
        <th>Estrangeiro</th>
        <th>Curso</th>
        
    </tr>
    <!--Dados da tabela -->

    <?php foreach($alunos as $a):?>
        <tr>
            <td><?php echo $a->getId()?></td>
            <td><?= $a->getNome()?></td>
            <td><?= $a->getIdade()?></td>
            <td><?= $a->getEstrangeiroText()?></td>
            <td><?= $a->getCurso()?></td>
        </tr>
    <?php endforeach;?>    
</table>

<?php
    include_once(__DIR__."/../include/footer.php");
?>


           
      
