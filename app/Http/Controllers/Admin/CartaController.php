<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCartaRequest;
use App\Http\Requests\UpdateCartaRequest;
use Illuminate\Http\Request;
use App\Models\Carta;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;


class CartaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $cartas = Carta::all();

        return view('admin.cartas.index', compact('cartas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cartas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCartaRequest $request)
    {
        $carta = $request->all();

        Carta::create($carta);

        return redirect()->route('admin.cartas.index')->with('info', 'El contenido ha sido creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Carta $carta)
    {
        return view('admin.cartas.show', compact('carta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Carta $carta)
    {
        
        return view('admin.cartas.edit', compact('carta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCartaRequest $request, Carta $carta)
    {
        $input = $request->all();

        $carta->update($input);

        return redirect()->route('admin.cartas.index')->with('info', 'El contenidoha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carta $carta)
    {
        $carta->delete();

        return redirect()->route('admin.cartas.index')->with('info', 'El contenido ha sido eliminado con éxito');
    }
}
