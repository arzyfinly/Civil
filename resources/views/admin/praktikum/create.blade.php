@extends('admin.layouts.app')
@section('title', 'Praktikum')

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">
                <h3 class="mb-0">{{ __('Daftar Praktikum') }}</h3>
                <p class="text-sm mb-0">
                    {{ __('This page for Admin') }}
                </p>
            </div>
            <div class="col-4">
                <select class="form-control " name="" id="mahasiswa">
                    <option hidden>Pilih Mahasiswa</option>
                    @foreach ($collegestudents as $row)
                    <option value="{{ $row->id }}">{{ $row->first_name }} {{ $row->last_name }}</option>
                    @endforeach
                </select>
            </div>
            <form action="{{ route('praktikum.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin\praktikum\formCreate')
                <div class="col-md-5">
                    <div class="form-btn">
                        <a type="submit" href="{{ route('praktikum.index') }}" class="btn btn-danger">Back</a>
                        <button class="btn btn-primary" type="submit">{{ __('Tambah') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#mahasiswa').on('change', function() {
            var mahasiswaID = $(this).val();
                $.ajax({
                    type: "GET",
                    url: "/praktikum/get/" + mahasiswaID,
                    dataType: "json",
                    success:function(data) {
                        if(data){
                            var name = data.first_name + " " + data.last_name;
                            $('#npm').val(data.nim);
                            $('#name').val(name);
                            $('#collegeId').val(mahasiswaID);
                        }else{
                            $('#npm').empty();
                        }
                    }
                });
        });
    });
</script>
@endsection