@include('app._partials.bootstrap')
<form action="{{route('index')}}" method="post">
    @csrf
    <div class="mb-3 d-flex justify-content-center">
        Cadastro de usuário
    </div>
    <div class="mb-3 d-flex justify-content-center">
      <label for="nome" class="form-label">Nome:</label>
      <input name="nome" type="text" class="form-control" id="nome">
    </div>
    <div class="mb-3 d-flex justify-content-center">
      <label for="email" class="form-label">Email:</label>
      <input name="email" type="email" class="form-control" id="email">
    </div>
    <div class="mb-3 d-flex justify-content-center">
        <label for="senha" class="form-label">Senha:</label>
        <input name="senha" type="password" class="form-control" id="senha">
    </div>
    <div class="mb-3 d-flex justify-content-center">
        <label for="confirmacaosenha" class="form-label">Confirme a senha:</label>
        <input type="password" class="form-control" id="confirmacaosenha">
      </div>
    <button type="submit" class="btn btn-primary">Cadastrar usuário</button>
</form>
