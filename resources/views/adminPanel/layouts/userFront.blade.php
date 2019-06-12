@extends('adminPanel.layouts.master')
@section('masterBody')

    @include('adminPanel.layouts.header')

    @include('adminPanel.layouts.sidebar')

@yield('body')

@endsection