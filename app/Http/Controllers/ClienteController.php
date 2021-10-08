<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index (){
        /*
        Usa o método all(); do model Cliente
        Seleciona todos os clientes na db
        Armazena numa variável convertida em array
        Manda pra view index via compact o array dos clientes pra tabela
        */
        $clientes = Cliente::all();
        $arrayClientes = $clientes->toArray();
        return view('app.clientes.index', compact('arrayClientes', 'clientes'));
    }
    public function addCliente (){
        //Página com o formulário de adicionar cliente
        return view('app.clientes.adicionar');
    }
    public function addClienteDb(Request $request){
        /*
        Instancia o model cliente
        Recebe o request enviado via post
        Salva os dados na db
        Redireciona pra lista de clientes
        */
        $cliente = new Cliente();
        $cliente->create($request->all());
        return redirect('app/clientes');
    }
    public function editaCliente($id){
        /*
        Recebe o id pelo método GET e guarda na variável $id
        Executa o método find do model Cliente pra procurar pelo id
        Retorna a view p/editar cliente, passando os dados pela variável $cliente
        */
        $cliente = Cliente::find($id);
        if (isset($cliente) and !empty($cliente)){
            return view('app.clientes.editar', compact('cliente', 'cliente'));
        }else{
            return redirect()->route('app.clientes.index');
        }
    }
    public function editaClienteDb(Request $request){
        /*
        Recebe o request do método POST
        Executa o método find no model Cliente com o ID recebido pelo POST
        Encontra o cliente, modifica e atualiza na db
        Redireciona para a lista de clientes
        */
        $cliente = Cliente::find($request->input('id'));
        $cliente->razaosocial = $request->input('razaosocial');
        $cliente->nomefantasia = $request->input('nomefantasia');
        $cliente->cnpj = $request->input('cnpj');
        $cliente->endereco = $request->input('endereco');
        $cliente->email = $request->input('email');
        $cliente->telefone = $request->input('telefone');
        $cliente->nomeresponsavel = $request->input('nomeresponsavel');
        $cliente->cpf = $request->input('cpf');
        $cliente->celular = $request->input('celular');
        $cliente->save();
        return redirect('app/clientes');
    }
}
