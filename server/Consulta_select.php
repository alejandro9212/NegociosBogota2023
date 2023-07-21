<?php
//incluimos la conexion 
include './conexion.php';

// creamos la centencia sql para llamar los datos de la base de datos de la tabla registro
$peticion = 'SELECT * FROM registro';
$consulta = mysqli_query($con, $peticion);
while ($update = mysqli_fetch_array($consulta)) {
    //creamos una tabla donde van los datos de la tabla
?>
    <tr>
        <th><?php echo $update['idusuario'] ?></th>
        <td><?php echo $update['numid'] ?></td>
        <td><?php echo $update['nombres'] ?></td>
        <td><?php echo $update['apellidos'] ?></td>
        <td><?php echo $update['email'] ?></td>
        <td><?php echo $update['password'] ?></td>
        <td><?php echo $update['f_nacimiento'] ?></td>

        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <td>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
            <td>
                <button type="button" class="btn btn-warning">Editar</button>
            </td>
            <td>
                <button type="button" class="btn btn-success">Ver</button>
            </td>

        </div>

    </tr>
<?php
}
?>