<?php

namespace App\Services;

use OpenAI;

class AiService
{
    protected $client;

    public function __construct()
    {
        $this->client = OpenAI::client(env('OPENAI_API_KEY'));
    }

    public function analyzeReport(string $texto): array
    {
        $prompt = "
        Analiza este reporte de la comunidad:
        '$texto'

        Devuelve:
        - Tipo de incidente
        - Nivel de gravedad (bajo, medio, alto)
        - Prioridad recomendada
        - Sugerencias para resolverlo
        - Una respuesta automática profesional

        Formato en JSON:
        {
            \"categoria\": \"\",
            \"gravedad\": \"\",
            \"prioridad\": \"\",
            \"sugerencias\": \"\",
            \"respuesta\": \"\"
        }
        ";

        $result = $this->client->chat()->create([
            'model' => 'gpt-4o',
            'messages' => [
                ['role' => 'user', 'content' => $prompt]
            ],
        ]);

        return json_decode($result['choices'][0]['message']['content'], true);
    }
}
