@extends('templates.master')

@section('content')
<div class="min-h-full" style="background-color: #f3f6f9">
    <div class="container mx-auto py-20">
        <div class="text-xl mb-10">Cadastro de Sala</div>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12">
                <form action="{{ isset($classroom) ? '/classrooms/'.$classroom->id : '/classrooms' }}" method="POST">
                    @csrf
                    @if (isset($classroom))
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
                                <div class="text-2xl">Dados da Sala</div>
                            </div>
                            <div class="col-span-4">
                                <div class="flex flex-col">
                                    <label for="name" class="mb-3">Nome da Sala/Turma</label>
                                    <input type="text" name="name" id="name" class="form-input" value="{{isset($classroom) ? $classroom->name : ''}}">
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
<script>
    window.onload = function() {

    }
</script>
@stop
