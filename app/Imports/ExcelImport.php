<?php

namespace App\Imports;

use App\Models\Excel;
use Maatwebsite\Excel\Concerns\ToModel;

class ExcelImport implements ToModel
{
    public function model(array $row)
    {
        return new Excel([
            'coluna1' => $row[0],  // Ajuste conforme as colunas no Excel
            'coluna2' => $row[1],
            'coluna3' => $row[2],
        ]);
    }
}
