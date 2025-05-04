<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="util\bootstrap\css\bootstrap.min.css" rel="stylesheet">
    <script src="util\bootstrap\js\bootstrap.min.js"></script>
    <title>.: Usuarios :.</title>
</head>
<body>
    <h1>Lista de Usuarios </h1>
    <table class ="table">
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Apellido</td>
        </tr>

        <?php
        foreach($usuarios as $usuario){
            echo "<tr>
                    <td> $usuario[id]</td>
                    <td> $usuario[Nombre]</td>
                    <td> $usuario[Apellido]</td>
                    <td>
                            <a href=index.php?action=editar&id=$usuario[id]&name=$usuario[Nombre]&lastname=$usuario[Apellido]>Editar</a>
                            <a href=index.php?action=eliminar&id=$usuario[id]&name=$usuario[Nombre]&lastname=$usuario[Apellido]>Eliminar</a>
                            <a href=index.php?action=create>Nuevo Alumno</a>
                    <td>
                  </tr>";

        }
    ?>
    </table>
</body>
</html>

  
