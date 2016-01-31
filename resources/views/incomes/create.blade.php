@extends('layouts.master')

@section('content')
<div class="interior__content -full">
    <h1 class="interior__title">Add an Income Source</h1>
    <p>Income sources can be your paycheck, affiliate earnings, advertising revenue—anything that brings income to your account. Add it here and WeeklyWorth will count it.</p>
    {!! Form::open(array('route' => 'income.store')) !!}

        {!! Form::label('company_id', 'Company', ['class' => 'label']) !!}
        {!! Form::select('company_id', $companies, null, ['class' => 'select']) !!}

        {!! Form::label('name', 'Source Name', ['class' => 'label']) !!}
        {!! Form::text('name' , 'Amazon Earnings', ['class' => 'input']) !!}

        {!! Form::label('pay_day', 'Date', ['class' => 'label']) !!}
        {!! Form::date('pay_day' , 'Pay Date', ['class' => 'input']) !!}

        {!! Form::label('description', 'Description', ['class' => 'label']) !!}
        {!! Form::text('description' , 'Utilities for the apartment', ['class' => 'input']) !!}

        {!! Form::label('amount', 'Amount', ['class' => 'label']) !!}
        {!! Form::text('amount' , '$97.43', ['class' => 'input']) !!}

        {!! Form::label('type', 'Income Type', ['class' => 'label']) !!}
        {!! Form::select('type' , ['variable' => 'Variable', 'fixed' => 'Fixed'], null, ['class' => 'select']) !!}

        {!! Form::submit('Add Income Source', ['class' => 'button']) !!}

    {!! Form::close() !!}
</div>
@stop