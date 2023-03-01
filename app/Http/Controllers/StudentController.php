<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $student->company_id = Auth::user()->company_id;
        if($student->save()){
            return redirect('/students/'.$student->id)->with('success', 'Cadastrado com sucesso');
        }else{
            return redirect('/students/new')->with('error', 'Erro ao cadastrar');
        }

    }

    public function show($id){
        $student = Student::find($id);
        return view('student', ['student' => $student]);
    }

    public function update(Request $request, $id){
        $student = Student::find($id);
        $student->name = $request->name;
        $student->age = $request->age;
        if($student->save()){
            return redirect('/students/'.$id)->with('success', 'Atualizado com sucesso');
        }else{
            return redirect('/students/'.$id)->with('error', 'Erro ao atualizar');
        }
    }
}
