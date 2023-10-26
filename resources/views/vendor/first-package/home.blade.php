@extends('first-package::layout')

@section('content')
    <main>
        <h1>{{ $message }}</h1>
        <p> Translation: {{ trans('first-package::message.welcome') }}</p>
    </main>
@endsection
