<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Proposta;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PropostaExport;

class PropostaController extends Controller
{
    public function index (){
        $propostas = Proposta::all();
        $arrayPropostas = $propostas->toArray();
        return view('app.propostas.index', compact('arrayPropostas', 'propostas'));
    }
    public function addProposta($id){
        $cliente = Cliente::find($id);
        if (isset($cliente) and !empty($cliente)){
            return view('app.propostas.adicionar', compact('cliente', 'cliente'));
        }else{
            return redirect()->route('app.clientes.index');
        }
    }
    public function addPropostaDb(Request $request){
        $proposta = new Proposta();
        $proposta->create($request->all());
        return redirect()->back();
    }
    public function exportacao(){
        return Excel::download(new PropostaExport, 'propostas.xlsx');
    }
    public function editaProposta($id){
        $proposta = Proposta::find($id);
        if (isset($proposta) and !empty($proposta)){
            return view('app.propostas.editar', compact('proposta', 'proposta'));
        }else{
            return redirect()->route('app.propostas.index');
        }
    }
    public function editaPropostaDb(Request $request){
        $proposta = Proposta::find($request->input('id'));
        $proposta->enderecoobra = $request->input('enderecoobra');
        $proposta->valortotal = $request->input('valortotal');
        $proposta->sinal = $request->input('sinal');
        $proposta->qtdparcela = $request->input('qtdparcela');
        $proposta->valorparcelas = $request->input('valorparcelas');
        $proposta->datainiciopagamento = $request->input('datainiciopagamento');
        $proposta->datasparcelas = $request->input('datasparcelas');
        $proposta->anexo = $request->input('anexo');
        $proposta->status = $request->input('status');
        $proposta->status = $request->input('status');
        $proposta->save();
        return redirect()->route('app.propostas.index');
    }
}
