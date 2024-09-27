<?php
$conexion=mysqli_connect('localhost','root','',"registro");
$sql="SELECT * FROM datos";
        
$result = mysqli_query($conexion, $sql);

if ($result->num_rows>0){
    echo "<table border='1'>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                        <th>Ciudad</th>
                        <th>Calle</th>
                        <th>NumeroC</th>
                        <th>CodigoP</th>
                        <th>Correo</th>
                    </tr>";
    while ($row = $result->fetch_assoc()){
        echo "<tr>
                        <td>" . $row['Nombre'] . "</td>
                        <td>" . $row['Apellido'] . "</td>
                        <td>" . $row['Edad'] . "</td>
                        <td>" . $row['Sexo'] . "</td>
                        <td>" . $row['Ciudad'] . "</td>
                        <td>" . $row['Calle'] . "</td>
                        <td>" . $row['NumeroC'] . "</td>
                        <td>" . $row['CodigoP'] . "</td>
                        <td>" . $row['Correo'] . "</td>
                      </tr>";

    }
}
mysqli_close($conexion);
?>