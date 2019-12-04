@extends('templates.master')


@section('conteudo-view')
	
	@if(session('success'))
		<h3>{{ session('success')['messages'] }}</h3>
	@endif

    {!! Form::open(['route' => 'lead.store', 'method' => 'post', 'class' => 'form-padrao']) !!}
    
        @include('templates.formulario.input', ['label' => 'Nome', 'input' => 'nome', 'attributes' => ['placeholder' => 'Nome']])

        @include('templates.formulario.input', ['label' => 'Telefone', 'input' => 'telefone', 'attributes' => ['placeholder' =>'Telefone']])

         @include('templates.formulario.input', ['label' => 'Email', 'input' => 'email', 
        'attributes' => ['placeholder' =>'Email']])

         @include('templates.formulario.input', ['label' => 'Email', 'input' => 'cidade', 
        'attributes' => ['placeholder' =>'Cidade']])

         @include('templates.formulario.input', ['label' => 'Empresa', 'input' => 'empresa_id', 
		'attributes' => ['placeholder' =>'Empresa']])
		
		@include('templates.formulario.input', ['label' => 'Qualificação', 'input' => 'qualificado_id', 
		'attributes' => ['placeholder' =>'Qualificao']])
		
        
        
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
		@foreach($leads as $lead)
		<tr>
			<td>{{ $lead->id }}</td>
            <td>{{ $lead->nome }}</td>
            <td>{{ $lead->telefone }} </td>
			<td>
				{!! Form::open(['route'=> ['lead.destroy', $lead->id], 'method' => 'DELETE']) !!}
				{!! Form::submit('Remover ') !!}
                {!! Form::close() !!}
				Remover

			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection