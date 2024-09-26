@csrf

{{-- @dd($errors)


@if ($errors->any())

    @foreach ($errors->all() as $error)
        <div>
            {{ $error }}
</div>
@endforeach

@endif --}}


<h4 class="my-3">Descrição do contrato</h4>
<div class="col-md-12">
    <label for="titulo" class="form-label">Titulo</label>
    <input type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" id="titulo" placeholder="Insira o Titulo" value="{{ old('titulo', $contratos->titulo) }}">

    @error('titulo')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror

</div>
<div class="col-md-12">
    <label for="descricao" class="form-label">Descrição</label>
    <textarea type="text" name="descricao" class="form-control @error('descricao') is-invalid @enderror" id="descricao" placeholder="Insira a Descrição" value="{{ old('descricao', $contratos->descricao) }}"></textarea>

    @error('descricao')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror

</div>
<div class="col-md-6">
    <label for="categorias" class="form-label">Categorias</label>
    <select class="form-control" id="categoria" name="categoria_id">

@foreach ($categorias as $categoria)

     <option value="{{ $categoria->id}}">{{ $categoria->titulo}}</option>

@endforeach

    </select>
</div>


<div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
