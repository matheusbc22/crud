@include('app._partials.bootstrap')
@include('app._partials.menu')
@isset($proposta)
<form action="{{route('app.propostas.editarpost')}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$proposta['id']}}">
    <input type="text" name="enderecoobra" value="{{$proposta['enderecoobra']}}" id="enderecoobra" placeholder="Endereço da obra"><br>
    <input type="number" name="valortotal" value="{{$proposta['valortotal']}}" id="valortotal" placeholder="Valor total"><br>
    <input type="number" name="sinal" value="{{$proposta['sinal']}}" id="sinal" placeholder="Sinal"><br>
    <input type="number" name="qtdparcela" value="{{$proposta['qtdparcela']}}" id="qtdparcela" placeholder="Quantidade de parcelas"><br>
    <input type="number" name="valorparcelas" value="{{$proposta['valorparcelas']}}" id="valorparcelas" placeholder="Valor das parcelas"><br>
    <input type="date" name="datainiciopagamento" value="{{$proposta['datainiciopagamento']}}" id="datainiciopagamento" placeholder="Data de inicio do pagamento"><br>
    <input type="date" name="datasparcelas" value="{{$proposta['datasparcelas']}}" id="datasparcelas" placeholder="Data das parcelas"><br>
    <input type="file" name="anexo" value="{{$proposta['anexo']}}" id="anexo" placeholder="Anexo..."><br>
    @switch($proposta['status'])
        @case('0')
            <input type="radio" value="0" id="fechado" name="status" value="0" checked="checked">
            <label for="fechado">Fechada</label><br>
            <input type="radio" value="1" id="aberto" name="status" value="1">
            <label for="aberto">Aberta</label><br>
            <input type="radio" value="2" id="aprovado" name="status" value="2">
            <label for="aprovado">Aprovada</label><br><br>
            @break
        @case('1')
            <input type="radio" value="0" id="fechado" name="status" value="0">
            <label for="fechado">Fechada</label><br>
            <input type="radio" value="1" id="aberto" name="status" value="1" checked="checked">
            <label for="aberto">Aberta</label><br>
            <input type="radio" value="2" id="aprovado" name="status" value="2">
            <label for="aprovado">Aprovada</label><br><br>
            @break
        @case('2')
        <input type="radio" value="0" id="fechado" name="status" value="0">
        <label for="fechado">Fechada</label><br>
        <input type="radio" value="1" id="aberto" name="status" value="1">
        <label for="aberto">Aberta</label><br>
        <input type="radio" value="2" id="aprovado" name="status" value="2" checked="checked">
        <label for="aprovado">Aprovada</label><br><br>
            @break
        @default
            <label>Erro</label><br><br>
    @endswitch()
    <input type="submit" value="Atualizar proposta">
</form>
@endisset
