<?php

namespace App\Http\Controllers;

use App\Models\MinhaTabela;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ExcelImport;
use Exception;

class ExemploController extends Controller
{

    public function index()
    {
        return view('index');
    }


    public function importarExcel(Request $request)
    {
        // Validação para garantir que o arquivo seja Excel
        $request->validate([
            'arquivo_excel' => 'required|file',
        ]);
    
        try {
            // Ler o arquivo Excel e processar as linhas
            Excel::import(new ExcelImport, $request->file('arquivo_excel'));
    
            // Retorna mensagem de sucesso se a importação funcionar
            return redirect()->back()->with('success', 'Data imported successfully!');
        } catch (Exception $e) {
            // Retorna mensagem de erro se algo der errado
            return redirect()->back()->with('error', 'Failed to import the file. Please try again.');
        }
    }
    
}
