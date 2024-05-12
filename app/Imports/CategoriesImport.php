<?php

namespace App\Imports;

use App\Models\Category;
use Maatwebsite\Excel\Concerns\ToModel;

class CategoriesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Category([

            'name'=> $row[0],
            'card_image'=> $row[1],
            'video'=> $row[2],
            'description'=> $row[3],
        ]);
    }
}
