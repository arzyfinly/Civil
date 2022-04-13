@extends('mahasiswa.layouts.app')
@section('title', 'Praktikum')
@include('sweetalert::alert')

@section('banner')
<div class="banner-content mb-3">
<form action="{{ route('praktikum.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="section">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="card">
                        <div class="card-body"> 
                            <div style="text-align: center;" class="mb-3">
                                <h4>{{__('Pendaftaran Praktikum')}}</h4>
                            </div>
                            @include('mahasiswa.praktikum.pendaftaranPraktikum.formCreate')
                                <div class="form-btn justify-content-md-center">
                                    <button class="btn btn-primary" type="submit">{{ __('Daftar') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</form>

</div>
@endsection