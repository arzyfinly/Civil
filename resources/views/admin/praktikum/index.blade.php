@extends('admin.layouts.app')
@section('title', 'Praktikum')

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">
                <h3 class="mb-0">{{ __('Pendaftaran Praktikum') }}</h3>
                <p class="text-sm mb-0">
                    {{ __('This page for Admin') }}
                </p>
            </div>
            <table class="table table-flush" id="myTable">
                <div class="table-responsive py-4">
                    <div class="container">
                        <div class="col-md-12 text-right">
                            <a href="{{ route('praktikum.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <thead class="thead-light">
                        <tr>
                            <th>{{ __('#') }}</th>
                            <th>{{ __('Nama') }}</th>
                            <th>{{ __('NIM') }}</th>
                            <th>{{ __('Praktikum') }}</th>
                            <th>{{ __('Harga') }}</th>
                            <th>{{ __('Status Pembayaran') }}</th>
                            <th>{{ __('Status Acc') }}</th>
                            @role('admin')
                            <th>{{ __('Action') }}</th>
                            @endrole
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>{{ __('#') }}</th>
                            <th>{{ __('Nama') }}</th>
                            <th>{{ __('NIM') }}</th>
                            <th>{{ __('Praktikum') }}</th>
                            <th>{{ __('Harga') }}</th>
                            <th>{{ __('Status Pembayaran') }}</th>
                            <th>{{ __('Status Acc') }}</th>
                            @role('admin')
                            <th>{{ __('Action') }}</th>
                            @endrole
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            function idr($pembayaran)
                            {
                                $result = 'Rp. ' . number_format($pembayaran, 2, ',', '.');
                                return $result;
                            }
                        @endphp
                        @foreach ($practicumregistrations as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->collegeStudent->first_name. " " .$row->collegeStudent->last_name }}</td>
                                <td>{{ $row->collegeStudent->user->nim }}</td>
                                <td>{{ $row->practicum->name }}</td>
                                <td>{{ idr($row->practicum->price) }}</td>
                                <td>
                                    @if($row->status_pembayaran == 0)
                                        <div class="col-md-12 btn btn-sm btn-outline-danger rounded-pill">
                                            Belum Lunas
                                        </div>
                                    @elseif($row->status_pembayaran == 1)
                                        <div class="col-md-12 btn btn-outline-success rounded-pill">
                                            Lunas
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    @if($row->status == 0)
                                        <div class="col-md-12 btn btn-outline-danger rounded-pill">
                                            <i class="fa fa-toggle-off"></i>
                                        </div>
                                    @elseif($row->status == 1)
                                        <div class="col-md-12 btn btn-outline-success rounded-pill">
                                            <i class="fa fa-toggle-on"></i>
                                        </div>
                                    @endif
                                </td>
                                @role('admin')
                                <td style="vertical-align: middle;">
                                    <a href="#show" rel="modal:open" class="btn btn-sm btn-icon btn-default btn-icon-only rounded-circle" data-toggle="modal" data-target="#exampleModal">
                                        <span class="btn-inner--icon"><i class="fas fa-cogs"></i></span>
                                    </a>
                                    <div id="show" class="modal">
                                        <p>Thanks for clicking. That felt good.</p>
                                        <a href="#" rel="modal:close">Close</a>
                                    </div>
                                    {{-- @can('salary-edit') --}}
                                    <a href=""
                                            class="btn btn-sm btn-icon btn-primary btn-icon-only rounded-circle"
                                            data-toggle="tooltip" data-placement="top" title="Edit"><span
                                                class="btn-inner--icon"><i class="fas fa-pen-square"></i></span>
                                    </a>
                                    {{-- @endcan
                                    @can('salary-delete') --}}
                                        <button onclick="deleteData(this)" data-id="{{ $row->id }}"
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
        <div class="modal fade" style="background: none" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="border-radius: 15px">
                    <div class="modal-body">
                        <div style="text-align: center;">
                            <h4>Edit Data</h4>
                        </div>
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-4" align="left"><label> Status Pembayaran </label></td>
                                        <td class="col-sm-1">:</td>
                                        <td class="col-sm-0" align="left">
                                            <select name="status_pembayaran" class="form-control practicum">
                                                <option disabled="true" selected="true">Pilih Status Pembayaran</option>
                                                <option value="0">Belum Lunas</option>
                                                <option value="1">Lunas</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-1" align="left"><label> Status Acc </label></td>
                                        <td class="col-sm-1">:</td>
                                        <td class="col-sm-0" align="left">
                                            <select name="status" class="form-control practicum">
                                                <option disabled="true" selected="true">Pilih Status Acc</option>
                                                <option value="0">Belum Acc</option>
                                                <option value="1">Acc</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-primary">Save</button>
                            &nbsp;
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.praktikum.scriptDelete')
@endsection
