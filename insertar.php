<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Insertar manuales online</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>

<body>
<div class="alert alert-primary" role="alert">
  Insertar datos en MySQL
</div>
	<div class="container mt-2">
		<div class="row">
  <form action="resultados.php" method="post" name="form" enctype='multipart/form-data'>
  <div class="form-group">
    <label for="exampleInputPassword1">Inserte su nombre:</label>
    <input type="text" name="nombre" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Inserte sus apellidos:</label>
    <input type="text" name="apellidos" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Inserte su mail: </label>
    <input type="text" name="email" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Inserte su movil:</label>
    <input type="text" name="movil" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</body>
</html>