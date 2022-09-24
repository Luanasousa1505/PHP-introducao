<?php
include "config.php";
        if(isset($_post['update'])){
            $primeironome = $_post['primeironome'];
            $ultimonome = $_post['primeironome'];
            $email = $_post['primeironome'];
            $passwor = $_post['primeironome'];
            $genero = $_post['primeironome'];

            $sql = "UPDATE 'cliente'.'usuarios' SET 'primeironome' =$primeironome',
            ultimonome'= '$ultimonome'; 'email' = '$email','password' = '$password', 'genero' = $genero'
            WHERE 'id' = '$id'";

            $result = $conn->query($sql);
            if($result == TRUE ){
                echo "Atualizado com Sucesso!";
            }else{
                echo"erro".$sql."<br>". $conn->error;
            };

        }
if(isset($_GET["id"])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM 'cliente'.'usuarios' WHERE 'id'= '$id'";
    $result = $conn->query($sql);

    if($result->num_rows >0){
        while($row = $result-> fetch_assoc()){
            $primeironome = $row[]
        }
    }

}