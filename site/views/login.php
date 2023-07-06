<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            height: 100vh;
            width: 100vw;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login - Calendário</title>
</head>
<body>
    <header class="container-fluid bg-dark text-light text-center">
        <h1>Login para agendamento</h1>
    </header>


    <main class="row container d-flex justify-content-center align-items-center vh-100">
        <form action="/exercíciosIndividuais/SimpleRouter3/public/login" method="post" class="border p-3 col-6">
            <span class="text-danger">{{erro}}</span>
            <div class="row d-flex flex-column mb-5">
                <label for="email">E-mail:</label>
                <input class="col-12" name="email" type="email">
            </div>

            <div class="row d-flex flex-column mb-5">
                <label for="senha">Senha:</label>
                <input class="col-12" name="senha" type="password">
            </div>

            <div class="d-flex justify-content-center align-items-center">
                <input class="btn btn-primary" type="submit" value="Entrar">
            </div>
            <span class="d-flex justify-content-center align-items-center mt-2">Não possui conta ainda ?? <a class="" href="/exercíciosIndividuais/SimpleRouter3/public/login/cadastro">Crie uma conta</a></span>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
