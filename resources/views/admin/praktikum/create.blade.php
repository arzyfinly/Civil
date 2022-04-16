@extends('../../layouts.pendaftaran-layout')
@section('title', 'Praktikum')
@include('sweetalert::alert')

@section('content')
<div class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <div class="text-center">
                        <h4>Pendaftaran Praktikum</h4>
                    </div>
                    <form action="{{ route('praktikum.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>NPM</td>
                                    <td>:</td>
                                    <td>201023</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>ashd</td>
                                </tr>
                                <tr>
                                    <td>Praktikum</td>
                                    <td>:</td>
                                    <td>sipil</td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>:</td>
                                    <td>29990</td>
                                </tr>
                            </tbody>
                        </table>
                        @include('mahasiswa\praktikum\formCreate')
                        <div class="col-md-5">
                            <div class="form-btn">
                                <a type="submit" href="{{ route('praktikum') }}" class="btn btn-danger">Back</a>
                                <button class="btn btn-primary" type="submit">{{ __('Tambah') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection