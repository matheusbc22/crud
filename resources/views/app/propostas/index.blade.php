@include('app._partials.bootstrap')
@include('app._partials.menu')
@if(isset($propostas))
<a class="d-flex justify-content-center btn btn-success" href="{{route('app.propostas.exportacao')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-earmark-spreadsheet" viewBox="0 0 16 16">
    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5v2zM3 12v-2h2v2H3zm0 1h2v2H4a1 1 0 0 1-1-1v-1zm3 2v-2h3v2H6zm4 0v-2h3v1a1 1 0 0 1-1 1h-2zm3-3h-3v-2h3v2zm-7 0v-2h3v2H6z"/>
  </svg>&nbsp;Exportar</a>
    <table class="table table-dark">
        <thead class='text-center thead'>
          <tr>
            <th scope="col">Cliente (ID)</th>
            <th scope="col">Endereço da obra</th>
            <th scope="col">Valor total</th>
            <th scope="col">Sinal</th>
            <th scope="col">Quantidade de parcelas</th>
            <th scope="col">Valor das parcelas</th>
            <th scope="col">Data de inicio de pagamento</th>
            <th scope="col">Data das parcelas</th>
            <th scope="col">Anexo</th>
            <th scope="col">Status</th>
            <th scope="col">Editar proposta</th>
          </tr>
        </thead>
        <tbody>
    @foreach ($propostas as $indice => $proposta)
          <tr>
            <th scope="row" class="text-center">{{$proposta['cliente_id']}}</th>
            <th scope="row" class="text-center">{{$proposta['enderecoobra']}}</th>
            <th scope="row" class="text-center">{{$proposta['valortotal']}}</th>
            <th scope="row" class="text-center">{{$proposta['sinal']}}</th>
            <th scope="row" class="text-center">{{$proposta['qtdparcela']}}</th>
            <th scope="row" class="text-center">{{$proposta['valorparcelas']}}</th>
            <th scope="row" class="text-center">{{$proposta['datainiciopagamento']}}</th>
            <th scope="row" class="text-center">{{$proposta['datasparcelas']}}</th>
            <th scope="row" class="text-center">{{$proposta['anexo']}}</th>
            <th scope="row" class="text-center">
                @switch($proposta['status'])
                    @case('0')
                        Fechada
                        @break
                    @case('1')
                        Aberta
                        @break
                    @case('2')
                        Aprovada
                        @break
                    @default
                        Erro
                        @break
                @endswitch
            </th>
            <th scope="row" class="text-center"><a class="link-light" href="{{route('app.propostas.editar', ['id' => $proposta['id']])}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
              </svg></a></th>
          </tr>
    @endforeach
    </tbody>
    </table>
@else
    Sem registros
@endif
