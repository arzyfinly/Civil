@extends('../layouts.profile')
@section('title', 'Profile')

@section('content')
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">{{ $row->first_name }} {{ $row->last_name }}<span class="font-weight-bold">{{ $u->email }}</span></div>
        </div>
        <div class="col-md-5 border-right">
            @if (Session::has('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-top: -180px;margin-bottom: 128px;">
                    <strong>Uuppss!</strong> Anda belum mengisi data pribadi.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Nama Depan</label><input type="text" class="form-control" name="first_name" value="{{ $row->first_name }}"></div>
                    <div class="col-md-6"><label class="labels">Nama Belakang</label><input type="text" class="form-control" name="last_name" value="{{ $row->last_name }}"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Nama Panggilan</label><input type="text" class="form-control" name="surename" value="{{ $row->surename }}"></div>
                    <div class="col-md-12"><label class="labels">Nim</label><input type="text" class="form-control" name="nim" value="{{ $row->nim }}"></div>
                    <div class="col-md-12"><label class="labels">Alamat</label><input type="text" class="form-control" name="alamat" value="{{ $row->alamat }}"></div>
                    <div class="col-md-12"><label class="labels">Tanggal Lahir</label><input type="date" class="form-control" name="tgl_lahir" value="{{ $row->tgl_lahir }}"></div>
                    <div class="col-md-12"><label class="labels">Tempat Lahir</label><input type="text" class="form-control" name="tmpt_lahir" value="{{ $row->tmpt_lahir }}"></div>
                    <div class="col-md-12"><label class="labels">No Handphone</label><input type="text" class="form-control" name="no_hp" value="{{ $row->no_hp }}"></div>
                    <div class="col-md-12"><label class="labels">Gender</label><input type="text" class="form-control" name="gender" value="{{ $row->gender }}"></div>
                </div>
                <div class="mt-5 text-center">
                    <a class="btn btn-danger" type="button" href="{{ route('/') }}">Back</a>
                    <button class="btn btn-primary profile-button" type="button">Save Profile</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>