<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;
use Illuminate\Support\Facades\Auth;

class ClassroomController extends Controller
{
    public function index(){

        $classrooms = Classroom::where('company_id', Auth::user()->company_id)->withCount('students')->get();

        return view('classrooms.classrooms', ['classrooms' => $classrooms]);
    }

    public function create(Request $request){
        $classroom = new Classroom();
        $classroom->name = $request->name;
        $classroom->company_id = Auth::user()->company_id;
        if($classroom->save()){
            return redirect('/classrooms/'.$classroom->id)->with('success', 'Cadastrado com sucesso');
        }else{
            return redirect('/classrooms/new')->with('error', 'Erro ao cadastrar');
        }
    }

    public function show($id){
        $classroom = Classroom::find($id);
        return view('classrooms.classroom', ['classroom' => $classroom]);
    }
}
