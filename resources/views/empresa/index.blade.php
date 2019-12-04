@extends('templates.master')


@section('conteudo-view')
	
	@if(session('success'))
		<h3>{{ session('success')['messages'] }}</h3>
	@endif

	{!! Form::open(['route' => 'empresa.store', 'method' => 'post', 'class' => 'form-padrao']) !!}
        @include('templates.formulario.input', ['label' => 'Nome', 'input' => 'nome', 'attributes' => ['placeholder' => 'Nome']])
        @include('templates.formulario.input', ['label' => 'Telefone', 'input' => 'telefone', 'attributes' => ['placeholder' =>'Telefone']])
		@include('templates.formulario.submit', ['input' => 'Cadastrar'])
	{!! Form::close() !!}

<table class="default-table">
	<thead>
		<tr>
			<th>#</th>
			<th>Nome da Empresa</th>
			<th>Telefone</th>
		</tr>
	</thead>
	<tbody>
		@foreach($empresas as $empresa)
		<tr>
			<td>{{ $empresa->id }}</td>
            <td>{{ $empresa->nome }}</td>
            <td>{{ $empresa->telefone }} </td>
			<td>
				{!! Form::open(['route'=> ['empresa.destroy', $empresa->id], 'method' => 'DELETE']) !!}
				{!! Form::submit('Remover ') !!}
                {!! Form::close() !!}
				Remover

			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection