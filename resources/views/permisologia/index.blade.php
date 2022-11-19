@extends('layouts/app')
@section('css')
    {{-- <link rel="stylesheet" href="{{asset('css/boton_file.css')}}"> --}}
@endsection
@section('body')
    @livewire('permisologia')
@endsection
@push('js')
    {{-- <script src="{{ asset('js/producto.js') }}"></script> --}}
@endpush
