<?php
require_once('conex.php');

$pelido = $_POST["apelido"];
$candidato = $_POST["candidato"];
$datanascimento = $_POST["datanascimento"];
$documento = $_POST["documento"];
$numero = $_POST["numero"];
$sexo = $_POST["sexo"];
$status = $_POST["status"];
$provincia = $_POST['provincia'];
$contacto = $_POST["contacto"];

$Cadastrar=mysqli_query($ligar, " INSERT INTO alunos (apelido, candiadto, dataNascimeto, tipoDocumento, ndocumento, sexo, status, provincia, contacto)  VALUES ('$pelido', '$candidato', '$datanascimento', '$documento', '$numero', '$sexo', '$status', '$provincia', '$contacto')" );

if(isset($Cadastrar)){
    
    echo " Funcionadnod";
        
}else{
    echo"off";
}

?>