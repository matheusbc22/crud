@include('app._partials.bootstrap')
@include('app._partials.menu')
@isset($cliente)
<form action="{{route('app.clientes.editarpost')}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$cliente['id']}}">
    <input type="text" name="razaosocial" id="razaosocial" placeholder="Razão social" value="{{$cliente['razaosocial']}}" required><br>
    <input type="text" name="nomefantasia" id="nomefantasia" placeholder="Nome fantasia" value="{{$cliente['nomefantasia']}}" required><br>
    <input type="number" name="cnpj" id="cnpj" placeholder="CNPJ" value="{{$cliente['cnpj']}}" required><br>
    <input type="text" name="endereco" id="endereco" placeholder="Endereço" value="{{$cliente['endereco']}}" required><br>
    <input type="email" name="email" id="email" placeholder="Email" value="{{$cliente['email']}}" required><br>
    <input type="number" name="telefone" id="telefone" placeholder="Telefone" value="{{$cliente['telefone']}}" required><br>
    <input type="text" name="nomeresponsavel" id="nomeresponsavel" placeholder="Nome do responsável" value="{{$cliente['nomeresponsavel']}}" required><br>
    <input type="number" name="cpf" id="cpf" placeholder="CPF" value="{{$cliente['cpf']}}" required><br>
    <input type="number" name="celular" id="celular" placeholder="Celular" value="{{$cliente['celular']}}" required><br>
    <input type="submit" value="Atualizar cliente">
</form>
@endisset
