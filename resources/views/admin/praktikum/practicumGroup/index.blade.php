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
<<<<<<< HEAD
                    <tbody>
                        @if($practicumregistrations != null)
                        @foreach ($practicumregistrations as $prac)
                            <?php
                                $collegeStudent = App\Models\CollegeStudent::where(['id'=>$prac->college_student_id])->get()->all();
                                $practicums = App\Models\Practicum::where(['id'=>$prac->practicum_id])->get()->all();
                                $user = App\Models\User::all();
                            ?>
                            @foreach($collegeStudent as $cS)
                                @foreach($practicums as $p)
                                    <tr>
                                        <td>{{ $cS->user->nim }}</td>
                                        <td>{{ $cS->first_name }} {{ $cS->last_name }}</td>
                                        <td>{{ $p->name }}</td>
                                        <td>{{ $prac->group }}</td>
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
=======
                    <tbody>  
                        @foreach ($practicumregistrations as $prac )
                        <tr>
                            <td>{{ $prac->collegeStudent->user->nim }}</td>
                            <td>{{ $prac->collegeStudent->first_name }} {{ $prac->collegeStudent->last_name }}</td>
                            <td>{{ $prac->practicum->name }}</td>
                            <td>{{ $prac->group }}</td>
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
>>>>>>> 5a9648ad9dc57db398ed597a72fcb7f173f510e3
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
@include('admin.praktikum.practicumGroup.scriptDelete')
@include('admin.praktikum.practicumGroup.scriptGetData')
@endsection
