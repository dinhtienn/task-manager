@extends('master')

@section('css')
    <style>
        {!! file_get_contents(public_path("/css/ceo.css")) !!}
    </style>
@endsection

@section('sidebar')
    @include('ceo.sidebar')
@endsection

@section('main-content')
    @yield('main-content')
@endsection

@push('after-js')
    @stack('after-js')
@endpush
