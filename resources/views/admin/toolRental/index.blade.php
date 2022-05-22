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
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i></button>
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
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
