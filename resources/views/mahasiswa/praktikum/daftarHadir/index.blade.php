@extends('mahasiswa.layouts.app')
@section('title', 'Praktikum')
@include('sweetalert::alert')

@section('banner')
<div class="banner-content mb-3">
<form action="{{ route('praktikum.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="section">
        <div class="container">
            <div class="card">
                <div class="card-body"> 
                    <div style="text-align: center;" class="mb-3">
                        <h4>{{__('Daftar Hadir')}}</h4>
                    </div>
                        <table class="table table-borderless">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">NPM</th>
                                <th scope="col">Nama Mahasiswa</th>
                                <th scope="col">Kelompok</th>
                                <th scope="col" colspan="16">Hari Ke</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="1"></td>
                                    <td rowspan="1"></td>
                                    <td rowspan="4"></td>
                                    <td colspan="1">1</td>
                                    <td colspan="1">2</td>
                                    <td colspan="1">3</td>
                                    <td colspan="1">4</td>
                                </tr>
                                <tr>
                                    {{-- <td>{{ route('') }}</td> --}}
                                </tr>
                            </tbody>
                        </table>
                    <a href="{{route('home')}}" class="btn btn-danger">{{__('Back')}}</a>
                    <div class="form-btn justify-content-md-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

</div>
@endsection