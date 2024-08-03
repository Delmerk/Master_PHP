<!-- https://stackoverflow.com/questions/69207368/constant-filter-sanitize-string-is-deprecated -->
<!-- https://benhoyt.com/writings/dont-sanitize-do-escape/ -->
<!-- https://elibro-net.bibliotecavirtual.unad.edu.co/es/ereader/unad/217084?page=216 -->
<!DOCTYPE html>
<html>
  <head>
    <title>Formulario Saneado</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <h1>Formulario saneado</h1>
      <div class="col-md-12 well">
        <?= filter_var($_POST["nombre"], FILTER_SANITIZE_SPECIAL_CHARS); ?>
      </div>
      <div class="col-md-12 well">
        <?=filter_var($_POST["edad"], FILTER_SANITIZE_NUMBER_INT); ?>
      </div>
      <div class="col-md-12 well">
        <?=filter_var($_POST["web"], FILTER_SANITIZE_URL)?>
      </div>
      <div class="col-md-12 well">
        <?=filter_var($_POST["correo"], FILTER_SANITIZE_EMAIL)?>
      </div>
    </div>
  </body>
</html>
