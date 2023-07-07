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
            overflow-x: hidden;
        }
        .vh-120{
            height: 120vh;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <title>Adicionar Hotel</title>
</head>
<body style="height: 120vh;">
<header class="container-fluid bg-dark text-light text-center">
    
    <nav class="navbar bg-dark">
            <div class="container">
                <a href="/exercíciosIndividuais/SimpleRouter3/public/home/adm" class="navbar-brand d-flex align-items-center">
                <i class="bi bi-calendar-event fs-1 me-2"></i>
                    Hotel Scheduler - Adicionar Hotel
                </a>
                <button class="navbar-toggler d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#MenuNavbar">
                    <span class="d-flex align-items-center justify-content-between">

                    <svg xmlns="http://www.w3.org/2000/svg" class="text-primary mx-3" width="40" height="40" fill="currentColor" class="bi bi-emoji-laughing-fill" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5c0 .501-.164.396-.415.235C6.42 6.629 6.218 6.5 6 6.5c-.218 0-.42.13-.585.235C5.164 6.896 5 7 5 6.5 5 5.672 5.448 5 6 5s1 .672 1 1.5zm5.331 3a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5zm-1.746-2.765C10.42 6.629 10.218 6.5 10 6.5c-.218 0-.42.13-.585.235C9.164 6.896 9 7 9 6.5c0-.828.448-1.5 1-1.5s1 .672 1 1.5c0 .501-.164.396-.415.235z"/>
                    </svg>
                </span>
                    <span class="text-light"> {{nome}} </span>
                </button>  
                
                <div class="collapse navbar-collapse" id="MenuNavbar">
                    <div class="navbar-nav  ms-auto border-top mt-3">
                        <a href="/exercíciosIndividuais/SimpleRouter3/public/home/adm" class="nav-link active">VOLTAR</a>
                        <a class="nav-link" href="/exercíciosIndividuais/SimpleRouter3/public/sair"> SAIR</a>
                    </div>
                </div>
                
            </div>
    </nav>
</header>


    <main class="row container d-flex justify-content-center align-items-center vh-120">
        <form action="/exercíciosIndividuais/SimpleRouter3/public/adm/adicionar" id="form" method="post" class="border p-3 col-8 ">
            <span class="text-danger">{{erro}}</span>
            <div class="row d-flex flex-column mb-3">
                <label for="nome"> Nome: </label>
                <input class="col-12"  name="nome" type="text" required placeholder="Coloque o nome">
            </div>

            <div class="row d-flex flex-column mb-3">
                <label for="localizacao">Localização:</label>
                <input class="col-12" name="localizacao" required type="text" placeholder="Cidade, Estado">
            </div>

            <div class="row d-flex flex-column mb-3">
                <label for="preco">Preço por noite:</label>
                <input class="col-12"  name="preco" type="text" required placeholder="200.00">
            </div>

            <div class="row d-flex flex-column mb-3">
                <label for="descricao">Descrição:</label>
                <textarea class="form-control" name="descricao" required id="descricao" cols="30" rows="5" style="resize: none;"></textarea>
            </div>

            <div class="avaliacao d-flex flex-column my-3">
                <span>Possui todos os itens = nota 5</span>
                <span>Apenas não possui quadra e piscina = nota 4</span>
                <span>Apenas não possui quadra e piscina e banheira  = nota 3</span>
                <span>Apenas limpeza e freezer  = nota 2</span>
                <span>Nenhum item  = nota 1</span>
            </div>


            <div class="form-check form-switch">
                <input class="form-check-input" name="banheira" type="checkbox" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Os quartos possuem banheira?</label>
            </div>

            <div class="form-check form-switch">
                <input class="form-check-input" name="varanda" type="checkbox" id="flexSwitchCheckChecked">
                <label class="form-check-label" for="flexSwitchCheckChecked">Os quartos possuem varanda?</label>
            </div>

            <div class="form-check form-switch">
                <input class="form-check-input" name="arCondicionado" type="checkbox" id="flexSwitchCheckDisabled">
                <label class="form-check-label" for="flexSwitchCheckDisabled">Os quartos possuem ar condicionado?</label>
            </div>

            <div class="form-check form-switch">
                <input class="form-check-input" name="freezer" type="checkbox" id="flexSwitchCheckCheckedDisabled">
                <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Os quartos possuem freezer?</label>
            </div>

            <div class="form-check form-switch">
                <input class="form-check-input" name="limpezaDiaria" type="checkbox" id="flexSwitchCheckCheckedDisabled">
                <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Os quartos possuem limpeza diária?</label>
            </div>


            <div class="form-check form-switch">
                <input class="form-check-input" name="quadraEsportiva" type="checkbox" id="flexSwitchCheckDisabled">
                <label class="form-check-label" for="flexSwitchCheckDisabled">O hotel tem quadras esportivas?</label>
            </div>

            <div class="form-check form-switch">
                <input class="form-check-input" name="piscina" type="checkbox" id="flexSwitchCheckCheckedDisabled">
                <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">O hotel tem piscina?</label>
            </div>

            <div class="d-flex justify-content-center align-items-center">
                <input class="btn btn-primary" id="add" type="submit" value="Adicionar">
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        form.addEventListener('submit', (event) => {
            event.preventDefault();

            let nome = document.querySelector('input[name="nome"]').value;
            let localizacao = document.querySelector('input[name="localizacao"]').value;
            let preco = document.querySelector('input[name="preco"]').value;
            let descricao = document.querySelector('textarea[name="descricao"]').value;
            let inputs = document.querySelectorAll('input');
            let textarea = document.querySelector('textarea[name="descricao"]');

            if (nome && localizacao && preco && descricao) {
            fetch(form.action, {
                method: 'POST',
                body: new FormData(form)
            })
                .then(response => response.text())
                .then(data => {
                Swal.fire({
                    title: 'Success!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
                
                // Limpa os campos de input
                inputs.forEach(input => {
                    if (input.type === 'checkbox') {
                    input.checked = false;
                    } else if (input.type === 'submit') {
                    input.value = 'Adicionar';
                    } else {
                    input.value = '';
                    }
                });

                textarea.value = '';
                })
                .catch(error => {
                console.error('Erro:', error);
                });
            }
        });
    </script>

</body>
</html>