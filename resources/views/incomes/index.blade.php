@extends('layouts.master')

@section('content')
<div class="interior__content -full">
    <h1 class="interior__title">Income Sources</h1>
    <div class="top-expenses">
        <ul class="top-expenses__list">
            @foreach ($incomes as $income)
            <li class="top-expenses__item">
                {!! Form::open(array('route' => array('income.destroy', $income->id), 'method' => 'delete')) !!}
                <span class="top-expenses__expense">{{ $income->name }} <span class="tag -is-{{ $income->type }}">{{ $income->type }}</span></span>
                <span class="top-expenses__amount">${{ number_format($income->amount, 2) }}</span>
                {!! Form::close() !!}
            </li>
            @endforeach
        </ul>
    </div>
</div>
@stop