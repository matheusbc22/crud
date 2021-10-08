@include('app._partials.bootstrap')
Cliente: {{$cliente['nomefantasia']}}
<form action="{{route('app.propostas.adicionarpost')}}" method="post">
    @csrf
    <input type="hidden" name="cliente_id" value="{{$cliente['id']}}">
    <input type="text" name="enderecoobra" id="enderecoobra" placeholder="Endereço da obra"><br>
    <input type="number" name="valortotal" id="valortotal" placeholder="Valor total"><br>
    <input type="number" name="sinal" id="sinal" placeholder="Sinal"><br>
    <input type="number" name="qtdparcela" id="qtdparcela" placeholder="Quantidade de parcelas"><br>
    <input type="number" name="valorparcelas" id="valorparcelas" placeholder="Valor das parcelas"><br>
    <input type="date" name="datainiciopagamento" id="datainiciopagamento" placeholder="Data de inicio do pagamento"><br>
    <input type="date" name="datasparcelas" id="datasparcelas" placeholder="Data das parcelas"><br>
    <input type="file" name="anexo" id="anexo" placeholder="Anexo..."><br>
    <input type="radio" id="fechado" name="status" value="0">
    <label for="fechado">Fechada</label><br>
    <input type="radio" id="aberto" name="status" value="1">
    <label for="aberto">Aberta</label><br>
    <input type="radio" id="aprovado" name="status" value="2">
    <label for="aprovado">Aprovada</label><br><br>
    <input type="submit" value="Adicionar proposta">
</form>
