@extends('master')

@section('title')
    <title>Nhân viên</title>
@endsection

@section('css')
    <style>
        {!! file_get_contents(public_path("/css/employee.css")) !!}
    </style>
@endsection

@section('sidebar')
    @include('employee.sidebar')
@endsection

@section('main-content')
    @yield('main-content')
@endsection

@push('after-js')
    <script>
        const url = window.location.href;
        if (url.includes('job')) {
            $('.job-link').addClass('active');
        } else if (url.includes('homepage')) {
            $('.homepage-link').addClass('active');
        } else if (url.includes('punish')) {
            $('.punish-link').addClass('active');
        } else if (url.includes('kpi')) {
            $('.kpi-link').addClass('active');
        }
    </script>
    @stack('after-js')
@endpush
