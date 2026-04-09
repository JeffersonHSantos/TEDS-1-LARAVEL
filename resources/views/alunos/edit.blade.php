@extends('layouts.app')

@section('title', 'Editar aluno')

@section('content')
    <h1>Editar Aluno</h1>

    <form action="{{ route('alunos.update', $aluno) }}" method="POST">
        @method('PUT')
        @include('alunos._form', ['buttonText' => 'Salvar alteracoes'])
    </form>
@endsection
