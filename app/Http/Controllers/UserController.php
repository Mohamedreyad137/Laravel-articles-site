<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel as Excel;

class UserController extends Controller
{
    // public function view() {

    //     return view("importexportview");
    // }

    // public function import() {

    //     Excel::Import(new UsersImport, request()->file('file'));

    //     return redirect()->back();
    // }
}
