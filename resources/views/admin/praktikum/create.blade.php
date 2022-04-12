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
                                    <td class="col-sm-2">NPM</td>
                                    <td class="col-sm-1">:</td>
                                    <td class="col-sm-0">201023</td>
                                </tr>
                                <tr>
                                    <td class="col-sm-1">Nama</td>
                                    <td class="col-sm-1">:</td>
                                    <td class="col-sm-0">ashd</td>
                                </tr>
                                <tr>
                                    <td class="col-sm-1">Praktikum</td>
                                    <td class="col-sm-1">:</td>
                                    <td class="col-sm-0">sipil</td>
                                </tr>
                                <tr>
                                    <td class="col-sm-1">Harga</td>
                                    <td class="col-sm-1">:</td>
                                    <td class="col-sm-0">29990</td>
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