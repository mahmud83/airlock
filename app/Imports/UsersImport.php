<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithStartRow;

class UsersImport implements ToModel, WithValidation, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'id'        => $row[0],
            'name'      => $row[1],
            'email'     => $row[2],
            'password'  => bcrypt($row[3])
        ]);
    }

    /**
     * [rules description]
     * @return [type] [description]
     */
    public function rules(): array
    {
        return [
            '0'     => 'unique:users,id',
            '2'     => 'email|unique:users,email'
        ];
    }

    /**
     * [startRow description]
     * @return [type] [description]
     */
    public function startRow(): int
    {
        return 2;
    }
}
