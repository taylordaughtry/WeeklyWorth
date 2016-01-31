@extends('layouts.master')

@section('content')
<div class="interior__content -full">
    <h1 class="interior__title">Payees</h1>
    <div class="top-expenses">
        <ul class="top-expenses__list">
            @foreach ($companies as $company)
            <li class="top-expenses__item">
                {!! Form::open(array('route' => array('company.destroy', $company->id), 'method' => 'delete')) !!}
                <span class="top-expenses__company">{{ $company->name }} <span class="tag -is-{{ $company->type }}">{{ $company->type }}</span></span>
                <span class="top-expenses__amount">${{ number_format($company->amount, 2) }}</span>
                {{-- {!! Form::button( 'asdf', ['type' => 'submit', 'class' => 'delete text-danger deleteProduct','id' => 'btnDeleteProduct', 'data-id' => $company->id ] ) !!} --}}
                {!! Form::close() !!}
            </li>
            @endforeach
        </ul>
    </div>
</div>
@stop