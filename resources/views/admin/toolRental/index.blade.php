@extends('admin.layouts.app')
@section('title', 'Sewa Alat')

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">
                <h3 class="mb-0">{{ __('Sewa Alat') }}</h3>
                <p class="text-sm mb-0">
                    {{ __('This page for Admin') }}
                </p>
            </div>
            <table class="table table-flush" id="myTable">
                <div class="table-responsive py-4">
                    <div class="container">
                        <div class="col-md-12 text-right">
                            <a href="{{ route('excel_sewa') }}" class="btn btn-primary">Cetak Excel</a>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                    <thead class="thead-light">
                        <tr>
                            <th>{{ __('#') }}</th>
                            <th>{{ __('Golongan') }}</th>
                            <th>{{ __('Nama Penyewa') }}</th>
                            <th>{{ __('Menyewa') }}</th>
                            <th>{{ __('Sebanyak') }}</th>
                            <th>{{ __('Selama') }}</th>
                            <th>{{ __('Total Harga Sewa') }}</th>
                            @role('admin')
                            <th>{{ __('Action') }}</th>
                            @endrole
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>{{ __('#') }}</th>
                            <th>{{ __('Golongan') }}</th>
                            <th>{{ __('Nama Penyewa') }}</th>
                            <th>{{ __('Menyewa') }}</th>
                            <th>{{ __('Sebanyak') }}</th>
                            <th>{{ __('Selama') }}</th>
                            <th>{{ __('Total Harga Sewa') }}</th>
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
                        @foreach ($toolrentals as $toolrental)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $toolrental->type }}</td>
                            <td>{{ $toolrental->tenant }}</td>
                            <td>{{ $toolrental->inventaris->tool_name }}</td>
                            <td>{{ $toolrental->number_of_loan }}</td>
                            <td>{{ $toolrental->rent_of_day }} Hari</td>
                            @if ($toolrental->type == 'General')
                            <td>{{ idr($toolrental->inventaris->general_price * $toolrental->number_of_loan * $toolrental->rent_of_day) }}</td>
                            @else
                            <td>{{ idr($toolrental->inventaris->college_price * $toolrental->number_of_loan * $toolrental->rent_of_day) }}</td>
                            @endif
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
                                    <button onclick="deleteData(this)" data-id="{{ $toolrental->id }}"
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
