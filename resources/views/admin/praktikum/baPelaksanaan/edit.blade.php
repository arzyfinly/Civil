@extends('admin.layouts.app')
@section('title', 'Praktikum')

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">
                <h3 class="mb-0">{{ __('Edit Praktikum') }}</h3>
                <p class="text-sm mb-0">
                    {{ __('This page for Admin') }}
                </p>
            </div>
                <form action="{{ route('hargaPraktikum.update', $practicum->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    @include('admin.praktikum.practicumPrice.formEdit')
                    <button type="submit" class="btn btn-primary ml-3 mb-3">Update</button>
                    &nbsp;
                    <button type="button" class="btn btn-secondary mb-3">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection