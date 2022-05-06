@extends('admin.layouts.app')
@section('title', 'Praktikum')

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">
                <h3 class="mb-0">{{ __('Kelompok') }}</h3>
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
                            <th>{{ __('NPM') }}</th>
                            <th>{{ __('Nama Mahasiswa') }}</th>
                            <th>{{ __('Praktikum') }}</th>
                            <th>{{ __('Kelompok') }}</th>
                            @role('admin')
                            <th>{{ __('Action') }}</th>
                            @endrole
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>{{ __('Npm') }}</th>
                            <th>{{ __('Nama Mahasiswa') }}</th>
                            <th>{{ __('Praktikum') }}</th>
                            <th>{{ __('Kelompok') }}</th>
                            @role('admin')
                            <th>{{ __('Action') }}</th>
                            @endrole
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($practicumregistrations as $row)
                            <tr>
                                <td>{{ $row->collegeStudent->nim }}</td>
                                <td>{{ $row->collegeStudent->first_name }} {{ $row->collegeStudent->last_name }}</td>
                                <td>{{ $row->practicum->name }}</td>
                                <td>{{ $row->group }}</td>
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
                                    <button onclick="deleteData(this)" data-id="{{ $row->id }}"
                                        class="btn btn-sm btn-icon btn-youtube btn-icon-only rounded-circle"
                                        data-toggle="tooltip" data-placement="top" title="Remove">
                                        <i class="fas fa-trash"></i>
                                    </button>
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
                    @include('admin.praktikum.practicumGroup.create')
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.praktikum.practicumGroup.scriptGetData')
@include('admin.praktikum.practicumGroup.scriptDelete')
@endsection