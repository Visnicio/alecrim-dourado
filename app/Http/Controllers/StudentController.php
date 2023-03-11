<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Classroom;

class StudentController extends Controller
{
    //

    public function index(){
        $students = Student::where('company_id', Auth::user()->company_id)->get();

        return view('students.students', ['students' => $students]);
    }

    public function create(Request $request){
        $student = new Student();
        $student->name = $request->name;
        $student->age = $request->age;
        $student->company_id = Auth::user()->company_id;
        $student->classroom_id = $request->classroom_id;
        if($student->save()){
            return redirect('/students/'.$student->id)->with('success', 'Cadastrado com sucesso');
        }else{
            return redirect('/students/new')->with('error', 'Erro ao cadastrar');
        }

    }

    public function show($id){
        $student = Student::find($id);
        $classrooms = Classroom::where('company_id', Auth::user()->company_id)->get();
        return view('students.student', ['student' => $student, 'classrooms' => $classrooms]);
    }

    public function update(Request $request, $id){
        $student = Student::find($id);
        $student->name = $request->name;
        $student->age = $request->age;
        $student->classroom_id = $request->classroom_id;
        if($student->save()){
            return redirect('/students/'.$id)->with('success', 'Atualizado com sucesso');
        }else{
            return redirect('/students/'.$id)->with('error', 'Erro ao atualizar');
        }
    }
}
