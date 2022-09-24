<?php
    $nome = $_POST['nomecliente'];
    $sobrenome = $_POST['sobrenomecliente'];
    $sexo = $_POST['sexo'];
    $strcon = mysqli_connect('localhost','root','senac','cliente') or
    die ("erro de Conexão do banco,");
    $sql = "INSERT INTO adastro VALUES";
    $sql = "('$nome', '$sobrenome', 'sexo')";
    mysqli_query($strcon,$sql) or die ("Erro ao cadastrar");
    mysqli_close($strcon);
    echo "cliente Cadastrado com Sucesso!";
    echo "<a href='formulario.html'> clique aqui para novo cadastro </a>";
    echo "<a href='formulario.html'> clique aqui para realizar uma consulta </a>";

?>