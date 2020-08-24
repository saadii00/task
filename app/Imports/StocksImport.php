<?php

namespace App\Imports;
use App\Stock;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;


    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

class StocksImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $key=>$row)
        {
            if($key>0)
            Stock::create([
                'sku' => $row[0],
                'stock'=>  $row[1]
            ]);
        }
    }
}
