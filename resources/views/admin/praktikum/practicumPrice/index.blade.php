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
                            <a href="{{ route('inventaris.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>
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
                        @if($practicum != null)
                        @foreach ($practicum as $row)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->price }}</td>
                                @role('admin')
                                <td style="vertical-align: middle;">
                                    <a href=""
                                        class="btn btn-sm btn-icon btn-default btn-icon-only rounded-circle"><span
                                            class="btn-inner--icon"><i class="fas fa-eye"></i></span></a>
                                    {{-- @can('salary-edit') --}}
                                        <a href=""
                                            class="btn btn-sm btn-icon btn-primary btn-icon-only rounded-circle"
                                            data-toggle="tooltip" data-placement="top" title="Edit"><span
                                                class="btn-inner--icon"><i class="fas fa-pen-square"></i></span></a>
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
                        @else
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection