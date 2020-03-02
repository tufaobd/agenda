<?php

namespace App\Http\Controllers\Mensagens;


use App\Http\Controllers\Controller;
use App\Model\Contatos;
use App\Model\Mensagens;
use Illuminate\Http\Request;

class MensagensController extends Controller
{

    public function __construct(Mensagens $mensagens)
    {
        $this->mensagem = $mensagens;
    }

    private $mensagem;

    public function index(Request $request)
    {
        $mensagens = Mensagens::with('Contato')->get();
        if ($request->ajax()){
            return response()->json($mensagens, 200);
        }else{
            return view('mensagens.index', compact('mensagens'));
        }
    }

    public function create()
    {
        $contatos = Contatos::where('situacao', 1)->get();
        return view('mensagens.create', compact('contatos'));
    }

    public function store(MensagenssRequest $request)
    {
        try {
            $mensagem = new $this->mensagem;
            $mensagem->fill($request->all());
            $mensagem->save();
            $success = "Mensagem Criada";

            return redirect()->route('index', $mensagem)->with('success', $success);

        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function edit(Mensagens $mensagem)
    {
        $contatos = Contatos::where('situacao', 1)->get();

        return view('mensagens.edit', compact('mensagem', 'contatos'));

    }

    public function update(Request $request, Mensagens $mensagem)
    {
        try {
            $mensagem->fill($request->all());
            $mensagem->update();
            $success = "Mensagem Editada";

            return redirect()->route('index', $mensagem)->with('success', $success);

        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function destroy(Mensagens $mensagem)
    {
        try {
            $mensagem->delete();
            $success = "Mensagem Excluida";

            return redirect()->route('index', $mensagem)->with('success', $success);

        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
