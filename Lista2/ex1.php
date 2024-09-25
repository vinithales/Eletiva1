<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php
      require_once("nav.php");
    ?>
    <main class="container">
      <h1 class="ms-5 mt-5">Exercicio 1</h1>
      <form action="exer1resp.php" method="post" class="m-5">
          <div class="row">
              <div class="col">
                <label for="valor1" class="form-label">Informe o valor 1: </label>
                <input type="number" name="valor1" id="valor1" class="form-control">  
              </div>
              <div class="col">
                  <label for="valor2" class="form-label">Informe o valor 2: </label>
                  <input type="number" class="form-control"name="valor2" id="valor2">
              </div>
          </div>
          <div class="row ">
              <div class="col">
                  <button type="submit" class="btn btn-danger mt-3">Enviar</button>
              </div>
          </div>
    </main>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>