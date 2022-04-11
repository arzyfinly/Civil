@extends('admin.layouts.app')
@section('title', 'Praktikum')

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">
                <h3 class="mb-0">{{ __('Praktikum') }}</h3>
                <p class="text-sm mb-0">
                    {{ __('This page for Admin') }}
                </p>
            </div>
            <div class="table-responsive py-4">
                <table class="table table-flush" id="myTable">
                    <thead class="thead-light">
                        <tr>
                            <th>{{ __('#') }}</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('NPM') }}</th>
                            <th>{{ __('Praktikum') }}</th>
                            <th>{{ __('Pembayaran') }}</th>
                            @role('admin')
                            <th>{{ __('Action') }}</th>
                            @endrole
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>{{ __('#') }}</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('NPM') }}</th>
                            <th>{{ __('Praktikum') }}</th>
                            <th>{{ __('Pembayaran') }}</th>
                            @role('admin')
                            <th>{{ __('Action') }}</th>
                            @endrole
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            function idr($salary)
                            {
                                $result = 'Rp. ' . number_format($salary, 2, ',', '.');
                                return $result;
                            }
                        @endphp
                        @foreach ($salaries as $salary)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $salary->user->username }}</td>
                                <td>{{ $salary->date }}</td>
                                <td>{{ $salary->type->name }}</td>
                                <td>{{ idr($salary->nominal) }}</td>
                                @role('admin')
                                <td style="vertical-align: middle;">
                                    {{-- <a href="{{ route('salaries.show', $salary) }}"
                                        class="btn btn-sm btn-icon btn-default btn-icon-only rounded-circle"><span
                                            class="btn-inner--icon"><i class="fas fa-eye"></i></span></a> --}}
                                    @can('salary-edit')
                                        <a href="{{ route('salaries.edit', $salary) }}"
                                            class="btn btn-sm btn-icon btn-primary btn-icon-only rounded-circle"
                                            data-toggle="tooltip" data-placement="top" title="Edit"><span
                                                class="btn-inner--icon"><i class="fas fa-pen-square"></i></span></a>
                                    @endcan
                                    @can('salary-delete')
                                        <button onclick="deleteItem(this)" data-id="{{ $salary->id }}"
                                            class="btn btn-sm btn-icon btn-youtube btn-icon-only rounded-circle"
                                            data-toggle="tooltip" data-placement="top" title="Remove">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    @endcan
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