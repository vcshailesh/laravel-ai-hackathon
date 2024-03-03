@extends('backend.layouts.app')

@section('content')
    <p>{{ 'Welcome to ' . auth()->user()->name . ' !' }}</p>
@endsection