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
                            <th>{{ __('NPM') }}</th>
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
                            <th>{{ __('NPM') }}</th>
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
                                <td>{{ $row->collegeStudent->nim }}</td>
                                <td>{{ $row->practicum->name }}</td>
                                <td>{{ idr($row->practicum->price) }}</td>
                                <td>
                                    @if($row->status_pembayaran == 0)
                                        Belum Lunas
                                    @elseif($row->status_pembayaran == 1)
                                        Lunas
                                    @endif
                                </td>
                                <td>
                                    @if($row->status == 0)
                                        <i class="fa fa-toggle-off"></i>
                                    @elseif($row->status == 1)
                                        <i class="fa fa-toggle-on"></i>
                                    @endif
                                </td>
                                @role('admin')
                                <td style="vertical-align: middle;">
                                    <a href="#show" rel="modal:open" class="btn btn-sm btn-icon btn-default btn-icon-only rounded-circle">
                                        <span class="btn-inner--icon"><i class="fas fa-eye"></i></span>
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
                                        <button onclick="deleteItem(this)" data-id=""
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
</div>
@endsection