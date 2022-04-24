@extends('admin.layouts.app')
@section('title', 'Praktikum')

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">
                <h3 class="mb-0">{{ __('Data Mahasiswa') }}</h3>
                <p class="text-sm mb-0">
                    {{ __('This page for Admin') }}
                </p>
            </div>
            @if($practicumRegistration != null)
                <table class="table table-flush" id="myTable">
                    <div class="table-responsive py-4">
                        <thead class="thead-light">
                            <tr>
                                <th>{{ __('NPM') }}</th>
                                <th>{{ __('Nama Mahasiswa') }}</th>
                                <th>{{ __('Jenis Kelamin') }}</th>
                                <th>{{ __('Praktikum') }}</th>
                                @role('admin')
                                <th>{{ __('Action') }}</th>
                                @endrole
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>{{ __('NPM') }}</th>
                                <th>{{ __('Nama Mahasiswa') }}</th>
                                <th>{{ __('Jenis Kelamin') }}</th>
                                <th>{{ __('Praktikum') }}</th>
                                @role('admin')
                                <th>{{ __('Action') }}</th>
                                @endrole
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($students as $row)
                                <tr>
                                    <td>{{ $row->nim }}</td>
                                    <td>{{ $row->first_name }} {{ $row->last_name }}</td>
                                    <td>{{ $row->gender }}</td>
                                    <td>{{ $p->name }}</td>
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
                        </tbody>
                    </table>
                @else
                    <table class="table table-flush" id="myTable">
                        <div class="table-responsive py-4">
                            <thead class="thead-light">
                                <tr>
                                    <th>{{ __('NPM') }}</th>
                                    <th>{{ __('Nama Mahasiswa') }}</th>
                                    <th>{{ __('Jenis Kelamin') }}</th>
                                    <th>{{ __('Praktikum') }}</th>
                                    @role('admin')
                                    <th>{{ __('Action') }}</th>
                                    @endrole
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>{{ __('NPM') }}</th>
                                    <th>{{ __('Nama Mahasiswa') }}</th>
                                    <th>{{ __('Jenis Kelamin') }}</th>
                                    <th>{{ __('Praktikum') }}</th>
                                    @role('admin')
                                    <th>{{ __('Action') }}</th>
                                    @endrole
                                </tr>
                            </tfoot>
                            <tbody>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection