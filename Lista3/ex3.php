<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="ms-5 mt-5">Exercicio 3</h1>
    <form action="resposta3.php" method="post" class="m-5">
        <div class="row">
            <div class="col">
              <label for="fraseA" class="form-label">Informe uma frase: </label>
              <input type="text" name="fraseA" id="fraseA" class="form-control">  
            </div>
            <div class="col">
                <label for="fraseB" class="form-label">Informe outra frase: </label>
                <input type="text" class="form-control"name="fraseB" id="fraseB">
            </div>
        </div>
        <div class="row ">
            <div class="col">
                <button type="submit" class="btn btn-danger mt-3">Enviar</button>
            </div>
        </div>


    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-qXmxGyaXAr8Yzue8CX1uLKqa6DQ3xgFQdHsoMxpeZVpxtlvEFBbQ0V3mAhlsz1nx" crossorigin="anonymous"></script>
  </body>
</html>