<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InfracaoController extends Controller
{
    public function buscarInfracoes(Request $request)
    {
        // Validar o campo do formulário
        $request->validate([
            'placa' => 'required|string'
        ]);

        $placa = $request->input('placa');

        // Caminho para o arquivo JSON
        $filePath = storage_path('app/Infracoes.json');

        // Verificar se o arquivo existe
        if (!File::exists($filePath)) {
            return back()->withErrors(['error' => 'Arquivo JSON não encontrado']);
        }

        // Ler o conteúdo do arquivo JSON
        $jsonContent = File::get($filePath);
        $data = json_decode($jsonContent, true);

        // Verificar a estrutura do JSON
        if (!isset($data['Infracoes'])) {
            return back()->withErrors(['error' => 'Estrutura inválida no arquivo JSON']);
        }

        // Buscar as infrações da placa fornecida
        $resultados = [];
        foreach ($data['Infracoes'] as $item) {
            $requestPlaca = $item['dados']['request']['placa'] ?? $item['request']['placa'] ?? null;

            if ($requestPlaca === $placa) {
                $resultados[] = $item['dados']['registro_debitos_por_infracoes_renainf']['infracoes_renainf']['infracoes'] ?? [];
            }
        }

        // Retornar para a view com os resultados
        return view('infracoes.resultados', [
            'placa' => $placa,
            'resultados' => $resultados
        ]);
    }
}
