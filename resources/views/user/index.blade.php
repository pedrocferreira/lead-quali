 <link rel="stylesheet"  href="{{ asset('css/stylesheet.css') }}">
@extends('templates.master')

@section('css-view')
 
@endsection


@section('js-view')

@endsection

 






@section('conteudo-view')
 @if(session('sucess'))
    <h3>{{ session('success')['messages'] }}</h3>
 @endif


   {!!  Form::open(['route' => 'user.store' , 'method' => 'post', 'class' => 'form-padrao']) !!}
        @include('templates.formulario.input', ['label' => 'Nome' , 'input' => 'nome', 'attributes'=> ['placeholder'=> 'Nome']])
        @include('templates.formulario.input', ['label' => 'Empresa' , 'input' => 'empresa_id', 'attributes'=> ['placeholder'=> 'Empresa' ]])
        @include('templates.formulario.input', ['label' => 'Tipo Usuario','input' => 'tipo_user', 'attributes'=> ['placeholder'=> 'Tipo Usuario']])
        @include('templates.formulario.input', ['label' => 'email','input' => 'email', 'attributes'=>['placeholder'=>'email']])
        @include('templates.formulario.input', ['label' => 'login','input' => 'login', 'attributes'=>['placeholder'=>'Login']])
        @include('templates.formulario.password', ['label' => 'Password' , 'input' => 'password' , 'attributes'=> ['placeholder'=> 'Senha']])
        @include('templates.formulario.submit', ['input' =>'Cadastrar'])    
    {!! Form::close() !!}

 <table class="default-table">
		<thead>
				<td>#</td>
				<td>Nome</td>
				<td>Empresa</td>
				<td>Tipo de User</td>
				<td>E-mail</td>
				<td>login</td>
			</tr>
		</thead>
		<tbody>
            @foreach ($users as $user)
			<tr>
            <td>{{$user->id}}</td>
				<td>{{$user->nome}}</td>
				<td>{{$user->empresa_id}}</td>
				<td>{{$user->tipo_user}}</td>
				<td>{{$user->email}}</td>
                <td>{{$user->login}}</td>
                <td>
                    {!! Form::open (['route' => ['user.destroy',$user->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Remover ') !!}
                    {!! Form::close() !!}
                    Remover
                </td>
			</tr>
            @endforeach
		</tbody>
	</table>

    
@endsection
 



 
