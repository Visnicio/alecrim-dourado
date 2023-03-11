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
                            <div class="col-span-2">
                                <div class="flex flex-col">
                                    <label for="age" class="mb-3">Sala <span class="text-red-800">*</span></label>
                                    <select name="classroom_id" id="classroom_id" required class="form-input bg-transparent">
                                        <option value="">Selecione uma sala</option>
                                        @foreach ($classrooms as $classroom)
                                            <option value="{{$classroom->id}}" {{ isset($student) && $student->classroom_id == $classroom->id ? 'selected="selected"' : '' }}>{{$classroom->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr class="my-10 border">
                        <div class="grid grid-cols-12 gap-5">
                            <div class="col-span-12">
                                <div class="text-2xl">Cadastro Parental</div>
                            </div>
                            <div class="col-span-4">
                                <div class="flex flex-col">
                                    <label for="mother_name" class="mb-3">Nome da Mãe</label>
                                    <input type="text" name="mother_name" id="mother_name" class="form-input" value="{{isset($student) ? $student->mother_name : ''}}">
                                </div>
                            </div>
                            <div class="col-span-4">
                                <div class="flex flex-col">
                                    <label for="mother_phone" class="mb-3">Telefone da Mãe</label>
                                    <input type="number" name="mother_phone" id="mother_phone" class="form-input" value="{{isset($student) ? $student->mother_phone : ''}}">
                                </div>
                            </div>
                            <div class="col-span-4">
                                <div class="flex flex-col">
                                    <label for="mother_email" class="mb-3">Email da Mãe</label>
                                    <input type="email" name="mother_email" id="mother_email" class="form-input" value="{{isset($student) ? $student->mother_email : ''}}">
                                </div>
                            </div>
                            <div class="col-span-4">
                                <div class="flex flex-col">
                                    <label for="father_name" class="mb-3">Nome da Pai</label>
                                    <input type="text" name="father_name" id="father_name" class="form-input" value="{{isset($student) ? $student->father_name : ''}}">
                                </div>
                            </div>
                            <div class="col-span-4">
                                <div class="flex flex-col">
                                    <label for="father_phone" class="mb-3">Telefone da Pai</label>
                                    <input type="number" name="father_phone" id="father_phone" class="form-input" value="{{isset($student) ? $student->father_phone : ''}}">
                                </div>
                            </div>
                            <div class="col-span-4">
                                <div class="flex flex-col">
                                    <label for="father_email" class="mb-3">Email da Pai</label>
                                    <input type="email" name="father_email" id="father_email" class="form-input" value="{{isset($student) ? $student->father_email : ''}}">
                                </div>
                            </div>
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
<script src=""></script>
<script>

</script>
@stop
