@extends('layouts.master')

@section('sidebar')

{{-- <h5 class="site-sidebar__heading">Recent Activity</h5>
<ul class="button-list -has-links">
	<li class="button-list__item"><a href="#" class="button-list__link -credit">$1,200.00</a></li>
	<li class="button-list__item"><a href="#" class="button-list__link -credit">$212.24</a></li>
	<li class="button-list__item"><a href="#" class="button-list__link -debit">$328.12</a></li>
	<li class="button-list__item"><a href="#" class="button-list__link -credit">$148.04</a></li>
</ul> --}}

{{-- <h5 class="site-sidebar__heading">Expenses</h5>
<ul class="button-list">
	<li class="button-list__item"><a href="{{ action('BillsController@list') }}" class="button-list__link">View Bills</a>
	<li class="button-list__item"><a href="{{ action('BillsController@create') }}" class="button-list__link">Add a Bill</a>
</ul>

<h5 class="site-sidebar__heading">Income</h5>
<ul class="button-list">
	<li class="button-list__item"><a href="{{ action('IncomesController@list') }}" class="button-list__link">View Income Sources</a>
	<li class="button-list__item"><a href="{{ action('IncomesController@create') }}" class="button-list__link">Add an Income Source</a>
</ul>

<h5 class="site-sidebar__heading">Companies</h5>
<ul class="button-list">
	<li class="button-list__item"><a href="{{ action('CompaniesController@list') }}" class="button-list__link">View Companies</a>
	<li class="button-list__item"><a href="{{ action('CompaniesController@create') }}" class="button-list__link">Add a Company</a>
</ul> --}}
@stop

@section('content')

<div class="row column-row">
	<div class="half-column">
		<h3>Income</h3>
		<table class="table -number-list">
			<thead>
				<th>Description</th>
				<th>Amount</th>
			</thead>
			<tbody>
				<tr>
					<td>Rent</td>
					<td>$1,200.00</td>
				</tr>
				<tr>
					<td>Electricity</td>
					<td>$96.48</td>
				</tr>
				<tr>
					<td>Internet/Cable</td>
					<td>$114.99</td>
				</tr>
				<tr>
					<td>Phone</td>
					<td>$45.20</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="half-column">
		<h3>Expenses</h3>
		<table class="table -number-list">
			<thead>
				<th>Description</th>
				<th>Amount</th>
			</thead>
			<tbody>
				<tr>
					<td>Rent</td>
					<td>$1,200.00</td>
				</tr>
				<tr>
					<td>Electricity</td>
					<td>$96.48</td>
				</tr>
				<tr>
					<td>Internet/Cable</td>
					<td>$114.99</td>
				</tr>
				<tr>
					<td>Phone</td>
					<td>$45.20</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>


<div class="number-block">
	<span class="number-block__info">Net Worth</span>
	<h2 class="number-block__title">$1,238.46</h2>
</div>

{{-- <h3>Bills</h3>
<ul>
@foreach ($data['bills'] as $bill)
	<li>${{ number_format($bill['amount']) }} ({{ $bill->company->name }})</li>
@endforeach
</ul>

<h3>Companies</h3>
<ul>
@foreach ($data['companies'] as $company)
	<li>{{ $company['name'] }}</li>
@endforeach
</ul>

<h3>Income Sources</h3>
<ul>
@foreach ($data['incomes'] as $income)
	<li>${{ number_format($income['amount']) }}</li>
@endforeach
</ul> --}}

@stop