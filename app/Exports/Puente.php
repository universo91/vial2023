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

class Puente implements FromView, WithStyles,ShouldAutoSize, WithBackgroundColor, WithColumnWidths
{

    public function view() : View
    {
        $datosPuente = DB::select('CALL SP_Puentes');
        $collectPuente = collect($datosPuente);
        return view('formatos.puente')->with(compact('collectPuente'));
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            'A1:N2'    => [
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

            'A3:N200' => [
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
                'alignment' => [
                    'horizontal' => Alignment::HORIZONTAL_CENTER_CONTINUOUS,
                ],
            ],
            'F' => [
                'alignment' => [
                    'vertical' => Alignment::VERTICAL_CENTER,
                    'wrapText' => true,
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
            'B' => 10,
            'C' => 12,
            'D' => 12,
            'E' => 10,
            'F' => 12,
            'G' => 12,
            'H' => 12,
            'I' => 12,
            'J' => 9,
            'K' => 12,
            'L' => 11,
            'M' => 11,
            'N' => 12
        ];
    }
}
