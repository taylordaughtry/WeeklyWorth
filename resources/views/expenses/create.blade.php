@extends('layouts.master')

@section('content')
<div class="interior__content -full">
    <h1 class="interior__title">Add an Expense</h1>
    {!! Form::open(array('route' => 'expense.store')) !!}

        {!! Form::label('company_id', 'Company', ['class' => 'label']) !!}
        {!! Form::select('company_id', array('1' => 'Middle Tennessee Utilities', '2' => 'Grove at Shadow Green'), null, ['class' => 'select']) !!}

        {!! Form::label('name', 'Expense Name', ['class' => 'label']) !!}
        {!! Form::text('name' , 'Utilities', ['class' => 'input']) !!}

        {!! Form::label('due_date', 'Date', ['class' => 'label']) !!}
        {!! Form::date('due_date' , 'Due Date', ['class' => 'input']) !!}

        {!! Form::label('description', 'Description', ['class' => 'label']) !!}
        {!! Form::text('description' , 'Utilities for the apartment', ['class' => 'input']) !!}

        {!! Form::label('amount', 'Amount', ['class' => 'label']) !!}
        {!! Form::text('amount' , '$97.43', ['class' => 'input']) !!}

        {!! Form::label('type', 'Expense Type', ['class' => 'label']) !!}
        {!! Form::select('type' , ['variable' => 'Variable', 'fixed' => 'Fixed'], null, ['class' => 'select']) !!}

        {!! Form::submit('Add Expense', ['class' => 'button']) !!}

    {!! Form::close() !!}
</div>
@stop