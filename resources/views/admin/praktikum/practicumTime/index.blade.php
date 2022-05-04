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
                            <a href="{{ route('inventaris.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <thead class="thead-light">
                        <tr>
                            <th>{{ __('#') }}</th>
                            <th>{{ __('Nama Praktikum') }}</th>
                            <th>{{ __('Waktu Mulai') }}</th>
                            <th>{{ __('Waktu Berakhir') }}</th>
                            <th>{{ __('Periode') }}</th>
                            @role('admin')
                            <th>{{ __('Action') }}</th>
                            @endrole
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>{{ __('#') }}</th>
                            <th>{{ __('Nama Praktikum') }}</th>
                            <th>{{ __('Waktu Mulai') }}</th>
                            <th>{{ __('Waktu Berakhir') }}</th>
                            <th>{{ __('Periode') }}</th>
                            @role('admin')
                            <th>{{ __('Action') }}</th>
                            @endrole
                        </tr>
                    </tfoot>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
