@extends('layouts.site')

@section('titulo', 'Bem Vindo')

@section('conteudo')

    <div class=" fundoBackground  textoBranco">
        <div class="container">
            <div class=" row pb-5">
                <div class="col-md-8 ">
                    <h1 class="fonteTitulo pt-5">Solicite um Pedido!</h1>
                    <p>
                        Preencha a ficha de pedidos, que ficará disponivel para os nossos
                        profissionais <br> se candidatarem para sua vaga e aceitarem a oferta.
                    </p>
                    <a href="{{route('cliente.pedido')}}" class="btn btn-danger ">Faça uma solicitação</a>
                </div>
                <div class="col-md-4">
                    <img id="imgBorda" src="/assets/img/mesapestisco.png" class="imgnone" width="350px">
                </div>
            </div>
        </div>
    </div>


    <h1 class="fonteTitulo py-4">Garçons</h1>

    <div class="row ">
        <div class="col-md-6 d-flex justify-content-center">
            <div class="card mb-4 p-5 boxCliente" style="max-width: 900px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/assets/img/iconeperfil.png" class="img-fluid rounded-circle" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">Nome Sobrenome</h3>
                            <p class="card-text">Feminino, 18 anos, Marilia-SP<br>
                                (14)99999-9999</p>
                            <p class="card-text"><small class="text-muted">Cozinheiro</small></p>
                        </div>
                    </div>
                </div>
                <h4>Descrição</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed assumenda aut omnis non excepturi sit
                    dolores ducimus quis quibusdam mollitia deleniti accusantium quos explicabo dolorem, animi voluptatibus
                    veritatis officia in!</p>
                <button class="btn btn-dark" type="submit">Contratar</button>
            </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center">
            <div class="card mb-4 p-5 boxCliente " style="max-width: 900px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/assets/img/iconeperfil.png" class="img-fluid rounded-circle" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">Nome Sobrenome</h3>
                            <p class="card-text">Feminino, 18 anos, Marilia-SP<br>
                                (14)99999-9999</p>
                            <p class="card-text"><small class="text-muted">Cozinheiro</small></p>
                        </div>
                    </div>
                </div>
                <h4>Descrição</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed assumenda aut omnis non excepturi sit
                    dolores ducimus quis quibusdam mollitia deleniti accusantium quos explicabo dolorem, animi voluptatibus
                    veritatis officia in!</p>
                <button class="btn btn-dark" type="submit">Contratar</button>
            </div>
        </div>
    </div>
@endsection
