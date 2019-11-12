 <link rel="stylesheet"  href="{{ asset('css/stylesheet.css') }}">
@extends('templates.master')

@section('css-view')
 
@endsection


@section('js-view')
@endsection



@section('conteudo-view')


   {!!  Form::open(['route' => 'user.store' , 'method' => 'post', 'class' => 'form-padrao']) !!}
        @include('templates.formulario.input', ['label' => 'Nome' , 'input' => 'nome', 'attributes'=> ['placeholder'=> 'Nome']])
        @include('templates.formulario.input', ['label' => 'Empresa' , 'input' => 'empresa', 'attributes'=> ['placeholder'=> 'Empresa' ]])
        @include('templates.formulario.input', ['label' => 'Tipo Usuario','input' => 'tipo_user', 'attributes'=> ['placeholder'=> 'Tipo Usuario']])
        @include('templates.formulario.input', ['label' => 'email','input' => 'email', 'attributes'=>['placeholder'=>'email']])
        @include('templates.formulario.password', ['label' => 'Password' , 'input' => 'password' , 'attributes'=> ['placeholder'=> 'Senha']])
        @include('templates.formulario.submit', ['input' =>'Cadastrar'])    
    {!! Form::close() !!}
    
@endsection



