<?php

if (isset($_POST['subir'])){
    if( strlen($_POST['Nombre'])>=1 && strlen($_POST['Apellido'])>=1 && strlen($_POST['FechaN']) >=1 && strlen($_POST['Sexo'])>=1 && strlen($_POST['Ciudad'])>=1 && strlen($_POST['Calle'])>=1 && strlen($_POST['NumeroC'])>=1 && strlen($_POST['CodigoP'])>=1 && strlen($_POST['Correo'])>=1 ){
        $conexion=mysqli_connect('localhost','root','',"registro");
        
        if (!$conexion){
            echo"Error, No se pudo conectar a la base de datos". mysqli_connect_errno()." : ". mysqli_connect_error().PHP_EOL;
            die;
        }
        $sql="INSERT INTO datos (Nombre, Apellido, Edad, Sexo, Ciudad, Calle, NumeroC, CodigoP, Correo) VALUES ('{$_POST["Nombre"]}', '{$_POST["Apellido"]}', '{$_POST["FechaN"]}', '{$_POST["Sexo"]}', '{$_POST["Ciudad"]}', '{$_POST["Calle"]}', '{$_POST["NumeroC"]}', '{$_POST["CodigoP"]}', '{$_POST["Correo"]}')";
        if (($result = mysqli_query($conexion, $sql)) === false) {
            die(mysqli_error($conexion));
        }
        mysqli_close($conexion);
        if ($result){
        
        echo ("<script> alert('te has registrado correctamente') </script>");
        echo"<script>location.href='/Karma/index.html'</script>";
        } 
    }
    else{
        echo ("<script>alert('Es necesario llenar todos los campos, intenta de nuevo') </script>");
        echo ("<script>location.href='Login.html'</script>");
    }

}

?>