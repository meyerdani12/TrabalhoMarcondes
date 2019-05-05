<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdensDetalhesController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function lista() {
        $ordensdetalhes = DB::select("select * from ordensdetalhes");
        return view("ordensdetalhes.listagem")->withProdutos($ordensdetalhes);
    }

    public function formulario() {
        return view("ordensdetalhes.formulario");
    }

    public function gravar(Request $request) {
        //dd($request->all());
        $PrecoUnitario = $request->input("PrecoUnitario");
        DB::table('ordensdetalhes')
        ->insert(
            ['IDOrdem'=>$IDOrdem,
            'IDProduto'=>'abf',
            'PrecoUnitario'=>'123',
            'Quantidade'=>'10',
            'Desconto'=>'5']
        );
        return redirect('/odensdetalhes');
    }

    public function deletar(Request $request, $IDProduto) {
        DB::table('ordensdetalhes')->where('IDOrdem', '=', $IDOrdem)->delete();
        return redirect('/ordensdetalhes');
    }

    public function formularioAlterar(Request $request, $IDProduto) {
        $ordensdetalhes = DB::table('ordensdetalhes')
                        ->where('IDOrdem', '=', $IDOrdem)
                        ->get();
                        //dd($ordensdetalhes[0]);
        return view("ordensdetalhes.alterar")->OrdensDetalhes($produtos[0]);
    }

    public function alterar(Request $request, $IDOdem) {
        //dd($request->all());
        $PrecoUnitario = $request->input("PrecoUnitario");
        DB::table('ordensdetalhes')
            ->where('IDOrdem', '=', $IDOrdem)
            ->update(['NomeOrdem' => $PrecoUnitario]);
        
        return redirect('/ordensdetalhes');
    }
}

