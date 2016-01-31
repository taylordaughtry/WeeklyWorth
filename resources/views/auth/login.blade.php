@extends('layouts.master')

@section('content')

<p>Login to WeeklyWorth:</p>
{!! Form::open([ 'route' => 'auth.login' ]) !!}

{!! Form::label('name', 'Name:', ['class' => 'label']) !!}
{!! Form::text('name', 'John Doe', ['class' => 'input']) !!}

{!! Form::label('email', 'Email:', ['class' => 'label']) !!}
{!! Form::text('email', 'hello@example.com', ['class' => 'input']) !!}

{!! Form::label('password', 'Password:', ['class' => 'label']) !!}
{!! Form::text('password', '', ['class' => 'input']) !!}

{!! Form::submit() !!}

{!! Form::close() !!}
@stop