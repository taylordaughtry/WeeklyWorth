@extends('layouts.master')

@section('content')
<!-- TODO: Add chart information for transactions from CSV bank file <div data-ref="chart"></div> -->
<div class="homepage-summary">
    <div class="default-row">
        <div class="number-block">
            <span class="number-block__caption">This Week's Worth</span>
            <h1 class="number-block__title">${{ number_format($weeklyWorth, 2) }}</h1>
        </div>
        <div class="number-block">
            <span class="number-block__caption">This Week's Income</span>
            <h1 class="number-block__title -credit">${{ number_format($totalIncome, 2) }}</h1>
        </div>
        <div class="number-block">
            <span class="number-block__caption">This Week's Expenses</span>
            <h1 class="number-block__title -debit">${{ number_format($totalExpenses, 2) }}</h1>
        </div>
    </div>
</div>
<div class="default-row">
    <div class="column__half">
        <div class="top-expenses">
            <span class="top-expenses__title">Top Expenses</span>
            <ul class="top-expenses__list">
                @foreach ($expenses as $expense)
                <li class="top-expenses__item">
                    <span class="top-expenses__expense">{{ $expense->name }} <span class="tag -is-{{ $expense->type }}">{{ $expense->type }}</span></span>
                    <span class="top-expenses__amount">${{ number_format($expense->amount, 2) }}</span>
                </li>
                @endforeach
                <li class="top-expenses__item -total">
                    <span class="top-expenses__expense">Total Expenses:</span>
                    <span class="top-expenses__amount">${{ number_format($totalExpenses * 4, 2) }}</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="column__half">
        <div class="top-expenses">
            <span class="top-expenses__title">Top Income</span>
            <ul class="top-expenses__list">
                @foreach ($incomes as $income)
                <li class="top-expenses__item">
                    <span class="top-expenses__expense">{{ $income->name }} <span class="tag -is-{{ $income->type }}">{{ $income->type }}</span></span>
                    <span class="top-expenses__amount">${{ number_format($income->amount, 2) }}</span>
                </li>
                @endforeach
                <li class="top-expenses__item -total">
                    <span class="top-expenses__expense">Total Expenses:</span>
                    <span class="top-expenses__amount">${{ number_format($totalIncome * 4, 2) }}</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@stop