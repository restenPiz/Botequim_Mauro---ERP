<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class exportController extends Controller
{
    public function exportPdf()
    {
        $data = []; // Passe os dados necessários para a view
        $pdf = Pdf::loadView('your-view-file', $data);
        return $pdf->download('report.pdf');
    }

    public function exportExcel()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Adicione seus dados ao Excel aqui. Exemplo:
        $sheet->setCellValue('A1', 'Hello World !');

        $writer = new Xlsx($spreadsheet);
        $fileName = 'report.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);
        $writer->save($temp_file);

        return response()->download($temp_file, $fileName);
    }
}
