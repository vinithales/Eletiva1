<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <main class="container">
        <form action="exer4resp.php" method="post">
            <div class="row">
                <div class="col">
                    <label for="day" class="form-label">Informe o dia: </label>
                    <input type="int" name="day" id="day" class="form-control">
                </div>
                <div class="col">
                    <label for="month" class="form-label">Informe o mês: </label>
                    <input type="int" name="month" id="month" class="form-control">
                </div>
                <div class="col">
                    <label for="year" class="form-label">Informe o ano: </label>
                    <input type="int" name="year" id="year" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-danger">
                        Enviar
                    </button>
                </div>
            </div>
        </form>
       
    </main>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>