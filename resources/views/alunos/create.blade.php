@extends('layouts.app')

@section('title', 'Novo aluno')

@section('content')
    <h1>Novo Aluno</h1>

    <form action="{{ route('alunos.store') }}" method="POST">
        @include('alunos._form', ['buttonText' => 'Criar aluno'])
    </form>
@endsection


