<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="/src/style/style.css">
    </head>
    <body>
    
    </head>
    <body>
        <main class="container-fluid login-container">
            <div class="central-box row">
                <div class="col-md-6 illustration d-flex flex-column justify-content-center">
                    <img src="/src/img/banner.png" alt="">
                </div>
                <div class="col-md-6 form-section d-flex align-items-center">
                    <div class="form-box">
                        <div class="text-center mb-4">
                            
                            <h2>Login</h2>
                        </div>
                        <form>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="email@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="password" placeholder="Insira sua senha" required>
                            </div>
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="manterConectado">
                                <label class="form-check-label" for="manterConectado">Manter conectado</label>
                                <a href="#" class="float-end">Recuperar senha</a>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Entrar</button>
                                <button type="button" class="btn btn-outline-primary">Cadastre-se grátis</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>