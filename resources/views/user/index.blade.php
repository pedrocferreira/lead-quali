@extends('templates.master')

@section('css-view')
@endsection

@section('js-view')
@endsection

@section('conteudo-view')

@endsection


@section('conteudo-view')
    {!! Form::open(['method' => 'post', 'class' => 'form-padrao']) !!}
        @include('template.formulario.input', ['label'=> 'Nome' , 'input' => 'nome', 'attributes'=> ['placeholder'=> 'Nome']])
        @include('template.formulario.password', ['input'=> 'password' , 'attributes'=> ['placeholder'=> 'Senha']])
        @include('template.formulario.empresa',['input'=> ''])



    {!! Form::close() !!}
    
@endsection