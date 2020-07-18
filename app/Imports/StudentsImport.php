<?php

namespace App\Imports;

use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithStartRow;

class StudentsImport implements ToModel, WithValidation, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'user_id'       => $row[0],
            'nisn'          => $row[1],
            'nis'           => $row[2],
            'nama_lengkap' => $row[3],
            'tempat_lahir' => $row[4],
            'tanggal_lahir' => $row[5],
            'jenis_kelamin' => $row[6],
            'agama'     => $row[7],
            'anak_ke'   => $row[8],
            'alamat'    => $row[9],
            'telp'      => $row[10],
            'sekolah_asal' => $row[11],
            'diterima_dikelas' => $row[12],
            'tanggal_diterima' => $row[13],
            'nama_ayah' => $row[14],
            'nama_ibu'  => $row[15],
            'alamat_ortu' => $row[16],
            'telp_rumah' => $row[17],
            'pekerjaan_ayah' => $row[18],
            'pekerjaan_ibu' => $row[19],
            'nama_wali'     => $row[20],
            'alamat_wali'   => $row[21],
            'telp_wali'     => $row[22],
            'pekerjaan_wali' => $row[23]
        ]);
    }

    /**
     * [rules description]
     * @return [type] [description]
     */
    public function rules(): array
    {
        return [
            '0'     => 'exists:users,id|unique:students,user_id',
            '2'     => 'unique:students,nis'
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
