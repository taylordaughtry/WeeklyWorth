@extends('layouts.master')

@section('content')
<!-- TODO: Add chart information for transactions from CSV bank file <div data-ref="chart"></div> -->
<div class="homepage-summary">
    <div class="default-row">
        <div class="number-block">
            <span class="number-block__caption">This Week's Worth</span>
            <h1 class="number-block__title">$2,405.29</h1>
        </div>
        <div class="number-block">
            <span class="number-block__caption">This Week's Income</span>
            <h1 class="number-block__title -credit">${{ number_format($totalIncome, 2) }}</h1>
        </div>
        <div class="number-block">
            <span class="number-block__caption">This Week's Expenses</span>
            <h1 class="number-block__title -debit">$1,320.46</h1>
        </div>
    </div>
</div>
<div class="default-row">
    <div class="column__half">
        <div class="top-expenses">
            <span class="top-expenses__title">Top Expenses</span>
            <ul class="top-expenses__list">
                <li class="top-expenses__item">
                    <span class="top-expenses__expense">Rent <span class="tag -is-fixed">Fixed</span></span>
                    <span class="top-expenses__amount">$1,200.00</span>
                </li>
                <li class="top-expenses__item">
                    <span class="top-expenses__expense">Electricity <span class="tag -is-variable">Variable</span></span>
                    <span class="top-expenses__amount">$364.20</span>
                </li>
                <li class="top-expenses__item">
                    <span class="top-expenses__expense">Internet/Cable <span class="tag -is-fixed">Fixed</span></span>
                    <span class="top-expenses__amount">$246.35</span>
                </li>
                <li class="top-expenses__item">
                    <span class="top-expenses__expense">Phone <span class="tag -is-fixed">Fixed</span></span>
                    <span class="top-expenses__amount">$23.36</span>
                </li>
                <li class="top-expenses__item">
                    <span class="top-expenses__expense">Car Loan <span class="tag -is-fixed">Fixed</span></span>
                    <span class="top-expenses__amount">$579.02</span>
                </li>
                <li class="top-expenses__item">
                    <span class="top-expenses__expense">Water <span class="tag -is-variable">Variable</span></span></span>
                    <span class="top-expenses__amount">$79.61</span>
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
            </ul>
        </div>
    </div>
</div>
@stop