@extends('mahasiswa.layouts.app')
@section('title', 'Praktikum')
@include('sweetalert::alert')

@section('banner')
<div class="banner-content mb-12">
<form action="{{ route('praktikum.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="section">
        <div class="container">
            <div class="card">
                <div class="card-body"> 
                    <div style="text-align: center;" class="mb-3">
                        <h4>{{__('Daftar Hadir')}}</h4>
                    </div>
                    <div class="card col-md-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th><strong>Judul Matkul</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>NPM</td>
                                            <td>:</td>
                                            <td>2100000212</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Asprak</td>
                                            <td>:</td>
                                            <td>Asprak Nama</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Jadwal</td>
                                            <td>:</td>
                                            <td>Senin(13.10 - 14.50)</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Presensi Dosen Terakhir</td>
                                            <td>:</td>
                                            <td>Senin, 10 maret 2022 - 13:21:48</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="button" class="btn btn-primary" value="Presensi" disabled></td>
                                        </tr>
                                    </tbody>
                                </table>                                   
                            </li>
                        </ul>
                    </div>
                    <div class="card col-md-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th>
                                                <h4><strong>Catatan</strong></h4>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <textarea name="catatan" rows="2" cols="56" disabled placeholder="Catatan"></textarea>
                                            </td>
                                        </tr>
                                    </tbody>
                                </div>
                                </table>
                            </li>
                        </ul>
                    </div>
                    <div class="card col-md-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th>
                                                <h4><strong>History</strong></h4>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </div>
                                </table>
                            </li>
                        </ul>
                    </div>
                    <a href="{{route('home')}}" class="btn btn-danger">{{__('Back')}}</a>
                    <div class="form-btn justify-content-md-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

</div>
@endsection