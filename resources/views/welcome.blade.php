@extends('layouts.app')

{{-- Customize layouts sections--}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle' , 'Welcome')

{{-- Content body:main page content --}}

@section('content_body')
     <p>Welcome to this beautiful admin panel</p>
@stop

{{--Push extra CSS--}}

@push('css')
    {{-- Add here extra stylesheets--}}
@endpush

{{-- Push extra scripts--}}
@push('js')
    <script> console.log("Hi, Im using the laravel-AdminLTE package")</script>
@endpush
