@extends('layouts.master')

@section('content')
<div class="interior__content -full">
    <h1 class="interior__title">Expenses</h1>
    <div class="top-expenses">
        <ul class="top-expenses__list">
            @foreach ($expenses as $expense)
            <li class="top-expenses__item">
                {!! Form::open(array('route' => array('expense.destroy', $expense->id), 'method' => 'delete')) !!}
                <span class="top-expenses__expense">{{ $expense->name }} <span class="tag -is-{{ $expense->type }}">{{ $expense->type }}</span></span>
                <span class="top-expenses__amount">${{ number_format($expense->amount, 2) }}</span>
                {{-- {!! Form::button( 'asdf', ['type' => 'submit', 'class' => 'delete text-danger deleteProduct','id' => 'btnDeleteProduct', 'data-id' => $expense->id ] ) !!} --}}
                {!! Form::close() !!}
            </li>
            @endforeach
        </ul>
    </div>
</div>
@stop