@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-title">Total Guru: {{$total_guru}}</div>
        </div>
        <div class="card">Total Siswa: {{ $total_siswa}}</div>
        <div class="card">Total Rombel: {{ $total_rombel}}</div>
    </div>
@endsection
