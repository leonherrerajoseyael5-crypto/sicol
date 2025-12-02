<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Services\AiService;

class AIController extends Controller
{
    public function analizar($id, AiService $ai)
    {
        $report = Report::findOrFail($id);

        // Si ya se analizó antes, reutilizamos
        if ($report->ia_resultado) {
            $resultado = json_decode($report->ia_resultado, true);
        } else {
            $resultado = $ai->analyzeReport($report->descripcion);
            $report->ia_resultado = json_encode($resultado);
            $report->save();
        }

        return view('reports.ai', compact('report', 'resultado'));
    }
}

