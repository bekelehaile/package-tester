@extends('first-package::layout')

@section('content')
    <main>
        <h1>{{ $message }}</h1>
        <p> Translation: {{ trans('first-package::message.welcome') }}</p>
        <p>json translation {{ __('salutation') }}</p>
    </main>
@endsection
