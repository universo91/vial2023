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

class EstadoTransitabilidad implements FromView, WithStyles,ShouldAutoSize, WithBackgroundColor, WithColumnWidths
{
    /**
    * @return \Illuminate\Contracts\View\View;
    */
    public function view() : View
    {
        $estadosTransitabilidad = DB::select('CALL SP_EstadoTransitabilidad');
        $collectEstadosTransitabilidad = collect( $estadosTransitabilidad );
        return view('formatos.estadoTransitabilidad')->with( compact('collectEstadosTransitabilidad'));
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            'A1:M2'    => [
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

            'A3:M200' => [
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
            'B' => 7,
            'C' => 10,
            'D' => 10,
            'E' => 12,
            'F' => 12,
            'G' => 9,
            'H' => 12,
            'I' => 12,
            'J' => 9,
            'K' => 12,
            'L' => 12,
            'M' => 12
        ];
    }
}
