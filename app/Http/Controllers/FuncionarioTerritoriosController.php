<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioTerritoriosController extends Controller
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
        $funcionarioterritorios = DB::select("select * from funcionarioterritorios");
        return view("funcionarioterritorios.listagem")->withFuncionarioTerritorios($funcionarioterritorios);
    }

    public function formulario() {
        return view("funcionarioterritorios.formulario");
    }

    public function gravar(Request $request) {
        //dd($request->all());
        $DescricaoTerritorio = $request->input("DescricaoTerritorio");
        DB::table('funcionarioterritorios')
        ->insert(
            ['IDFuncionario'=>$IDFuncionario]
        );
        return redirect('/funcionarioterritorios');
    }

    public function deletar(Request $request, $IDTerritorio) {
        DB::table('funcionarioterritorio')->where('IDTerritorio', '=', $IDTerritorio)->delete();
        return redirect('/funcionarioterritorios');
    }

    public function formularioAlterar(Request $request, $IDTerritorio) {
        $funcionarioterritorios = DB::table('funcionarioterritorios')
                        ->where('IDTerritorio', '=', $IDTerritorio)
                        ->get();
                        //dd($funcioarioterritorios[0]);
        return view("funcionarioterritorios.alterar")->withFuncionarioTerritorios($uncioarioterritorios[0]);
    }

    public function alterar(Request $request, $id) {
        //dd($request->all());
        $DescricaoTerritorio = $request->input("DescricaoTerritorio");
        DB::table('funcionarioterritorios')
            ->where('IDTerritorio', '=', $IDTerritorio)
            ->update(['DescricaoTerritorio' => $DescricaoTerritorio]);
        
        return redirect('/funionarioterritorios');
    }
}

