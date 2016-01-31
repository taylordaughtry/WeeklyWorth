@extends('layouts.master')

@section('content')

<p>Register for WeeklyWorth:</p>
{!! Form::open([ 'route' => 'auth.register' ]) !!}

{!! Form::label('name', 'Name:', ['class' => 'label']) !!}
{!! Form::text('name', 'John Doe', ['class' => 'input']) !!}

{!! Form::label('email', 'Email:', ['class' => 'label']) !!}
{!! Form::text('email', 'hello@example.com', ['class' => 'input']) !!}

{!! Form::label('password', 'Password:', ['class' => 'label']) !!}
{!! Form::text('password', '', ['class' => 'input']) !!}

{!! Form::label('password_confirmation', 'Password Confirmation:', ['class' => 'label']) !!}
{!! Form::text('password_confirmation', '', ['class' => 'input']) !!}

{!! Form::submit() !!}

{!! Form::close() !!}
@stop