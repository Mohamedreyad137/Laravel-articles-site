<?php

namespace App\Http\Controllers\Admin;

use App\Exports\StudentExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Imports\StudentImport;
use App\Models\Student;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::get();

        return view('admin.student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        Student::create([
            'name' => $request->name,
            'sitting_number' => $request->sitting_number,
            'arabic'=> $request->arabic,
            'math'=>$request->math,
            'english'=> $request->english,
        ]);

        return redirect()->route('admin.student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function import() {

        Excel::import(new StudentImport, request()->file('file'));

        return redirect()->back();
    }

    public function export() {

        return Excel::download(new StudentExport , 'students.xlsx');
    }

    public function search(Request $request) {

        $search = $request->search;

        $students = Student::where(function($query) use ($search){

            $query->where('name','like',"%$search%")
            ->orWhere('sitting_number','like',"%$search%");
            })
            ->get();

            return view('admin.student.index',compact('students','search'));

    }
}
