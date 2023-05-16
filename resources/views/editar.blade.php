<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Web</title>

    <!-- Styles -->
    @vite([
        'resources/js/app.js',
        'resources/css/app.css',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])
</head>
<body>
    <div class="container">
        <div class="row"> 
        <nav class="navbar navbar-expand-lg navbar-dark  bg-primary col-12">
        <div class="container">
        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                            <li class="nav-item">
                                    <a class="nav-link " aria-current="page">SISTEMA WEB</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="/">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/consultar">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

    <div class="container">
    <div class="row">
        <div class="card mb-3 col-12">
            <div class="card-body">
                <h5 class="card-title">Editar Agendamento do cliente</h5>
                <p class="card-text">Sistema utilizado para agendamento de serviços.</p>
        <form method="POST" action="/atualizar/{{ $agendamento->id }}" id="form" name="form">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleFormControlInput1">Nome:</label>
                <input value="{{ $agendamento->nome }}" type="text" class="form-control" name="nome" required id="txtNome">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Telefone:</label>
                <input value="{{ $agendamento->telefone }}" type="tel" class="form-control" required name="telefone" id="txtTelefone" placeholder="(xx)xxxxx-xxxx">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Origem:</label>
                <select class="form-control" required name="origem" id="txtOrigem">
                    <option>Celular</option>
                    <option {{ $agendamento->origem === 'Fixo' ? "selected" : '' }}>Fixo</option>
                    <option {{ $agendamento->origem === 'Whatsapp' ? "selected" : '' }}>Whatsapp</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Data do Contato:</label>
                <input value="{{ $agendamento->data_contato }}" type="date" class="form-control" required name="data_contato" id="txtDataContato">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Observação</label>
                <textarea class="form-control" name="observacao" id="txtObservacao" rows="3">{{ $agendamento->observacao }}"</textarea>
            </div>
            <br>
            <button type="submit" id="btnInserir" class="btn btn-primary">Atualizar</button>
        </form>
            </div>
        </div>
    </div>
    </body>
    </html>