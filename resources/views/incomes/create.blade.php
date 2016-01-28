@extends('layouts.master')

@section('sidebar')
<h5 class="site-sidebar__heading">Your Bills</h5>
<ul class="button-list">
	<li class="button-list__item"><a href="{{ action('BillsController@list') }}" class="button-list__link">View Bills</a>
	<li class="button-list__item"><a href="{{ action('BillsController@create') }}" class="button-list__link">Add a Bill</a>
</ul>

<h5 class="site-sidebar__heading">Billing Companies</h5>
<ul class="button-list">
	<li class="button-list__item"><a href="{{ action('CompaniesController@list') }}" class="button-list__link">View Companies</a>
	<li class="button-list__item"><a href="{{ action('CompaniesController@create') }}" class="button-list__link">Add a Company</a>
</ul>
@stop

@section('content')
<h1>Add an Income Source</h1>
<hr/>

{!! Form::open() !!}

	{!! Form::label('company_id', 'Company:') !!}
	{!! Form::select('company_id', $companies, null, ['class' => 'select']) !!}

	{!! Form::label('pay_day', 'Pay Day:') !!}
	{!! Form::date('pay_day', null, ['class' => 'input']) !!}

	{!! Form::label('description', 'Description:') !!}
	{!! Form::textarea('description', null, ['class' => 'textarea']) !!}

	{!! Form::label('amount', 'Amount:') !!}
	{!! Form::number('amount', null, ['class' => 'input']) !!}

	{!! Form::submit('Add Bill') !!}

{!! Form::close() !!}

@stop