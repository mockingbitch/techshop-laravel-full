<?php

namespace App\Exports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CustomerExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return [
            'id',
            'customerName',

            'email',
            'created_at'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $customers = Customer::select('id','customerName','email','created_at')->get()->toArray();
        return collect($customers);
    }
}
