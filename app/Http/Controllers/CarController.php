<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();

        return response()->json([
            'sucesso' => true,
            'mensagem' => 'Lista de Carros.',
            'totalDeCarros' => $cars->count(),
            'carros' => $cars
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'marca' => 'required',
                'modelo' => 'required'
            ],
            [
                'marca.required' => 'Campo marca é obrigatório!',
                'modelo.required' => 'Campo modelo é obrigatório!',
            ]);

            $car = Car::create($request->all());

        } catch (\Exception $error) {

            return response()->json([
                'sucesso' => false,
                'mensagem' => $error->getMessage()
            ],400);
        }

        return response()->json([
            'sucesso' => true,
            'mensagem' => "Carro $request->marca $request->modelo adicionado com sucesso",
            'dado' => $car
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $car = Car::find($id);
        if ($car == null) {
            return response()->json(['success' => false, 'msg' => "Carro não encontrado."], 400);
        }

        return response()->json(['success' => true, 'msg' => "Carro listado.", 'data' => $car]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        try {
            $request->validate([
                'marca' => 'required',
                'modelo' => 'required'
            ],
            [
                'marca.required' => 'Campo marca é obrigatório!',
                'modelo.required' => 'Campo modelo é obrigatório!',
            ]);

            $car = Car::findOrFail($id);

            $car->marca = $request->marca;
            $car->modelo = $request->modelo;

            $car->save();

            return response()->json(['success' => true, 'msg' => "Carro $car->modelo alterado com sucesso"], 400);

        } catch (\Exception $error) {
            return response()->json(['success' => false, 'msg' => $error->getMessage()], 400);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        try {

            $car = Car::findOrFail($id);

            $car->delete();

            return response()->json(['success' => true, 'msg' => "Carro $car->modelo excluído com sucesso"], 200);

        } catch (\Exception $error) {
            return response()->json(['success' => false, 'msg' => $error->getMessage()], 400);
        }
    }
}
