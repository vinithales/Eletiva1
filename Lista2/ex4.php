<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Exercicio 4</h1>
    <form action="exer4resp.php" method="POST"class="m-5">
        <div class="row">
            <div class="col">
                <label for="valor1" class="form-label">Infome o valor 1: </label>
                <input type="number" name="valor1" id="valor1" class="form-control">
            </div>
            <div class="col">
                <label for="valor2" class="form-label">Informe o valor 2: </label>
                <input type="number" name="valor2" id="valor2" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-danger mt-2">
                    Enviar
                </button>
            </div>
        </div>
    </form>
</body>
</html>