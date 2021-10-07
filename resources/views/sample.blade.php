@extends('layouts.app')

@section('content')
Halo
@endsection

@section('page-title', 'Sample Page Title')
@section('meta-description', 'Sample Meta Description')

@section('styles')   
    @parent 
    {{-- add styles in here --}}
@endsection

@section('scripts')
    @parent
    {{-- add scripts in here --}}
@endsection