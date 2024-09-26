@csrf

{{-- @dd($errors)


@if ($errors->any())

    @foreach ($errors->all() as $error)
        <div>
            {{ $error }}
        </div>
    @endforeach

@endif --}}

<div class="col-md-12">
    <label for="titulo" class="form-label">Titulo</label>
    <input type="text" class="form-control  @error('titulo') is-invalid @enderror" name="titulo" id="titulo" placeholder="Insira o Titulo" value="{{ old('titulo', $categorias->titulo) }}">

    @error('titulo')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror


</div>
<div class="col-md-12">
    <label for="descricao" class="form-floath">Descrição</label>
    <textarea type="text" name="descricao" class="form-control  @error('descricão') is-invalid @enderror" id="descricao" placeholder="Insira a descrição" >{{ old('descricao', $categorias->descricao) }}</textarea>
</div>
@error('descricao')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror


    <div class="col-md-12">
        <label for="icone"

               class="form-label">Ícone</label><br>

        @if ($categorias->icone)

            <img src="{{ asset($categorias->icone) }}" alt="" width="80">

        @endif

        <input type="file"
               class="form-control @error('icone') is-invalid @enderror"
               name="icone"
               id="icone">

    </div>


<div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
