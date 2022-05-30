<?php
 $conectar = mysqli_connect('localhost','jhan','1234','html');

 if(!$conectar){
     echo "No conectado";
 }

 $nombres = $_POST['nombres'];
 $email = $_POST['email'];
 $numero = $_POST['numero'];

 $sql = "INSERT INTO datos(nombres, email,numero) VALUES ('$nombres', '$email','$numero')";

 $ejecutar = mysqli_query($conectar, $sql);

 if(!$ejecutar){
     echo "Hay algun error";
 }else{
     echo "Datos almacenados correctamente";
 }
?>
