<?php

namespace App\Exports;

use App\Stock;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StocksExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        return (Stock::all('sku','id')->keyBy('sku'));

    }
    public function headings(): array
    {
        return [
            'sku',
            'stock_ids',
        ];

   }


}


