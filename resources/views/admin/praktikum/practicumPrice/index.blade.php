@extends('admin.layouts.app')
@section('title', 'Praktikum')

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">
                <h3 class="mb-0">{{ __('Harga Praktikum') }}</h3>
                <p class="text-sm mb-0">
                    {{ __('This page for Admin') }}
                </p>
            </div>
            <table class="table table-flush" id="myTable">
                <div class="table-responsive py-4">
                    <div class="container">
                        <div class="col-md-12 text-right">
                            <a href="{{ route('excel_price') }}" class="btn btn-primary">Cetak Excel</a>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                    <thead class="thead-light">
                        <tr>
                            <th>{{ __('#') }}</th>
                            <th>{{ __('Nama Praktikum') }}</th>
                            <th>{{ __('Harga') }}</th>
                            @role('admin')
                            <th>{{ __('Action') }}</th>
                            @endrole
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>{{ __('#') }}</th>
                            <th>{{ __('Nama Praktikum') }}</th>
                            <th>{{ __('Harga') }}</th>
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
                        @foreach ($practicum as $row)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ idr($row->price) }}</td>
                                @role('admin')
                                <td style="vertical-align: middle;">
                                    {{-- @can('salary-edit') --}}
                                        <a href="{{ route('hargaPraktikum.edit', $row->id) }}" class="btn btn-sm btn-icon btn-primary btn-icon-only rounded-circle"
                                            data-toggle="tooltip" data-placement="top" title="Edit"><span class="btn-inner--icon">
                                                <i class="fas fa-pen-square"></i></span></a>
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
    </div>
    <div class="modal fade" style="background: none" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius: 15px">
                <div class="modal-body">
                    @include('admin.praktikum.practicumPrice.create')
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.praktikum.practicumPrice.scriptDelete')
@endsection
