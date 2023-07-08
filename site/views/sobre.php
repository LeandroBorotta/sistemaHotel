
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>sobre - {{hotel[0]['nome']}} </title>
    <style>
        .borde{
            border: solid yellow 5px;
        }
        .container img{
            height: 400px;
            width: 100%;
            object-fit: cover;
        }
        .justify{
            text-align: justify;
        }
        input.transparent-input {
        border: none;
        pointer-events: none;
        }
    </style>
</head>
<body>

<nav class="navbar bg-dark mb-5">
        <div class="container">
            <a href="#" class="navbar-brand d-flex align-items-center">
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
                {% if adm == true %}
                    <a href="/exercíciosIndividuais/SimpleRouter3/public/home/adm" class="nav-link active">VOLTAR</a>
                {% else %}
                    <a href="/exercíciosIndividuais/SimpleRouter3/public/home" class="nav-link active">VOLTAR</a>
                {% endif %}
                    <a class="nav-link" href="/exercíciosIndividuais/SimpleRouter3/public/sair"> SAIR</a>
                </div>
            </div>
            
        </div>
   </nav>

   <main class="container mb-5">
        <h3>{{hotel[0]['nome']}} - {{hotel[0]['localizacao']}}</h3>
        <img class="mb-3" src="https://finger.ind.br/wp-content/uploads/2021/03/post_thumbnail-234c136d094ceb3451da6c0488a5da34-1170x685.jpeg" class="img-fluid" alt="...">
        <div class="container row d-flex">
            <div class="discription col-sm-12 col-md-8">
                <span class="fw-bold h4 mb-3">descrição:</span>
                <p class="lh-sm justify">{{hotel[0]['nome']}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum assumenda inventore quibusdam totam omnis, expedita facere, alias impedit ut natus ratione recusandae repellendus consequatur libero corrupti ducimus dolorum? Quisquam nemo vel architecto. Nulla assumenda veritatis non est, laborum consequatur suscipit.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem officiis qui omnis quo veniam minus ullam facere maxime accusamus incidunt voluptatum beatae eaque, doloribus in a minima nulla culpa unde ratione, eos quaerat eum inventore. Sunt quas hic deserunt inventore debitis quam possimus, molestias est provident repudiandae placeat? Ab, deserunt.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, voluptate cumque aspernatur maiores tempore similique atque magni minus aut sit voluptas iure porro molestias veritatis dicta suscipit id quaerat quidem neque maxime, distinctio eaque! Mollitia itaque molestiae aliquid provident non?
                </p>
            </div>
            <div class="pagamento col-sm-12 col-md-4">
                <div class="col">
                    <div class="card  h-100  shadow">
                        <div class="d-flex align-items-center justify-content-between border-bottom p-2">
                            <h4 class="card-header text-dark">R$ {{hotel[0]['preco']}} noite</h4>
                            <span class="h6"><i class="bi bi-star-fill text-warning fs-6"></i> {{hotel[0]['nota']}} </span>
                        </div>
                        
                        <div class="card-body">
                            <form action="/exercíciosIndividuais/SimpleRouter3/public/home/{{hotel[0]['id']}}/reserva" method="post">
                                <div class="reservar text-center mb-3">
                                    <input type="submit" class="btn btn-danger w-75" value="Reservar">
                                </div>

                                <div class="pagar text-center d-flex justify-content-center flex-column">
                                    <input type="hidden" id="dataInicio" name="inicio" value="">
                                    <input type="hidden" id="dataFinal" name="final" value="">
                                    <div class="input d-flex text-center justify-content-center">
                                        <p> R${{hotel[0]['preco']}} * <input class="transparent-input" readonly type="text" name="noites" id="noites"></p>
                                    </div>
                                    <p>Total: <input class="transparent-input" name="precoTotal" readonly type="text" id="total"></input></p>
                                </div>
                            </form>
                        </div>
                            
                    </div>
                </div>
            </div>
            <div class="mt-5" id='calendar'></div>
        </div>
   </main>







    <script>
            
            document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var eventos = {{ eventos|json_encode|raw }};

            var url = window.location.href;
            var partes = url.split('/');
            var idHotel = parseInt(partes[partes.length - 2]); 
            
            console.log(eventos);
                
            var eventosFiltrados = eventos.filter(function(evento) {
                return evento.id_hotel === idHotel;
            });
            
            console.log(eventosFiltrados);
            var eventosFullCalendar = [];

            for (var i = 0; i < eventosFiltrados.length; i++) {
                eventosFullCalendar.push({
                title: eventosFiltrados[i].title,
                start: eventosFiltrados[i].inicio,
                end: eventosFiltrados[i].final
                });
            }

            var calendar = new FullCalendar.Calendar(calendarEl, {
                selectable: true,
                select: function(info) {
                var eventosExistentes = calendar.getEvents();
                var isOverlap = false;

                for (var i = 0; i < eventosExistentes.length; i++) {
                    var eventoExistente = eventosExistentes[i];
                    if (info.start < eventoExistente.end && info.end > eventoExistente.start) {
                    isOverlap = true;
                    break;
                    }
                }

                if (isOverlap) {
                    alert('O período selecionado já contém um evento existente. Escolha uma data vazia');
                    calendar.unselect();    
                } else {
                    alert('Seleção iniciada em: ' + info.startStr + ' e terminada em: ' + info.endStr);
                    calendar.addEvent({
                    title: 'Marcado ',
                    start: info.start,
                    end: info.end
                    });
                    var start = info.start; // Data de início
                    var end = info.end; // Data de fim

                    var inicio = info.startStr; // Data inicio em formato de Date 
                    var final = info.endStr; // Data final em formato de Date 

                    var elementoInicio = document.getElementById("dataInicio");
                    var elementoFinal = document.getElementById("dataFinal");

                    elementoInicio.value = inicio;
                    elementoFinal.value = final;

                    // Calcular a diferença de noites
                    var diffMilissegundos = Math.abs(end - start);
                    var diffNoites = Math.ceil(diffMilissegundos / 86400000);

                    // Atualizar o elemento HTML com o valor de noites
                    var elementoNoites = document.getElementById("noites");
                    elementoNoites.value = diffNoites + ' noites';

                    var precoHotel = parseInt("{{hotel[0]['preco']}}"); // Converter o preço em uma variável numérica

                    // Calcular o total
                    var total = precoHotel * diffNoites;

                    // Atualizar o elemento HTML com o valor total
                    var elementoTotal = document.getElementById("total");
                    elementoTotal.value = "R$" + total.toFixed(2); 
                }
                },
                initialView: 'dayGridMonth',
                locale: 'pt-br', 
                buttonText: {
                today: 'Hoje'
                },
                validRange: {
                start: new Date().toISOString().split("T")[0], 
                end: '2100-12-31'
                },
                events: eventosFullCalendar
            });

            calendar.render();
            });

    </script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>