@extends('layouts.site')

@section('conteudo')
<div class="">

        <div class="container">
         <div class="row">
            <div class="col-md-4 mx-auto m-5" id="loginUsuario">
                <form action="{{ route('post.login') }}" method="POST">
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Titulo</label>
                        <input name="email" type="email" id="email" class="form-control" />

                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="cargo">Profissionais</label>
                        <select class="form-control" id="cargo" name="categoria_id">

                            @foreach ($categorias as $categoria)

                                 <option value="{{ $categoria->id}}">{{ $categoria->titulo}}</option>

                            @endforeach

                        </select>
                    </div>

                    <!-- 2 column grid layout for inline styling -->


                    <!-- Submit button -->
                    <div class="text-center">
                    <button type="submit" class="btn btn-danger btn-block mb-4">Login</button>

                    <!-- Register buttons -->

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
