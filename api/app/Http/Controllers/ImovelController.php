<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imovel;

class ImovelController extends Controller
{
    public function index() {
        return Imovel::all();
    }

    public function store(Request $request) {
        // $imovel = Imovel::create([
        //     "titulo"=>$request->input('titulo'),
        //     "descricao"=>$request->input('descricao'),
        //     "endereco"=>$request->input('endereco')
        // ]);

        // $imovel->save();

        $path = $request->file('fotos')->store('teste');

        return $path;
    }

    public function show(Imovel $imovel) {
        return $imovel;
    }

    public function update(Imovel $imovel, Request $request) {
        $imovel->fill($request->all());
        $imovel->save();

        return $imovel;
    }

    public function destroy(Imovel $imovel) {
        $imovel->delete();
        return $imovel;
    }
}
