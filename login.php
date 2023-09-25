<?php

$CPF = $_POST["CPF"];
$Senha = $_POST["Senha"];

$con = mysqli_connect('localhost','root','root');
mysqli_select_db('sa_bombas', $con);

	
$query = "SELECT cpf, senha FROM user WHERE cpf = $CPF and senha = $Senha";

$result = mysqli_query($query);

if($result){
        $string = "login bem sucedido";
        $data = array("minha_string" => $string);
        $json_texto = json_encode($data);
        echo($json_texto);
    
}else{
    $string = "CPF ou Senha informados inválidos";
    $data = array("minha_string" => $string);
    $json_texto = json_encode($data);
    echo($json_texto);
}
?>