<?php

namespace App\Exports;

use App\User;
use App\Invetment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Invetment::all();
    }
     public function headings(): array
    {
        return [
            '#',
            'Main Category',
            'Sub Category',
            'Sub Data Category',
            'Quantity',
            'Amount',
            'Date',
            'Create_at',
            'Update_at',
        ];
    }
}
