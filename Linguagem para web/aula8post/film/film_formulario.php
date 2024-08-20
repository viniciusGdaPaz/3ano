<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="film_card.php" method="post">
       <fieldset>
           <label for="nome">Nome do filme</label>
           <input type="text" name="nome"><br><br>

           <label for="diretor">Diretor do filme</label>
           <input type="text" name="diretor"><br><br>
           
           <label for="ano">Ano do filme</label>
           <input type="number" name="ano"><br><br>
           
           <label for="foto">Informe o link da foto do filme</label>
           <input type="text" name="foto"><br><br>
           
           <input type="submit" value="Criar">
       </fieldset>
     </form>
</body>
</html>
