<?php
namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    public function collection()
    {

        $users = user::orderBy('name','ASC')->get();
       return  $users;
    }

    public function headings(): array
    {
        return [
            '#',
            'Nombre Corto',
            'Nombre',
            'Email',
            'Puntos',
            'rol usuario',
            'Activo',
            'Created at',
            'Updated at'
        ];
    }

}

