<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        .justify{
            text-align: justify;
        }
    </style>
    <title>Agendamento</title>
</head>
<body class="bg-dark">
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

    <main class="mb-3">
            <div class="container-fluid py-3">
                <div class="carousel  slide carousel-light" data-bs-ride="carousel" data-bs-touch="true" id="ads">
                    <div class="carousel-inner"> 
                        <div class="carousel-item active">
                            <img src="http://localhost/exerc%c3%adciosIndividuais/SimpleRouter3/public/assets/img/Hotel schedular.png" class="d-block w-100" alt="foto">
                        </div>
                        <div class="carousel-item"> 
                            <img src="http://localhost/exerc%c3%adciosIndividuais/SimpleRouter3/public/assets/img/Hotel schedular2.png" class="d-block w-100" alt="foto2">
                        </div>
                        <div class="carousel-item">
                            <img src="http://localhost/exerc%c3%adciosIndividuais/SimpleRouter3/public/assets/img/Hotel schedular3.png" class="d-block w-100" alt="foto3">
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

            <div class="row container-fluid bg-dark d-flex">
                <div class="col bg-dark text-light d-flex justify-content-center align-items-center flex-column p-3 border">
                    <i class="bi bi-tag-fill h1 text-primary"></i>
                    <h3 class="text-primary">Preços baratos</h3>
                    <p class="justify">Preços incrivelmente acessíveis para o agendamento de hotéis em nosso site! Oferecemos opções que
                         se encaixam em qualquer orçamento, com descontos exclusivos e ofertas especiais. Garantimos que você
                          encontrará acomodações de qualidade a preços baratos, permitindo que você economize enquanto desfruta
                           de uma estadia confortável.
                     </p>
                </div>

                <div class="col bg-dark text-light d-flex justify-content-center align-items-center flex-column p-3 border">
                    <i class="bi bi-calendar-check h1 text-primary"></i>
                    <h3 class="text-primary">Hotéis em todos lugares do Brasil</h3>
                    <p class="justify">Descubra uma ampla seleção de hotéis em todos os cantos do país em nosso site! Quer 
                        você esteja planejando uma viagem para uma grande cidade, uma praia paradisíaca ou uma cidadezinha
                         charmosa, temos opções de hospedagem em todos os lugares. De norte a sul, leste a oeste, nossa
                          plataforma oferece uma variedade de hotéis para atender a todos os gostos e necessidades.
                     </p>
                </div>

                <div class="col bg-dark text-light d-flex justify-content-center align-items-center flex-column p-3 border">
                    <i class="bi bi-stripe h1 text-primary"></i>
                    <h3 class="text-primary">Pagamento via PIX</h3>
                    <p class="justify">Aproveite a conveniência do pagamento via PIX em nosso site! Agora você pode
                        reservar seu hotel de forma rápida e segura, com a opção de efetuar o pagamento diretamente
                         através do PIX. Esqueça as complicações de inserir dados de cartão de crédito ou lidar com 
                         boletos bancários. Com o PIX, basta escanear o código ou inserir a chave fornecida, e
                          em segundos sua reserva estará confirmada.
                     </p>
                </div>
            </div>  
    </main>

    <footer>
        <div class="container-fluid bg-dark text-primary p-3 d-flex justify-content-center">
        <i class="bi bi-twitter h1"></i>
            <i class="bi bi-linkedin h1 mx-5"></i>
            <i class="bi bi-whatsapp h1"></i>
        </div>
        <div class="container-fluid bg-dark text-light text-center p-3">
             <span class="h6">Desenvolvido por Leandro Borotta - 2023</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>