@extends('layouts.app')

@section('title', 'Programs - Forward ESL')

@section('content')
    <\!-- Redirect to Curriculum page -->
    <script>window.location.href = "{{ url('/curriculum') }}";</script>
@endsection
