@extends('admin.layouts.app')
@section('title', 'Praktikum')

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">
                <h3 class="mb-0">{{ __('Waktu Praktikum') }}</h3>
                <p class="text-sm mb-0">
                    {{ __('This page for Admin') }}
                </p>
            </div>
            <table class="table table-flush" id="myTable">
                <div class="table-responsive py-4">
                    <div class="container">
                        <div class="col-md-12 text-right">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                    <thead class="thead-light">
                        <tr>
                            <th>{{ __('#') }}</th>
                            <th>{{ __('Nama Praktikum') }}</th>
                            <th>{{ __('Waktu Mulai') }}</th>
                            <th>{{ __('Waktu Berakhir') }}</th>
                            <th>{{ __('Tanggal Mulai') }}</th>
                            <th>{{ __('Tanggal Berakhir') }}</th>
                            <th>{{ __('Kelas') }}</th>
                            <th>{{ __('Tahun') }}</th>
                            @role('admin')
                            <th>{{ __('Action') }}</th>
                            @endrole
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>{{ __('#') }}</th>
                            <th>{{ __('Nama Praktikum') }}</th>
                            <th>{{ __('Waktu Mulai') }}</th>
                            <th>{{ __('Waktu Berakhir') }}</th>
                            <th>{{ __('Tanggal Mulai') }}</th>
                            <th>{{ __('Tanggal Berakhir') }}</th>
                            <th>{{ __('Kelas') }}</th>
                            <th>{{ __('Tahun') }}</th>
                            @role('admin')
                            <th>{{ __('Action') }}</th>
                            @endrole
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($practicumTime as $pTime)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pTime->practicum->name }}</td>
                                <td>{{ $pTime->start_time_in_day }}</td>
                                <td>{{ $pTime->end_time_in_day }}</td>
                                <td>{{ $pTime->start_date }}</td>
                                <td>{{ $pTime->end_date }}</td>
                                <td>{{ $pTime->kelas }}</td>
                                <td>{{ $pTime->tahun }}</td>
                                @role('admin')
                                <td style="vertical-align: middle;">
                                    <a href=""
                                        class="btn btn-sm btn-icon btn-default btn-icon-only rounded-circle"><span
                                            class="btn-inner--icon"><i class="fas fa-eye"></i></span></a>
                                    {{-- @can('salary-edit') --}}
                                    <a href="{{ route('practicumTime.edit', $pTime->id) }}"
                                        class="btn btn-sm btn-icon btn-primary btn-icon-only rounded-circle"
                                        data-toggle="tooltip" data-placement="top" title="Edit"><span
                                            class="btn-inner--icon"><i class="fas fa-pen-square"></i></span>
                                    </a>
                                    {{-- @endcan
                                    @can('salary-delete') --}}
                                        <button onclick="deleteData(this)" data-id="{{ $pTime->id }}"
                                            class="btn btn-sm btn-icon btn-youtube btn-icon-only rounded-circle"
                                            data-toggle="tooltip" data-placement="top" title="Remove">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    {{-- @endcan --}}
                                </td>
                                @endrole
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" style="background: none" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius: 15px">
                <div class="modal-body">
                    @include('admin.praktikum.practicumTime.create')
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.praktikum.practicumTime.scriptDelete')
@endsection
