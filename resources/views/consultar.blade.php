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
                                    <a class="nav-link " aria-current="page" href="/">SISTEMA WEB</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="/">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="/consultar">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

    <div class="container">
    <div class="row">
    <div class="card mb-3 col-12 d-flex justify-content-center">
        <div class="card-body w-100 m-auto">
            <h4 class="card-title">Consultar - Contatos Agendados</h5>
            @if(session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <table class="w-100 table table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Origem</th>
                        <th scope="col">Contato</th>
                        <th scope="col">Observacão</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($agendamentos as $agendamento)
                        <tr class="cursor-pointer">
                            <th scope="row">{{ $agendamento->id }}</th>
                            <td>{{ $agendamento->nome }}</td>
                            <td>{{ $agendamento->telefone }}</td>
                            <td>{{ $agendamento->origem }}</td>
                            <td>{{ $agendamento->data_contato }}</td>
                            <td>{{ $agendamento->observacao }}</td>
                            <td class="d-flex">
                                <a class="text-dark d-flex align-items-center" href="/editar/{{ $agendamento->id }}">Editar</a>
                                <form action="/client/{{ $agendamento->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn d-flex align-items-center">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </body>
</html>
