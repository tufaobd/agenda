<?php

namespace App\Http\Controllers\Contatos;
use App\Http\Controllers\Controller;
use App\Model\Contatos;
use Illuminate\Http\Request;
use App\Http\Requests\ContatosRequest;


class ContatosController extends Controller
{
    public function __construct(Contatos $contatos)
    {
        $this->contato = $contatos;
    }
    private $contato;

    public function contatos(Request $request)
    {
        $contato = Contatos::get();
        if ($request->ajax()){
            return response()->json($contato, 200);
        }else{
            return view('contatos.index', compact('contato'));
        }
    }

    public function create()
    {
        return view('contatos.create');

    }

    public function store(ContatosRequest $request)
    {
        try {
            $contatos = new $this->contato;
            $contatos->fill($request->all());
             $contatos->save();
            $success = "Contato Criado";

            return redirect()->route('contatos.index', $contatos)->with('success', $success);

        }catch (\Exception $e)
        {
            return back()->with('error',$e->getMessage());
        }

    }
    public function edit(Contatos $contato)
    {
        return view('contatos.edit', compact('contato'));
    }

    public function update(Request $request, Contatos $contato)
    {
        try {
            $contato->fill($request->all());
            $contato->update();
            $success = "Usuário Editado";

            return redirect()->route('contatos.index', $contato)->with('success', $success);

        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function destroy(Contatos $contato)
    {
        try {
            $contato->delete();
            $success = "Contato Excluido";

            return redirect()->route('contatos.index', $contato)->with('success', $success);
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

}
