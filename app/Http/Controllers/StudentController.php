<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function index(){
        $students = Student::all();
        // return dd($students[1]->name);

        return view('students', ['students' => $students]);
    }

    public function create(Request $request){
        $student = new Student();
        $student->name = $request->name;
        $student->age = $request->age;
        $student->company_id = $request->company_id;
        if($student->save()){
            return 'Cadastrado com sucesso';
        }else{
            return 'Erro ao cadastrar';
        }

    }
}
