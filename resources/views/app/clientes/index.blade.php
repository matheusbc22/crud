@include('app._partials.bootstrap')
@include('app._partials.menu')
<a class="d-flex justify-content-center btn btn-primary" href="{{route('app.clientes.adicionar')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
  </svg>&nbsp;Adicionar cliente</a>
@if(isset($clientes))
    <table class="table table-dark">
        <thead class='text-center thead'>
          <tr>
            <th scope="col">Cliente (ID)</th>
            <th scope="col">Razão social</th>
            <th scope="col">Nome fantasia</th>
            <th scope="col">CNPJ</th>
            <th scope="col">Endereço</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefone</th>
            <th scope="col">Nome do responsável</th>
            <th scope="col">CPF</th>
            <th scope="col">Celular</th>
            <th scope="col">Adicionar proposta</th>
            <th scope="col">Editar cliente</th>
          </tr>
        </thead>
        <tbody>
    @foreach ($clientes as $indice => $cliente)
          <tr>
            <th scope="row" class="text-center">{{$cliente['id']}}</th>
            <th scope="row" class="text-center">{{$cliente['razaosocial']}}</th>
            <th scope="row" class="text-center">{{$cliente['nomefantasia']}}</th>
            <th scope="row" class="text-center">{{$cliente['cnpj']}}</th>
            <th scope="row" class="text-center">{{$cliente['endereco']}}</th>
            <th scope="row" class="text-center">{{$cliente['email']}}</th>
            <th scope="row" class="text-center">{{$cliente['telefone']}}</th>
            <th scope="row" class="text-center">{{$cliente['nomeresponsavel']}}</th>
            <th scope="row" class="text-center">{{$cliente['cpf']}}</th>
            <th scope="row" class="text-center">{{$cliente['celular']}}</th>
            <th scope="row" class="text-center"><a  class="link-light" href="{{route('app.propostas.adicionar', ['id' => $cliente['id']])}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
                <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
              </svg></a></th>
            <th scope="row" class="text-center"><a  class="link-light" href="{{route('app.clientes.editar', ['id' => $cliente['id']])}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
              </svg></a></th>
          </tr>
    @endforeach
    </tbody>
    </table>
@else
    Sem registros
@endif
