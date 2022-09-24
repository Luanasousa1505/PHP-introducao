
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de clientes</title>
</head>
<body>
    <h3>Formulario de Cadastro de cliente </h3><br>

    <form name="Cadastro" action="Cadastra.php" method="POST">
        <label> Nome do Cliente: </label>
        <input type="text" nome="NomedoCliente" size="30"><br>
        <label> Sobrenome do Cliente: </label>
        <input type="text" nome="sobrenomedoCliente" size="45"><br>
        <label> Sexo do Cliente: </label>
        <select nome="sexo">
        <option value="M">Masculino</option>
        <option value="F">Feminino</option>
        <option value="N">Não Declarado </option>
    </select><br>
    <input type="sebmit" nome="enviar" value="Enviar">
    </form>
</body>
</html>