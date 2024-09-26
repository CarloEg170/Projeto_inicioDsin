@extends('layouts.site')

@section('titulo', 'Bem Vindo!')

@section('conteudo')

<div class=" fundoBackground  textoBranco">
    <div class="container">
        <div class=" row pb-5">
            <div class="col-md-8 ">
                <h1 class="fonteTitulo pt-5">Encontre novos clientes!</h1>
                <p>
                    Nosso site oferece á você uma nova plataforma que deixará sua <br>visualização maior. Descubra novos clientes e <br>aumente sua renda!
                </p>

            </div>
            <div class="col-md-4">
                <img id="imgBorda" src="/assets/img/mesadocinhos.png    " width="400px">

            </div>
        </div>
    </div>
</div>

<h1 class="fonteTitulo py-4">Minhas Solicitações!</h1>

<div class="container">
    <div class="row ">
        <div class="col-md-6 d-flex justify-content-center">
            <div class="card mb-4 p-5 boxCliente" style="max-width: 900px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/assets/img/iconeperfil.png" class="img-fluid rounded-circle" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">Maria</h3>
                            <p class="card-text">Feminino, 18 anos, Marilia-SP<br>
                                (14)99999-9999</p>
                            <p class="card-text"><small class="text-muted">Cozinheiro</small></p>
                        </div>
                    </div>
                </div>
                <h4>Descrição</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed assumenda aut omnis non excepturi sit dolores ducimus quis quibusdam mollitia deleniti accusantium quos explicabo dolorem, animi voluptatibus veritatis officia in!</p>
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
                            <h3 class="card-title">Claudia</h3>
                            <p class="card-text">Feminino, 18 anos, Marilia-SP<br>
                                (14)99999-9999</p>
                            <p class="card-text"><small class="text-muted">garçom</small></p>
                        </div>
                    </div>
                </div>
                <h4>Descrição</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed assumenda aut omnis non excepturi sit dolores ducimus quis quibusdam mollitia deleniti accusantium quos explicabo dolorem, animi voluptatibus veritatis officia in!</p>
                <button class="btn btn-dark" type="submit">Contratar</button>
            </div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto  py-4">
            <button type="button" class="btn btn-danger p-2 px-5"><a>Veja Mais</a></button>
        </div>
    </div>
</div>

@endsection
