<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form  name="fr1"  action="#" method="post">
        <label for="estados">Estados</label>
        <select name="estados" onchange="form.submit()" >
            <option ></option>

            <?php  
            require_once "estado.php";
            $estados=buscaEstado();
            
            foreach($estados as $estado){
                echo "<option value=".$estado->id.">". $estado->nomeEstado."</option>";
            }?>
        </select>

        <label for="cidade">Cidades</label>
        <select name="cidades">
            <?php
                if($_POST){
                    require_once "cidade.php";
                    $cidades = buscaCidade($_POST["estados"]);
                   
                    foreach($cidades as $cidade){
                        echo "<option value=". $cidade->id .">". $cidade->nomeCidade. "</option>";
                    }
                }?>
        </select>
    </form>
</body>
</html>
