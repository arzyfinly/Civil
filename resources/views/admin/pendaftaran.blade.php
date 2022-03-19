@extends('layouts.nav')

@section('title', 'Praktikum')

@section('header','Praktikum')

@section('content')
<div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pendaftar Praktikum</h4>
                <h6 class="card-subtitle"><code>Respon para pendaftar<code></h6>
                <div class="table-responsive">
                    <table class="table user-table no-wrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">NPM</th>
                                <th class="border-top-0">Nama</th>
                                <th class="border-top-0">No. HP</th>
                                <th class="border-top-0">Praktikum</th>
                                <th class="border-top-0">Status Bayar</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2103191213</td>
                                <td>Muhammad Bagus Raga Maulidi</td>
                                <td>081913678701</td>
                                <td>Bahan</td>
                                <td>Lunas</td>
                                <td><button> ACC </button></td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
