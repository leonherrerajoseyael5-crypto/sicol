<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::latest()->get();
        return view('reports.index', compact('reports'));
    }

    public function create()
    {
        // Vista con mapa + formulario
        return view('reports.map-create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titulo'      => 'required|string|max:255',
            'categoria'   => 'nullable|string|max:255',
            'descripcion' => 'required|string',
            'latitud'     => 'nullable|numeric',
            'longitud'    => 'nullable|numeric',
            'foto'        => 'nullable|image|max:2048',
        ]);

        $data['estado'] = 'pendiente';

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('reportes', 'public');
        }

        Report::create($data);

        return redirect()->route('reportes.index')->with('success', 'Reporte enviado');
    }

    public function show($id)
    {
        $report = Report::findOrFail($id);
        return view('reports.show', compact('report'));
    }
}


    


