<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithBackgroundColor;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Alignment ;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class GeoreferenciamientoExport implements FromView, WithStyles,ShouldAutoSize, WithBackgroundColor, WithColumnWidths
{

    public function view(): View
    {
        $datosReferenciamiento = DB::select('CALL SP_FormatoReferenciamiento');
        $collectReferenciamiento = collect( $datosReferenciamiento );
        return view('formatos.georeferenciamiento', compact('collectReferenciamiento'));
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            'A1:O2'    => [
                'font' => ['bold' => true, 'size' => 10, 'color' => [ 'rgb' => '0C0C0C']],
                'alignment' => [
                    'horizontal' => Alignment::HORIZONTAL_CENTER_CONTINUOUS,
                    'vertical' => Alignment::VERTICAL_CENTER,
                    'wrapText' => true,
                ],
                'fill' => [
                    'color' => [
                    'rgb' => 'D1E8B3']
                ],

                'borders' => [
                    'horizontal' => [
                        'borderStyle' => Border::BORDER_MEDIUM,
                        'color' => [
                            'rgb' => '808080'
                        ]
                    ],
                    'vertical' => [
                        'borderStyle' => Border::BORDER_MEDIUM,
                        'color' => [
                            'rgb' => '808080'
                        ]
                    ],
                    'top' => [
                        'borderStyle' => Border::BORDER_MEDIUM,
                        'color' => [
                            'rgb' => '808080'
                        ]
                    ],
                    'bottom' => [
                        'borderStyle' => Border::BORDER_MEDIUM,
                        'color' => [
                            'rgb' => '808080'
                        ]
                    ],
                    'left' => [
                        'borderStyle' => Border::BORDER_MEDIUM,
                        'color' => [
                            'rgb' => '808080'
                        ]
                    ],
                    'right' => [
                        'borderStyle' => Border::BORDER_MEDIUM,
                        'color' => [
                            'rgb' => '808080'
                        ]
                    ],

                ],

            ],

            'A3:O200' => [
                'borders' => [
                    'horizontal' => [
                        'borderStyle' => Border::BORDER_HAIR,
                        'color' => [
                            'rgb' => '808080'
                        ]
                    ],
                    'vertical' => [
                        'borderStyle' => Border::BORDER_HAIR,
                        'color' => [
                            'rgb' => '808080'
                        ]
                    ],
                    'top' => [
                        'borderStyle' => Border::BORDER_HAIR,
                        'color' => [
                            'rgb' => '808080'
                        ]
                    ],
                    'bottom' => [
                        'borderStyle' => Border::BORDER_HAIR,
                        'color' => [
                            'rgb' => '808080'
                        ]
                    ],
                    'left' => [
                        'borderStyle' => Border::BORDER_HAIR,
                        'color' => [
                            'rgb' => '808080'
                        ]
                    ],
                    'right' => [
                        'borderStyle' => Border::BORDER_HAIR,
                        'color' => [
                            'rgb' => '808080'
                        ]
                    ],

                ],
             ]
        ];
    }

    public function backgroundColor()
    {
        // Or return the styles array
         return [
             'fillType'   => Fill::FILL_SOLID,
         ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 9,
            'B' => 9,
            'D' => 9,
            'E' => 10,
            'F' => 12,
            'G' => 12,
            'H' => 11,
            'J' => 9,
            'K' => 10,
            'L' => 12,
            'M' => 12,
            'N' => 11,
            'O' => 10
        ];
    }

}
