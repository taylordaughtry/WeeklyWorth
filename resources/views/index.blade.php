@extends('layouts.master')

@section('content')
<div class="homepage-summary">
    <div class="default-row">
        <div class="number-block">
            <span class="number-block__caption">This Week's Worth</span>
            <h1 class="number-block__title">$2,405.29</h1>
        </div>
        <div class="number-block">
            <span class="number-block__caption">This Week's Income</span>
            <h1 class="number-block__title -credit">$1,980.67</h1>
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
            </ul>
        </div>
    </div>
</div>
@stop