<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>


    <form  method="POST" action="form_exec.php">
        <label for="modelo">Modelo: <input type="text" name="modelo"></label><br><br>
        <label for="marca">Marca: <input type="text" name="marca"></label><br><br>

        <label for="combustivel">Selecione combustível:</label>
        <select name="combustivel">
            <option value="">--Combustível--</option>
            <option value="A">Álcool</option>
            <option value="G">Gasolina</option>
            <option value="F">Flex</option>
        </select>
        
          <br><br>

          <input type="submit" value="enviar" > 

    </form>
</body>
</html>
