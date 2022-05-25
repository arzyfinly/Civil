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
                        @foreach ($toolrentals as $toolrental)
                        <tr>
                            <td>{{ $no++ }}</td>
                                <td>{{ $toolrental->type }}</td>
                                <td>{{ $toolrental->tenant }}</td>
                                <td>{{ $toolrental->inventaris->tool_name }}</td>
                                <td>{{ $toolrental->number_of_loan }}</td>
                                <td>{{ $toolrental->rent_of_day }} Hari</td>
                                @if ($toolrental->type == 'General')
                                <td>{{ $toolrental->inventaris->general_price * $toolrental->number_of_loan * $toolrental->rent_of_day }}</td>
                                @else
                                <td>{{ $toolrental->inventaris->college_price * $toolrental->number_of_loan * $toolrental->rent_of_day }}</td>
                                @endif
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
