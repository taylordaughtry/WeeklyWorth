@extends('layouts.master')

@section('content')
<div class="interior__content -full">
    <h1 class="interior__title">Add a Payee</h1>
    {!! Form::open(array('route' => 'company.store')) !!}

        {!! Form::label('name', 'Name', ['class' => 'label']) !!}
        {!! Form::text('name' , 'Company XYZ', ['class' => 'input']) !!}

        {!! Form::submit('Add Payee', ['class' => 'button']) !!}

    {!! Form::close() !!}
</div>
@stop