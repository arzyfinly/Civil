@extends('mahasiswa.layouts.app')
@section('title', 'Praktikum')

@section('banner')
<div class="banner-content mb-3">
    <div class="section">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div style="text-align: center;" class="mb-3">
                        <h4>{{__('Praktikum')}}</h4>
                    </div>
                    <table class="table table-borderless">
                        <tbody>
                            @foreach ($practicumregistrations as $prk)
                                <tr>
                                    <td class="col-sm-4" align="left">NPM</td>
                                    <td class="col-sm-1">:</td>
                                    <td class="col-sm-0" align="left">{{ $prk->collegeStudent->user->nim }}</td>
                                    <input type="text" hidden name="college_student_id" value="{{ $prk->collegeStudent->id }}">
                                </tr>
                                <tr>
                                    <td class="col-sm-1" align="left">Nama</td>
                                    <td class="col-sm-1">:</td>
                                    <td class="col-sm-0" align="left">{{ $prk->collegeStudent->first_name. " " .$prk->collegeStudent->last_name  }}</td>
                                </tr>
                                <tr>
                                    <td class="col-sm-1" align="left">Praktikum</td>
                                    <td class="col-sm-1">:</td>
                                    <td class="col-sm-0" align="left">{{ $prk->practicum->name }}</td>
                                </tr>
                                <tr>
                                    <td class="col-sm-1" align="left">Harga</td>
                                    <td class="col-sm-1">:</td>
                                    <td class="col-sm-0" align="left">{{ $prk->practicum->price }}</td>
                                </tr>
                                <tr>
                                    <td class="col-sm-1" align="left">Status Pembayaran</td>
                                    <td class="col-sm-1">:</td>
                                    <td class="col-sm-0" align="left">
                                        @if($prk->status_pembayaran == 0)
                                            Belum Lunas
                                        @elseif($prk->status_pembayaran == 1)
                                            Lunas
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-sm-1" align="left">Status Acc</td>
                                    <td class="col-sm-1">:</td>
                                    <td class="col-sm-0" align="left">
                                        @if($prk->status == 0)
                                            <i class="fa fa-toggle-off"></i>
                                        @elseif($prk->status == 1)
                                            <i class="fa fa-toggle-on"></i>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('/') }}" class="btn btn-danger">{{ __('Back') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
