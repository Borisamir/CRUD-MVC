<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="..\util\bootstrap\css\bootstrap.min.css" rel="stylesheet">
    <script src="..\util\bootstrap\js\bootstrap.min.js"></script>
    <title>.: Usuarios :.</title>
</head>
<body>
  <?php
  require_once __DIR__ . '/../controllers/UsuarioController.php';
  $usuario = new UsuarioController();
  ini_set('display_errors', 1);
  error_reporting(E_ALL);


  $action = $_GET['action'] ?? "index";
  $id = $_GET['id'] ?? null;

  switch($action) {
      case "index":
          $usuario->index();
          break;
      case "editar":
          $usuario->find($id);
          break;
      case "update":
          $id = $_GET['id'];
          $nombre = $_POST['nombre'];
          $apellido = $_POST['apellido'];
          $usuario->update($id, $nombre, $apellido);
          break;
      case "eliminar":
          $usuario->delete($id);
          break;
      case "create":
          $usuario->create();
          break;
      case "store":
          $usuario->store($_POST);
          break;
  }

  
?>
</body>
</html>