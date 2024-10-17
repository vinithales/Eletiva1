<?php

require_once 'header.php';
?>


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
                <div id="resultado"></div>
                <form method="post" id="idForm">
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
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<script src="/src/js/loginCapture.js"></script>

<?php require_once 'footer.php'; ?>