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

class ItinerarioExport implements FromView, WithStyles,ShouldAutoSize, WithBackgroundColor, WithColumnWidths
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $itinerarioRutas = DB::select('CALL SP_ItinerarioRutas');
        $collectItinerario = collect( $itinerarioRutas );
        return view('formatos.itinerario', compact('collectItinerario'));
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            'A1:T1'    => [
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

            'A2:T200' => [
                'alignment' => [
                    'horizontal' => Alignment::HORIZONTAL_CENTER_CONTINUOUS,
                    'wrapText' => true,
                ],
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
            ],
            'F' => [
                'alignment' => [
                    'horizontal' => Alignment::HORIZONTAL_CENTER_CONTINUOUS,
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
            'B' => 9,
            'D' => 10,
            'E' => 10,
            'F' => 12,
            'G' => 12,
            'H' => 9,
            'I' => 12,
            'J' => 12,
            'K' => 10,
            'L' => 10,
            'M' => 12,
            'N' => 11,
            'O' => 10,
            'P' => 6,
            'Q' => 13,
            'R' => 17,
            'S' => 12,
            'T' => 17,

        ];
    }
}
