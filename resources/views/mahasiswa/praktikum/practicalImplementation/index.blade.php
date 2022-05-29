@extends('mahasiswa.layouts.app')
@section('title', 'Praktikum')

@section('banner')
<div class="banner-content mb-3">
<form action="{{ route('pelaksanaan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="section">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div style="text-align: center;" class="mb-3">
                        <h4>{{__('Pelaksanaan Praktikum')}}</h4>
                    </div>
                    <div class="card col-md-12">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <table class="table table-borderless">
                                    @foreach ($practicum as $p)
                                        <form action="{{ route('daftarHadir.store') }}" method="post">
                                            @csrf
                                            @foreach ($practicumRegistration as $prac)
                                            <input type="text" hidden value="{{ $prac->id }}" name="practicum_registration_id">
                                            @endforeach
                                            <thead>
                                                <tr>
                                                    <th><strong>Nama Mata Kuliah</strong></th>
                                                    <th><strong>:</strong></th>
                                                    <th><strong>{{ $p->practicum->name }}</strong></th>
                                                    <th></th>
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
                                                    <td>{{ Date('l', strtotime($p->start_date)) }} - {{ Date('l', strtotime($p->end_date)) }} ( {{ $p->start_time_in_day }} - {{ $p->end_time_in_day }})</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    @if ($attendance != null)
                                                        @foreach ($attendance as $a)
                                                            @if($p->end_time_in_day >= Date('H:i:s') && $p->end_date >= Date('Y-m-d') && $a->presence_day != Date('Y-m-d') || $p->start_time_in_day == Date('H:i:s') && $p->start_date == Date('Y-m-d') && $a->presence_day != Date('Y-m-d'))
                                                                <td><input type="submit" class="btn btn-primary btn-sm" value="Presensi"></td>
                                                            @else
                                                                <td><input type="submit" class="btn btn-secondary btn-sm" value="Presensi" disabled="disabled"></td>
                                                            @endif
                                                        @endforeach
                                                    @else
                                                        @if($p->end_time_in_day >= Date('H:i:s') && $p->end_date >= Date('Y-m-d') || $p->start_time_in_day == Date('H:i:s') && $p->start_date == Date('Y-m-d'))
                                                            <td><input type="submit" class="btn btn-primary btn-sm" value="Presensi"></td>
                                                        @else
                                                            <td><input type="submit" class="btn btn-secondary btn-sm" value="Presensi" disabled="disabled"></td>
                                                        @endif
                                                    @endif
                                                </tr>
                                            </tbody>
                                        </form>
                                    @endforeach
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
