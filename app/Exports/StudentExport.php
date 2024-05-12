<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;

class StudentExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $student = Student::select('name','sitting_number','arabic','math','english')->get();

        return $student;
        // return Student::all();
    }
}
