@extends('admin.layouts.app')
@section('title', 'Praktikum')

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">
                <h3 class="mb-0">{{ __('Edit Inventaris') }}</h3>
                <p class="text-sm mb-0">
                    {{ __('This page for Admin') }}
                </p>
            </div>
            <form action="{{ route('kelompok.update', $practicumGroup->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                @include('admin.praktikum.practicumGroup.formEdit')
                <div class="col-md-5">
                    <div class="form-btn">
                        <a type="submit" href="{{ route('kelompok.index') }}" class="btn btn-danger">Back</a>
                        <button class="btn btn-primary" type="submit">{{ __('Simpan') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
