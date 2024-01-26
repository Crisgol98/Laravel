<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CortoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cortos = [
            [
            'id' => 1,
            'titulo' => 'El corto más cortante',
            'director' => 'María Martín',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua.'
            ],
            [
            'id' => 2,
            'titulo' => 'Sin más',
            'director' => 'Pepa Pérez',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua.'
            ],
            [
            'id' => 3,
            'titulo' => 'Más o menos',
            'director' => 'Juan Jiménez',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua.'
            ],
            [
            'id' => 4,
            'titulo' => 'Tira pa\' ya',
            'director' => 'Sofía Sofín',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua.'
            ],
            [
            'id' => 5,
            'titulo' => 'Miedo',
            'director' => 'Pepe Parrilla',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua.'
            ]
        ];
    
        return view('cortos.index', compact('cortos'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cortos = [
            [
            'id' => 1,
            'titulo' => 'El corto más cortante',
            'director' => 'María Martín',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua.'
            ],
            [
            'id' => 2,
            'titulo' => 'Sin más',
            'director' => 'Pepa Pérez',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua.'
            ],
            [
            'id' => 3,
            'titulo' => 'Más o menos',
            'director' => 'Juan Jiménez',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua.'
            ],
            [
            'id' => 4,
            'titulo' => 'Tira pa\' ya',
            'director' => 'Sofía Sofín',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua.'
            ],
            [
            'id' => 5,
            'titulo' => 'Miedo',
            'director' => 'Pepe Parrilla',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua.'
            ]
        ];
        $corto = collect($cortos)->firstWhere('id', $id);

        return view('cortos.show', compact('corto'));
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
