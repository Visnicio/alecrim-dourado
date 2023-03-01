@extends('templates.master')

@section('content')
<div class="min-h-full" style="background-color: #f3f6f9">
    <div class="container mx-auto py-20">
        <div class="text-xl mb-10">Cadastro de Aluno</div>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12">
                <form action="{{ isset($student) ? '/students/'.$student->id : '/students' }}" method="POST">
                    @csrf
                    @if (isset($student))
                        @method('PUT')
                    @endif

                    @if (session('error'))
                        <div class="flex bg-red-50 border-red-800 border-2 px-10 py-5 rounded-3xl mb-20">
                            <ul>
                                <li>{{ session('error') }}</li>
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="flex bg-green-50 border-green-800 border-2 px-10 py-5 rounded-3xl mb-20">
                            <ul>
                                <li>{{ session('success') }}</li>
                            </ul>
                        </div>

                    @endif

                    <div class="card">
                        <div class="grid grid-cols-12 gap-5">
                            <div class="col-span-12">
                                <div class="text-2xl">Dados Cadastrais</div>
                            </div>
                            <div class="col-span-4">
                                <div class="flex flex-col">
                                    <label for="name" class="mb-3">Nome do Aluno</label>
                                    <input type="text" name="name" id="name" class="form-input" value="{{isset($student) ? $student->name : ''}}">
                                </div>
                            </div>
                            <div class="col-span-2">
                                <div class="flex flex-col">
                                    <label for="age" class="mb-3">Idade</label>
                                    <input type="number" name="age" id="age" class="form-input" value="{{isset($student) ? $student->age : ''}}">
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-12-gap-5 mt-5">
                            <div class="text-2xl">Cadastro Parental</div>

                        </div>
                        <div class="grid grid-cols-12 mt-10">
                            <button type="submit" class="btn">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('scripts')
<script>
    window.onload = function() {

    }
</script>
@stop
