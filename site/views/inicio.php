


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Agendamento</title>
</head>
<body>
       <nav class="navbar bg-dark">
            <div class="container">
                <a href="/exercíciosIndividuais/SimpleRouter3/public/" class="navbar-brand d-flex align-items-center">
                <i class="bi bi-calendar-event fs-1 me-2"></i>
                    Hotel Scheduler
                </a>
                <button class="navbar-toggler d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#MenuNavbar">
                        <i class="bi bi-list text-primary h1"></i>
                </button>  
                
                <div class="collapse navbar-collapse" id="MenuNavbar">
                    <div class="navbar-nav  ms-auto border-top mt-3">
                        <a class="text-light mx-3 nav-link" href="/exercíciosIndividuais/SimpleRouter3/public/login">Login</a>
                        <a class="text-light mx-3 nav-link" href="/exercíciosIndividuais/SimpleRouter3/public/login/cadastro">Cadastrar</a>
                    </div>
                </div>
                
            </div>
   </nav>

    <main class="mb-2">
            <div class="container-fluid py-3">
                <div class="carousel  slide carousel-light" data-bs-ride="carousel" data-bs-touch="true" id="ads">
                    <div class="carousel-inner"> 
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/1280/420" class="d-block w-100" alt="foto">
                        </div>
                        <div class="carousel-item"> 
                            <img src="https://picsum.photos/1280/420?random=2" class="d-block w-100" alt="foto2">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/1280/420?random=3" class="d-block w-100" alt="foto3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" data-bs-target="#ads" data-bs-slide="prev"> 
                        <span class="carousel-control-prev-icon"></span> 
                    </button>
                    <button class="carousel-control-next" data-bs-target="#ads" data-bs-slide="next"> 
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>

            <div class="container-fluid row bg-dark d-flex">
                <div class="col bg-dark text-light d-flex justify-content-center align-items-center flex-column p-3">
                    <i class="bi bi-calendar-check h1 text-primary"></i>
                    <h3 class="text-primary">Preços baratos</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus rem itaque molestias dolorem, 
                        non illo provident aspernatur voluptates facere. Suscipit tenetur, quae at recusandae
                         pariatur repudiandae laboriosam cumque a minima illum aut maxime dolor praesentium,
                          eveniet aspernatur delectus, dolorum veniam. Sed accusamus a quam alias commodi molestias cum corporis dolor?
                     </p>
                </div>

                <div class="col bg-dark text-light d-flex justify-content-center align-items-center flex-column p-3 border">
                    <i class="bi bi-calendar-check h1 text-primary"></i>
                    <h3 class="text-primary">Hotéis em todos lugares do Brasil</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus rem itaque molestias dolorem, 
                        non illo provident aspernatur voluptates facere. Suscipit tenetur, quae at recusandae
                         pariatur repudiandae laboriosam cumque a minima illum aut maxime dolor praesentium,
                          eveniet aspernatur delectus, dolorum veniam. Sed accusamus a quam alias commodi molestias cum corporis dolor?
                     </p>
                </div>

                <div class="col bg-dark text-light d-flex justify-content-center align-items-center flex-column p-3">
                    <i class="bi bi-calendar-check h1 text-primary"></i>
                    <h3 class="text-primary">Pagamento via PIX</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus rem itaque molestias dolorem, 
                        non illo provident aspernatur voluptates facere. Suscipit tenetur, quae at recusandae
                         pariatur repudiandae laboriosam cumque a minima illum aut maxime dolor praesentium,
                          eveniet aspernatur delectus, dolorum veniam. Sed accusamus a quam alias commodi molestias cum corporis dolor?
                     </p>
                </div>
            </div>  
    </main>

    <footer>
        <div class="container-fluid bg-dark text-primary text-center p-3">
            Desenvolvido por Leandro Borotta - 2023
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>