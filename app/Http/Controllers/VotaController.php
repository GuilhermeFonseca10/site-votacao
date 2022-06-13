<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Candidato;

class VotaController extends Controller
{
    public function index(){

$candidatos = Candidato::all();

        return view('welcome', ['candidatos' => $candidatos]);
    }

    public function create(){
        return view('candidatos.create');
    }

    public function store(Request $request){
        $candidato = new Candidato;

        $candidato->nome = $request->nome;
        $candidato->cpf = $request->cpf;
        $candidato->numero = $request->numero;
        $candidato->cidade = $request->cidade;
        $candidato->estado = $request->estado;

//image upload
if($request->hasFile('image') && $request->file('image')->isValid()){

    $requestImage = $request->image;

    $extension = $requestImage->extension();

    $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;

    $request->image->move(public_path('img/candidatos'), $imageName);

    $candidato->image = $imageName;


}

        $candidato->save();

        return redirect('/')->with('msg', 'Candidato cadastrado com sucesso!');

    }
public function show($id){
    $candidato = Candidato::findOrFail($id);

    return view('candidatos.show', ['candidato' => $candidato]);
}

}
