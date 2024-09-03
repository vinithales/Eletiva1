<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="ms-5 mt-5">Exercicio 2</h1>
    <form action="resposta2.php" method="post" class="m-5">
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


    </form>
  
  </body>
</html>