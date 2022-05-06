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
                            @foreach ($user as $u)
                                @foreach ($collegestudent as $row)
                                <tr>
                                    <td class="col-sm-4" align="left">NPM</td>
                                    <td class="col-sm-1">:</td>
                                    <td class="col-sm-0" align="left">{{ $u->nim }}</td>
                                    <input type="text" hidden name="college_student_id" value="{{ $row->i }}">
                                </tr>
                                <tr>
                                    <td class="col-sm-1" align="left">Nama</td>
                                    <td class="col-sm-1">:</td>
                                    <td class="col-sm-0" align="left">{{ $row->first_name. " " .$row->last_name  }}</td>
                                @endforeach
                            @endforeach
                            </tr>
                            <tr>
                                <td class="col-sm-1" align="left">Praktikum</td>
                                <td class="col-sm-1">:</td>
                                <td class="col-sm-0" align="left">{{ $prk->name }}</td>
                            </tr>
                            <tr>
                                <td class="col-sm-1" align="left">Harga</td>
                                <td class="col-sm-1">:</td>
                                <td class="col-sm-0" align="left">{{ $prk->price }}</td>
                            </tr>
                            <tr>
                                <td class="col-sm-1" align="left">Status Pembayaran</td>
                                <td class="col-sm-1">:</td>
                                <td class="col-sm-0" align="left">
                                    @if($prak->status_pembayaran == 0)
                                        Belum Lunas
                                    @elseif($prak->status_pembayaran == 1)
                                        Lunas
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="col-sm-1" align="left">Status Acc</td>
                                <td class="col-sm-1">:</td>
                                <td class="col-sm-0" align="left">
                                    @if($prak->status == 0)
                                        <i class="fa fa-toggle-off"></i>
                                    @elseif($prak->status == 1)
                                        <i class="fa fa-toggle-on"></i>
                                    @endif
                                </td>
                            </tr>
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
