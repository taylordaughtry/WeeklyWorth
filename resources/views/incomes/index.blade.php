@extends('layouts.master')

@section('content')
<div class="default-row">
    <div class="interior__content">
        <h1 class="interior__title">Add an Income Source</h1>
        {!! Form::open(array('url' => 'income/create')) !!}

            {!! Form::label('company_id', 'Company') !!}
            {!! Form::select('company_id', array('L' => 'Middle Tennessee Utilities', 'S' => 'Grove at Shadow Green'), null, ['class' => 'select']) !!}

            {!! Form::label('description', 'Description') !!}
            {!! Form::text('description' , 'Utilities for the apartment', ['class' => 'input']) !!}

            {!! Form::label('amount', 'Amount') !!}
            {!! Form::text('amount' , '$97.43', ['class' => 'input']) !!}

            {!! Form::label('amount', 'Amount') !!}
            {!! Form::text('amount' , '$97.43', ['class' => 'input']) !!}

            {!! Form::submit('Add Income Source', ['class' => 'button']) !!}

        {!! Form::close() !!}
    </div>
    <div class="interior__aside">
        <div class="top-expenses">
            <span class="top-expenses__title">Top Income</span>
            <ul class="top-expenses__list">
                <li class="top-expenses__item">
                    <span class="top-expenses__expense">Paycheck <span class="tag -is-fixed">Fixed</span></span>
                    <span class="top-expenses__amount">$1,773.23</span>
                </li>
                <li class="top-expenses__item">
                    <span class="top-expenses__expense">Amazon <span class="tag -is-variable">Variable</span></span>
                    <span class="top-expenses__amount">$211.21</span>
                </li>
                <li class="top-expenses__item">
                    <span class="top-expenses__expense">Elemental <span class="tag -is-variable">Variable</span></span>
                    <span class="top-expenses__amount">$386.29</span>
                </li>
                <li class="top-expenses__item">
                    <span class="top-expenses__expense">Amazon <span class="tag -is-variable">Variable</span></span>
                    <span class="top-expenses__amount">$211.21</span>
                </li>
                <li class="top-expenses__item">
                    <span class="top-expenses__expense">Paycheck <span class="tag -is-fixed">Fixed</span></span>
                    <span class="top-expenses__amount">$1,773.23</span>
                </li>
                <li class="top-expenses__item">
                    <span class="top-expenses__expense">Elemental <span class="tag -is-variable">Variable</span></span>
                    <span class="top-expenses__amount">$386.29</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@stop