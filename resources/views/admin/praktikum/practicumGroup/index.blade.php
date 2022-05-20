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
                            @if($practicumregistrations != null)
                                <select class="form-control btn btn-primary btn-sm col-md-1 kelas" name="kelas" id="kelas">
                                    <option value="0" disabled="true" class="btn btn-light" selected="true">Select Class</option>
                                    <option value="A" class="btn btn-light">Kelas A</option>
                                    <option value="B" class="btn btn-light">Kelas B</option>
                                </select>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i></button>
                            @else
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i></button>
                            @endif
                        </div>
                    </div>
                    <thead class="thead-light">
                        <tr>
                            <th>{{ __('NPM') }}</th>
                            <th>{{ __('Nama Mahasiswa') }}</th>
                            <th>{{ __('Praktikum') }}</th>
                            <th>{{ __('Kelompok') }}</th>
                            <th>{{ __('Kelas') }}</th>
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
                            <th>{{ __('Kelas') }}</th>
                            @role('admin')
                            <th>{{ __('Action') }}</th>
                            @endrole
                        </tr>
                    </tfoot>
                    <tbody id="class">
                    @if($practicumregistrations != null)
                        @foreach ($practicumregistrations as $prac )
                        <tr>
                            <td>{{ $prac->collegeStudent->user->nim }}</td>
                            <td>{{ $prac->collegeStudent->first_name }} {{ $prac->collegeStudent->last_name }}</td>
                            <td>{{ $prac->practicum->name }}</td>
                            <td>{{ $prac->group }}</td>
                            <td>{{ $prac->collegeStudent->kelas }}</td>
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
                                            <button onclick="deleteData(this)" data-id="{{ $prac->id }}"
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
                                <td></td>
                            </tr>
                        @endif
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
@if($practicumregistrations != null)
    @include('admin.praktikum.practicumGroup.scriptFindByClass')
    @include('admin.praktikum.practicumGroup.scriptDelete')
    @include('admin.praktikum.practicumGroup.scriptGetData')
@else
    @include('admin.praktikum.practicumGroup.scriptDelete')
    @include('admin.praktikum.practicumGroup.scriptGetData')
@endif
@endsection
