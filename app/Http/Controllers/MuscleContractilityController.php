<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\{Sample, Frequency, Contractility};
use Maatwebsite\Excel\Facades\Excel;


class MuscleContractilityController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function import(Request $request)
    {
        $request->validate([
            'arquivo_excel' => 'required|file|mimes:csv,txt',
        ]);

        try {
            $file = $request->file('arquivo_excel');
            $data = array_map('str_getcsv', file($file->getRealPath()));


            $this->sampleSave($data);
            $this->frequencySave($data);
            $this->contractiliySave($data);

            return redirect()->back()->with('success', 'Data imported successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to import the file. Please try again: ' . $e->getMessage());
        }
    }

    public function sampleSave($data)
    {
        // Primeira linha para os samples
        foreach (array_slice($data, 1) as $row) {
            Sample::create([
                'name' => $row[0],
            ]);
        }
    }

    public function frequencySave($data)
    {
        // Captura os nomes das frequências da primeira linha (sem os valores)
        $frequencyNames = array_slice($data[0], 1);

        // Salva cada nome de frequência
        foreach ($frequencyNames as $frequencyName) {
            Frequency::create([
                'name' => $frequencyName,
                // Remova a linha que tenta capturar um valor, pois não é mais necessário
            ]);
        }
    }

    public function contractiliySave($data)
    {
        // Captura os nomes das frequências da primeira linha (sem os valores)
        $frequencyNames = array_slice($data[0], 1);

        // Itera sobre cada linha de dados, começando pela segunda linha
        foreach (array_slice($data, 1) as $row) {
            // Obtém o sample ID correspondente
            $sampleName = $row[0];
            $sample = Sample::where('name', $sampleName)->first();

            if ($sample) {
                foreach ($frequencyNames as $index => $frequencyName) {
                    // Busca o ID da frequência pelo nome
                    $frequency = Frequency::where('name', $frequencyName)->first();

                    if ($frequency) {
                        // Captura o valor da frequência
                        $frequencyValue = !empty($row[$index + 1]) ? preg_replace('/[^\d]/', '', $row[$index + 1]) : 0;

                        // Insere na tabela tbl_contractiliy usando o modelo
                        Contractility::create([
                            'sample_id' => $sample->id,
                            'frequency_id' => $frequency->id,
                            'frequency' => $frequencyValue,
                        ]);
                    }
                }
            }
        }
    }

    public function getForceData()
    {
        $forceData = [];
        $frequencys = Frequency::get(); 
        
        foreach ($frequencys as $frequency) {
            $numericValue = filter_var($frequency->name, FILTER_SANITIZE_NUMBER_INT);
        
            if (!empty($numericValue)) {
                $contracts = Contractility::where('frequency_id', $frequency->id)->get();
                
                $contractData = [];
        
                foreach ($contracts as $contract) {
                    $contractData[] = "{$contract->sample->name}: {$contract->frequency}";                }
        
                $contractString = implode(", ", $contractData);
        
                $forceData[] = "$numericValue: [$contractString]";
            }
        }
        
        // Retornar os dados como JSON
        return response()->json($forceData);
        
    }
}
