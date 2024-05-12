<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'name'=> $row[0],
            'sitting_number' => $row[1],
            'arabic'=> $row[2],
            'math'=> $row[3],
            'english'=> $row[4],
        ]);
    }
}
