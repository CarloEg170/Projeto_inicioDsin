@csrf

 {{-- @dd($errors) --}}


@if ($errors->any())

    @foreach ($errors->all() as $error)
        <div>
            {{ $error }}
        </div>
    @endforeach

@endif


<div class="col-md-12">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" id="nome"
        placeholder="Insira o Nome" value="{{ old('nome', $usuario->nome) }}">

    @error('nome')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

</div>
<div class="col-md-12">
    <label for="email" class="form-label">E-mail</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
        placeholder="Insira a E-mail" value="{{ old('email', $usuario->email) }}">

    @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

</div>
<div class="col-md-12">
    <label for="senha" class="form-label">Senha</label>
    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password"
        placeholder="">

    @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="col-md-4">
    <label for="cpf" class="form-label">CPF</label>
    <input type="text" name="cpf" class="form-control @error('cpf') is-invalid @enderror" id="cpf"
        placeholder="Ex: 000.000.000-00" value="{{ old('cpf', $usuario->cpf) }}"><br>

    @error('cpf')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="col-md-4">
    <label for="cnpj" class="form-label">CNPJ</label>
    <input type="text" name="cnpj" class="form-control @error('cpf') is-invalid @enderror" id="cnpj"
        placeholder="Ex: 00.000.000/0000-00" value="{{ old('cnpj', $usuario->cnpj) }}"><br>

    @error('cnpj')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="col-md-6">
    <label for="data_nascimento" class="form-label">Data de Nascimento</label>
    <input type="date" name="data_nascimento" class="form-control @error('data_nascimento') is-invalid @enderror"
        id="data_nascimento" placeholder="DD/MM/AAAA" value="{{ old('data_nascimento', $usuario->data_nascimento) }}">

    @error('data')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="col-md-3">
    <label for="telefone" class="form-label">Telefone</label>
    <input type="text" name="telefone" class="form-control @error('telefone') is-invalid @enderror" id="telefone" placeholder="(00)00000-0000" value="{{ old('telefone', $usuario->telefone) }}">

    @error('telefone')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="col-md-12">
    <label for="descricao" class="form-label">Descrição</label>
    <textarea type="text" name="descricao" class=" form-control @error('descricao') is-invalid @enderror" id="descricao" placeholder="Digite uma descrição" value="{{ old('descricao', $usuario->descricao) }}"></textarea>

    @error('descricao')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="col-md-3">
    <label for="cep" class="form-label">CEP</label>
    <input type="text" name="cep" class="form-control @error('cep') is-invalid @enderror" id="cep"
        placeholder="Ex: 00000-000" value="{{ old('cep', $usuario->cep) }}"><br>

    @error('cep')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="col-md-5">
    <label for="estado" class="form-label">Estado</label>
    <!-- <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" id="estado" placeholder="SP" value="{{ old('estado', $usuario->estado) }}"> -->
    <select name="estado" id="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $usuario->estado) }}">
        <option value="AC">Acre</option>
        <option value="AL">Alagoas</option>
        <option value="AP">Amapá</option>
        <option value="AM">Amazonas</option>
        <option value="BA">Bahia</option>
        <option value="CE">Ceará</option>
        <option value="DF">Distrito Federal</option>
        <option value="ES">Espírito Santo</option>
        <option value="GO">Goiás</option>
        <option value="MA">Maranhão</option>
        <option value="MT">Mato Grosso</option>
        <option value="MS">Mato Grosso do Sul</option>
        <option value="MG">Minas Gerais</option>
        <option value="PA">Pará</option>
        <option value="PB">Paraíba</option>
        <option value="PR">Paraná</option>
        <option value="PE">Pernambuco</option>
        <option value="PI">Piauí</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="RN">Rio Grande do Norte</option>
        <option value="RS">Rio Grande do Sul</option>
        <option value="RO">Rondônia</option>
        <option value="RR">Roraima</option>
        <option value="SC">Santa Catarina</option>
        <option value="SP">São Paulo</option>
        <option value="SE">Sergipe</option>
        <option value="TO">Tocantins</option>
        <option value="EX">Estrangeiro</option>

    </select>

    @error('estado')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

    <div class="col-md-4">
        <label for="cidade" class="form-label">Cidade</label>
        <input type="text" name="cidade" class="form-control @error('cidade') is-invalid @enderror" id="cidade" placeholder="Cidade" value="{{ old('cidade', $usuario->cidade) }}">


        @error('cidade')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

<div class="col-md-4">
    <label for="bairro" class="form-label">Bairro</label>
    <input type="text" name="bairro" class="form-control @error('bairro') is-invalid @enderror" id="bairro" placeholder="Digite o Bairro" value="{{ old('bairro', $usuario->bairro) }}">

    @error('bairro')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="col-md-5">
    <label for="rua" class="form-label">Rua</label>
    <input type="text" name="rua" class="form-control @error('rua') is-invalid @enderror" id="rua" placeholder="Digite a Rua" value="{{ old('rua', $usuario->rua) }}">

    @error('rua')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>


<div class="col-md-3">
    <label for="numero" class="form-label">Número</label>
    <input type="numero" name="numero" class="form-control @error('numero') is-invalid @enderror" id="numero" placeholder="Digite o número" value="{{ old('numero', $usuario->numero) }}">

    @error('numero')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="col-md-6">
    <label for="role" class="form-label">Nível</label>
    <select class="form-control" id="nivel" name="nivel">
        <option value="Cliente" {{ old('nivel', $usuario->nivel) == 'Cliente' ? 'selected' : '' }}>
            Cliente</option>
            <option value="Profissional" {{ old('nivel', $usuario->nivel) == 'Profissional' ? 'selected' : '' }}>
                Profissional</option>

        <option value="Administrador" {{ old('nivel', $usuario->nivel) == 'Administrador' ? 'selected' : '' }}>
            Administrador</option>
    </select>
</div>

<div class="col-md-6">
    <label for="categorias" class="form-label">Categorias</label>
    <select class="form-control" id="categorias" name="categoria_id">

@foreach ($categorias as $categoria)

     <option value="{{ $categoria->id}}">{{ $categoria->titulo}}</option>

@endforeach

    </select>
</div>


<div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
