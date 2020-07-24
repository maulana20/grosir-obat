<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coa extends Model
{
    public static $statics = [
        'type' => [
            'AK' => 'Aktiva',
            'AP' => 'Hutang Usaha',
            'AR' => 'Piutang Usaha',
            'BL' => 'Pendapatan dan Beban lain lain',
            'BP' => 'Biaya Pemasaran',
            'BU' => 'Biaya Usaha',
            'CB' => 'Kas dan Bank',
            'PC' => 'Pembelian',
            'PPH' => 'PPh Pajak 23',
            'PPN' => 'PPn Keluaran',
            'PS' => 'Passiva',
            'SL' => 'Penjualan',
        ],
        'lod' => [
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ]
    ];
}
