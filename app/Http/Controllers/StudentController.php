<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentController extends Controller
{
    public function index(){
        $student = Students::all();
        return view('students.store', ['students' => $student]);
    }

    public function create(){
        return view('students.create');
    }

    public function show(){
        
    }
    public function delete(){

    }

    public function edit(){

    }

    public function store(Request $request){
        $students= new Students();
        $students->first_name= $request->first_name;
        $students->last_name= $request->last_name;
        $students->age= $request->age;
        $students->save();
        return view("students.store");
    }

    public function update(){

    }
}
