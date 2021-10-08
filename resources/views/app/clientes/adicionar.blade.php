@include('app._partials.bootstrap')
@include('app._partials.menu')
<form action="{{route('app.clientes.adicionarpost')}}" method="post">
    @csrf
    <input type="text" name="razaosocial" id="razaosocial" placeholder="Razão social"><br>
    <input type="text" name="nomefantasia" id="nomefantasia" placeholder="Nome fantasia"><br>
    <input type="number" name="cnpj" id="cnpj" placeholder="CNPJ"><br>
    <input type="text" name="endereco" id="endereco" placeholder="Endereço"><br>
    <input type="email" name="email" id="email" placeholder="E-mail"><br>
    <input type="number" name="telefone" id="telefone" placeholder="Telefone"><br>
    <input type="text" name="nomeresponsavel" id="nomeresponsavel" placeholder="Nome do responsavel"><br>
    <input type="number" name="cpf" id="cpf" placeholder="CPF"><br>
    <input type="number" name="celular" id="celular" placeholder="Celular"><br>
    <input type="submit" value="Adicionar cliente">
</form>
