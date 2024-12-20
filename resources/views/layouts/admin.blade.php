<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/admin.css">
    <title>@yield('titulo') :: Área Administrativa</title>


</head>

<body class="d-flex flex-column min-vh-100">
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="{{route('logout')}}">Garmous</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="w-md-100 rounded-0 border-0 text-white px-4 text-end">
            Olá, Administrador
        </div>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap logout">
                <a class="nav-link px-3 btn btn-secondary me-2" href="{{route('logout')}}">Sair</a>
            </div>
        </div>

    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <span data-feather="home" class="align-text-bottom"></span>
                                Menu
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route ('admin.categorias')}}">
                                <i class="fas fa-tags pe-2"></i>
                                Categorias
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route ('admin.usuarios.index')}}">
                                <i class="fas fa-users pe-2"></i>
                                Usuários
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route ('admin.contratos.index')}}">
                                <i class="fas fa-newspaper pe-2"></i>
                                Contratos
                            </a>
                        </li>


                    </ul>


                </div>
            </nav>


            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">


                @yield('conteudo')


            </main>

        </div>
    </div>
    <footer class="bg-body-secondary p-3 text-end mt-auto">

        Copyright &copy;2023 - Todos os direitos reservados

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
