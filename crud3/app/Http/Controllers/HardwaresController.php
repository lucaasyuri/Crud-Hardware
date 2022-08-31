<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hardware;

class HardwaresController extends Controller
{

    public function index()
    {
        //dd('Lucas teste');

        $hardwares = Hardware::all(); //::all(): pega todos os campos e todos os registros da tabela 'hardwares'

        //dd($hardwares); //testando para ver se está retornando tudo certinho

        return view('hardwares.index', ['hardwares' => $hardwares]);
        //buscando a view 'index.blade.php'
        //['hardwares']: parâmetro, $hardwares: passando o $hardwares para o parâmetro ['hardwares']
        //passando dados para a view
    }

    public function create()
    {
        return view('hardwares.create'); //retornando view de criação
    }

    public function store(Request $request)
    {
        // recebendo parâmetros do formulário através do 'Request $request'

        //dd($request): //testando para ver se está enviando os dados certinho
        Hardware::create($request->all()); //salvando

        return redirect()->route('hardwares-index');
    }

    public function edit ($id)
    {
        $hardwares = Hardware::where('id', $id)->first();
        //where: onde o 'id' seja igual ao 'id' do nosso parâmetro($id)
        //first(): pega o primeiro id que achar

        if (!empty($hardwares))
        {
            //dd($hardwares)
            return view('hardwares.edit', ['hardwares' => $hardwares]);
        }
        else
        {
            //se caso não achar nenhum hardware(id), retorna para a view index
            return redirect()->route('hardwares-index');
        }
    }

    public function update(Request $request, $id)
    {
        //recebendo parâmetros do formulário através do Request $request

        //dd($request);

        //dd($id);

        $data = [
            'nome' => $request->nome,
            'quantidade' => $request->quantidade,
            'cor' => $request->cor,
        ];

        Hardware::where('id', $id)->update($data);
        //onde o 'id' seja igual ao $id || $data: nossos dados

        return redirect()->route('hardwares-index');
    }

    public function destroy($id)
    {
        //dd($id);

        Hardware::where('id', $id)->delete();

        return redirect()->route('hardwares-index');
    }

}
