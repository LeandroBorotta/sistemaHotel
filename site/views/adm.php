<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Home - Administração</title>
    <style>
        .borde{
            border: solid yellow 5px;
        }
    </style>
</head>
<body>

    <nav class="navbar bg-dark">
            <div class="container">
                <a href="/exercíciosIndividuais/SimpleRouter3/public/home/adm" class="navbar-brand d-flex align-items-center">
                <i class="bi bi-calendar-event fs-1 me-2"></i>
                    Hotel Scheduler
                </a>
                <button class="navbar-toggler d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#MenuNavbar">
                    <span class="d-flex align-items-center justify-content-between">

                    <svg xmlns="http://www.w3.org/2000/svg" class="text-primary mx-3" width="40" height="40" fill="currentColor" class="bi bi-emoji-laughing-fill" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5c0 .501-.164.396-.415.235C6.42 6.629 6.218 6.5 6 6.5c-.218 0-.42.13-.585.235C5.164 6.896 5 7 5 6.5 5 5.672 5.448 5 6 5s1 .672 1 1.5zm5.331 3a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5zm-1.746-2.765C10.42 6.629 10.218 6.5 10 6.5c-.218 0-.42.13-.585.235C9.164 6.896 9 7 9 6.5c0-.828.448-1.5 1-1.5s1 .672 1 1.5c0 .501-.164.396-.415.235z"/>
                    </svg>
                </span>
                    <span class="text-light"> {{nome}}  </span>
                </button>  
                
                <div class="collapse navbar-collapse" id="MenuNavbar">
                    <div class="navbar-nav  ms-auto border-top mt-3">
                        <a href="/exercíciosIndividuais/SimpleRouter3/public/adm/adicionar" class="nav-link active">Adicionar Hotel</a>
                        <a class="nav-link" href="/exercíciosIndividuais/SimpleRouter3/public/sair"> SAIR</a>
                    </div>
                </div>
                
            </div>
   </nav>

   <section class="navbar bg-body-secondary">
        <div class="container justify-content-end">
            <form action="#" class="d-flex">
                <div class="input-group ms-auto bg-dark">
                    <form method="get">
                        <input type="search" name="search" id="search" class="form-control border-dark" placeholder="Buscar...">
                        <button id="btnEnviar" type="submit"  onclick="searchData()" class="btn btn-outline-primary">Buscar</button>
                    </form>
                </div>
            </form>   
        </div>
    </section>

<main class="container-fluid py-5 mb-5 text-light bg-escuro row">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3  g-4">
            {% for hotel in hoteis%}
            <div class="col">
                <div class="card bg-body-tertiary bg-dark h-100 border-warning borde">
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <h4 class="card-header">{{hotel.nome}}</h4>
                        <div class="d-flex align-items-center">
                            <a href="/exercíciosIndividuais/SimpleRouter3/public/adm/{{hotel.id}}/atualizar">
                                <i class="bi bi-arrow-clockwise text-warning mx-3 fs-4"></i>
                            </a>
                            <a href="/exercíciosIndividuais/SimpleRouter3/public/adm/{{hotel.id}}/deletar" onclick="return confirm('Você deseja deletar o {{hotel.nome}}')">
                                <i class="bi bi-trash text-danger mx-3 fs-4"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <h5 class="card-title">{{hotel.localizacao}}</h5>
                        <h6 class="card-subtitle">{{hotel.nota}}.0</h6>
                        <p class="card-text ">
                           {{hotel.descricao}} 
                        </p>
                        <div class="d-flex">
                            <a href="/exercíciosIndividuais/SimpleRouter3/public/home/{{hotel.id}}/sobre" class="card-link nav-link">Sobre</a>
                        </div>
                    </div>
                        
                    <div class="card-footer">R${{hotel.preco}} noite</div>
                </div>
            </div>
            {% endfor %}
        </div>
</main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>