<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.: Editar :.</title>
</head>
<body>
    <h1>Editar</h1>

    <form action="index.php?action=update&id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="mb-3">

            <label for="" class="form-label">ID</label>
            <input type="text" class="form-control" name="id" disabled value=<?php echo $_GET['id']; ?>>

            <label for="" class="form-label">Nombre</label>
            <input type="text" class="form-control" placeholder="Ingresar un nombre ..." name="Nombre" value=<?php echo $usuario['Nombre'] ; ?>>

            <label for="" class="form-label">Apellido</label>
            <input type="text" class="form-control" placeholder="Ingresar un apellido ..." name="Apellido" value=<?php echo $usuario['Apellido'] ; ?>>
        </div>
        
        <button type="submit" class="btn btn-primary"> Editar </button>
    </form>

</body>
</html>