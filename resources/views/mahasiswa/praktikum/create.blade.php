@extends('mahasiswa.layouts.app')
@section('title', 'Praktikum')
@include('sweetalert::alert')

@section('content')
<div style="text-align: center;">
    <h4>Pendaftaran Praktikum</h4>
</div>
<form action="{{ route('praktikum.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('mahasiswa.practicum.formCreate')
</form>

@endsection