<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud pa enviar correo</title>
    <link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
      <div class="container mt-5">

        <div class="card bg-primary">
          <div class="card-header">
            <h3 class="card-title  w-100 text-center font-weight-bold text-light">CORREO WEB</h3>  
          </div>
          <div class="card-body">
            <form action="correo.php" method="post">
                <input type="text" name="txtNombre" id="txtNombre" class="form-control mt-4" placeholder="Ingrese su nombre">
                <input type="mail" name="txtCorreo" id="txtCorreo" class="form-control mt-4" placeholder="Ingrese su correo">
                <input type="text" name="txtCorreoDestinatario" id="txtCorreoDestinatario" class="form-control mt-4" placeholder="Ingrese correo destinatario">
                <input type="text" name="txtAsunto" id="txtAsunto" class="form-control mt-4" placeholder="Ingrese Asunto">
                <textarea name="txtMensaje" id="txtMensaje" cols="30" rows="4" class="form-control mt-4"></textarea>
                <br>
                <div class="text-center">
                  <button name="enviar" id="enviar" type="submit" class="btn btn-success">Enviar Correo</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>