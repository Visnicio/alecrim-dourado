@extends('templates.master')

@section('content')
<div class="min-h-full" style="background-color: #f3f6f9">
    <div class="container mx-auto py-20">
        <div class="text-xl mb-10">Bem vindo de volta. {{$username}}!</div>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-4">
                <div class="card">
                    <div>Alunos Matriculados</div>
                </div>
            </div>
            <div class="col-span-4">
                <div class="card">
                    <div>Alunos presentes Hoje</div>
                </div>
            </div>
            <div class="col-span-4">
                <div class="card">

                </div>
            </div>
        </div>
    </div>
</div>
@stop
